<?php

namespace App\Controller;

use App\Entity\User;
use Gedmo\Sluggable\Util\Urlizer;
use App\Repository\UserRepository;
use App\Form\ProjectCreationFormType;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PagesController extends AbstractController
{

    /**
     * @Route("/", name="app_root", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('pages/index.html.twig', [
            'controller_name' => 'PagesController',
        ]);
    }

    /**
     * @Route("/home", name="app_home", methods={"GET"})
     */
    public function home(UserRepository $repo): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $users = $repo->findAll();

        return $this->render('pages/home.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/flags", name="app_flags", methods={"GET"})
     */
    public function flags(): Response
    {
        //$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('pages/flags.html.twig', [
            'countries' => $this->countries,
        ]);
    }

    /**
     * @Route("/projects", name="app_projects")
     */

    public function projects(ProjectRepository $projectRepo, Request $request, PaginatorInterface $paginator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($request->isMethod('POST')) {
            if ($request->get('IFile')) {
                $project = $projectRepo->findById($request->get('IFile'));
                $file = $project[0]->getFile();
                $extension = explode('.', $file);
                $response = new BinaryFileResponse($file);
                $response->headers->set('Content-Type', 'text/plain');
                if ($request->get('Project')) {
                    $response->setContentDisposition(
                        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                        'proposition.' . $extension[2]
                    );
                } else {
                    $response->setContentDisposition(
                        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                        'projet.' . $extension[2]
                    );
                }
                return ($response);
            }
            if ($request->get('resultFile')) {
                $this->addFlash('success', 'Your translation has been sent to the project author!');
                //$proj = $projectRepo->findById($request->get('idProject'))[0];
            }
        }

        $allprojects = $projectRepo->findAll();
        $projects = $paginator->paginate(
            $allprojects,
            $request->query->getInt('page', 1),
            2
        );
        return $this->render('pages/projects.html.twig', [
            'projects' => $projects,
        ]);
    }

    private function isValid_i18n($uploadedFile, $lang_source)
    {
        $destination = $this->getParameter('kernel.project_dir') . '\var\i18n';
        $originalFileName = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = ($uploadedFile->guessExtension() != null) ? $uploadedFile->guessExtension() : $uploadedFile->guessClientExtension();
        $newFileName =  Urlizer::urlize($originalFileName) . '-' . uniqid() . '.' . $extension;
        $validExtension = false;

        foreach ($this->countries as $key => $value) {
            //Check If the filename contain .{countryCode}. AND if it's the same than $lang_source 
            if (strpos(strtolower($newFileName), '-' . strtolower($key) . '-') != false && (strcmp($key, $lang_source) == 0)) {
                $validExtension = true;
                break;
            }
        }
        if ($validExtension != true) {
            //unlink($uploadedFile)
            return (false);
        }
        $uploadedFile->move(
            $destination,
            $newFileName
        );
        return ($destination . '\\' . $newFileName);
    }

    /**
     * @Route("/create_project", name="app_create_project")
     */

    public function createProject(Request $request, EntityManagerInterface $em, UserRepository $repo): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $users = $repo->findAll();
        $form = $this->createForm(ProjectCreationFormType::class);

        //if method is POST
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $project = $form->getData();
            $uploadedFile = $form['file']->getData();
            if (strcmp($project->getLangSource(), $project->getLangDest()) == 0) {
                $this->addFlash('error', 'Language source and destination cannot be the same');
                return $this->redirectToRoute("app_create_project");
            }
            $newPath = ($this->isValid_i18n($uploadedFile, $project->getLangSource()));
            if ($newPath == false) {
                $this->addFlash('error', 'Invalid file | Look for the rules in the home page');
                return $this->redirectToRoute("app_create_project");
            }
            $project->setIdAuthor($request->get('id_author'));
            $project->setAuthor($request->get('author'));
            $project->setName($project->getName());
            $project->setDetails($project->getDetails());
            $project->setLangSource($project->getLangSource());
            $project->setLangDest($project->getLangDest());
            $project->setFile($newPath);

            $em->persist($project);
            $em->flush();
            $this->addFlash('success', 'Your project have been added successfully!');

            return $this->redirectToRoute("app_projects");
        }
        return $this->render('pages/create_project.html.twig', [
            'users' => $users,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/translators", name="app_translators", methods={"GET"})
     */

    public function translators(UserRepository $repo, Request $request, PaginatorInterface $paginator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $allusers = $repo->findAll();
        $users = $paginator->paginate(
            $allusers,
            $request->query->getInt('page', 1),
            6
        );

        //dd($users);
        return $this->render('pages/translators.html.twig', [
            'users' => $users,
        ]);
    }

    /**
     * @Route("/my_account", name="app_my_account", methods={"GET", "POST"})
     */
    public function my_account(Request $request, EntityManagerInterface $em, UserRepository $repo): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if ($request->isMethod('POST')) {
            $id = $request->get('id');
            $bio = $request->get('bio');
            $lang = $request->get('language');
            $user = $repo->find($id);
            if (!$user)
                return $this->redirectToRoute("app_my_account");
            $user->setBio($bio);
            if ($lang != null)
                $user->setCountries(array_merge($user->getCountries(), [$lang]));
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Account successfully updated');
            return $this->redirectToRoute("app_my_account");
        }
        $users = $repo->findAll();

        return $this->render('pages/my_account.html.twig', [
            'users' => $users,
            'countries' => $this->countries,
        ]);
    }

    private $countries = array(
        'AF' => 'Afghanistan',
        'AX' => 'Aland Islands',
        'AL' => 'Albania',
        'DZ' => 'Algeria',
        'AS' => 'American Samoa',
        'AD' => 'Andorra',
        'AO' => 'Angola',
        'AI' => 'Anguilla',
        'AQ' => 'Antarctica',
        'AG' => 'Antigua And Barbuda',
        'AR' => 'Argentina',
        'AM' => 'Armenia',
        'AW' => 'Aruba',
        'AU' => 'Australia',
        'AT' => 'Austria',
        'AZ' => 'Azerbaijan',
        'BS' => 'Bahamas',
        'BH' => 'Bahrain',
        'BD' => 'Bangladesh',
        'BB' => 'Barbados',
        'BY' => 'Belarus',
        'BE' => 'Belgium',
        'BZ' => 'Belize',
        'BJ' => 'Benin',
        'BM' => 'Bermuda',
        'BT' => 'Bhutan',
        'BO' => 'Bolivia',
        'BA' => 'Bosnia And Herzegovina',
        'BW' => 'Botswana',
        'BV' => 'Bouvet Island',
        'BR' => 'Brazil',
        'IO' => 'British Indian Ocean Territory',
        'BN' => 'Brunei Darussalam',
        'BG' => 'Bulgaria',
        'BF' => 'Burkina Faso',
        'BI' => 'Burundi',
        'KH' => 'Cambodia',
        'CM' => 'Cameroon',
        'CA' => 'Canada',
        'CV' => 'Cape Verde',
        'KY' => 'Cayman Islands',
        'CF' => 'Central African Republic',
        'TD' => 'Chad',
        'CL' => 'Chile',
        'CN' => 'China',
        'CX' => 'Christmas Island',
        'CC' => 'Cocos (Keeling) Islands',
        'CO' => 'Colombia',
        'KM' => 'Comoros',
        'CG' => 'Congo',
        'CD' => 'Congo, Democratic Republic',
        'CK' => 'Cook Islands',
        'CR' => 'Costa Rica',
        'CI' => 'Cote D\'Ivoire',
        'HR' => 'Croatia',
        'CU' => 'Cuba',
        'CY' => 'Cyprus',
        'CZ' => 'Czech Republic',
        'DK' => 'Denmark',
        'DJ' => 'Djibouti',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'EC' => 'Ecuador',
        'EG' => 'Egypt',
        'SV' => 'El Salvador',
        'GQ' => 'Equatorial Guinea',
        'ER' => 'Eritrea',
        'EE' => 'Estonia',
        'ET' => 'Ethiopia',
        'FK' => 'Falkland Islands (Malvinas)',
        'FO' => 'Faroe Islands',
        'FJ' => 'Fiji',
        'FI' => 'Finland',
        'FR' => 'France',
        'GF' => 'French Guiana',
        'PF' => 'French Polynesia',
        'TF' => 'French Southern Territories',
        'GA' => 'Gabon',
        'GM' => 'Gambia',
        'GE' => 'Georgia',
        'DE' => 'Germany',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GR' => 'Greece',
        'GL' => 'Greenland',
        'GD' => 'Grenada',
        'GP' => 'Guadeloupe',
        'GU' => 'Guam',
        'GT' => 'Guatemala',
        'GG' => 'Guernsey',
        'GN' => 'Guinea',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HT' => 'Haiti',
        'HM' => 'Heard Island & Mcdonald Islands',
        'VA' => 'Holy See (Vatican City State)',
        'HN' => 'Honduras',
        'HK' => 'Hong Kong',
        'HU' => 'Hungary',
        'IS' => 'Iceland',
        'IN' => 'India',
        'ID' => 'Indonesia',
        'IR' => 'Iran, Islamic Republic Of',
        'IQ' => 'Iraq',
        'IE' => 'Ireland',
        'IM' => 'Isle Of Man',
        'IL' => 'Israel',
        'IT' => 'Italy',
        'JM' => 'Jamaica',
        'JP' => 'Japan',
        'JE' => 'Jersey',
        'JO' => 'Jordan',
        'KZ' => 'Kazakhstan',
        'KE' => 'Kenya',
        'KI' => 'Kiribati',
        'KR' => 'Korea',
        'KW' => 'Kuwait',
        'KG' => 'Kyrgyzstan',
        'LA' => 'Lao People\'s Democratic Republic',
        'LV' => 'Latvia',
        'LB' => 'Lebanon',
        'LS' => 'Lesotho',
        'LR' => 'Liberia',
        'LY' => 'Libyan Arab Jamahiriya',
        'LI' => 'Liechtenstein',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'MO' => 'Macao',
        'MK' => 'Macedonia',
        'MG' => 'Madagascar',
        'MW' => 'Malawi',
        'MY' => 'Malaysia',
        'MV' => 'Maldives',
        'ML' => 'Mali',
        'MT' => 'Malta',
        'MH' => 'Marshall Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MU' => 'Mauritius',
        'YT' => 'Mayotte',
        'MX' => 'Mexico',
        'FM' => 'Micronesia, Federated States Of',
        'MD' => 'Moldova',
        'MC' => 'Monaco',
        'MN' => 'Mongolia',
        'ME' => 'Montenegro',
        'MS' => 'Montserrat',
        'MA' => 'Morocco',
        'MZ' => 'Mozambique',
        'MM' => 'Myanmar',
        'NA' => 'Namibia',
        'NR' => 'Nauru',
        'NP' => 'Nepal',
        'NL' => 'Netherlands',
        'AN' => 'Netherlands Antilles',
        'NC' => 'New Caledonia',
        'NZ' => 'New Zealand',
        'NI' => 'Nicaragua',
        'NE' => 'Niger',
        'NG' => 'Nigeria',
        'NU' => 'Niue',
        'NF' => 'Norfolk Island',
        'MP' => 'Northern Mariana Islands',
        'NO' => 'Norway',
        'OM' => 'Oman',
        'PK' => 'Pakistan',
        'PW' => 'Palau',
        'PS' => 'Palestinian Territory, Occupied',
        'PA' => 'Panama',
        'PG' => 'Papua New Guinea',
        'PY' => 'Paraguay',
        'PE' => 'Peru',
        'PH' => 'Philippines',
        'PN' => 'Pitcairn',
        'PL' => 'Poland',
        'PT' => 'Portugal',
        'PR' => 'Puerto Rico',
        'QA' => 'Qatar',
        'RE' => 'Reunion',
        'RO' => 'Romania',
        'RU' => 'Russian Federation',
        'RW' => 'Rwanda',
        'BL' => 'Saint Barthelemy',
        'SH' => 'Saint Helena',
        'KN' => 'Saint Kitts And Nevis',
        'LC' => 'Saint Lucia',
        'MF' => 'Saint Martin',
        'PM' => 'Saint Pierre And Miquelon',
        'VC' => 'Saint Vincent And Grenadines',
        'WS' => 'Samoa',
        'SM' => 'San Marino',
        'ST' => 'Sao Tome And Principe',
        'SA' => 'Saudi Arabia',
        'SN' => 'Senegal',
        'RS' => 'Serbia',
        'SC' => 'Seychelles',
        'SL' => 'Sierra Leone',
        'SG' => 'Singapore',
        'SK' => 'Slovakia',
        'SI' => 'Slovenia',
        'SB' => 'Solomon Islands',
        'SO' => 'Somalia',
        'ZA' => 'South Africa',
        'GS' => 'South Georgia And Sandwich Isl.',
        'ES' => 'Spain',
        'LK' => 'Sri Lanka',
        'SD' => 'Sudan',
        'SR' => 'Suriname',
        'SJ' => 'Svalbard And Jan Mayen',
        'SZ' => 'Swaziland',
        'SE' => 'Sweden',
        'CH' => 'Switzerland',
        'SY' => 'Syrian Arab Republic',
        'TW' => 'Taiwan',
        'TJ' => 'Tajikistan',
        'TZ' => 'Tanzania',
        'TH' => 'Thailand',
        'TL' => 'Timor-Leste',
        'TG' => 'Togo',
        'TK' => 'Tokelau',
        'TO' => 'Tonga',
        'TT' => 'Trinidad And Tobago',
        'TN' => 'Tunisia',
        'TR' => 'Turkey',
        'TM' => 'Turkmenistan',
        'TC' => 'Turks And Caicos Islands',
        'TV' => 'Tuvalu',
        'UG' => 'Uganda',
        'UA' => 'Ukraine',
        'AE' => 'United Arab Emirates',
        'GB' => 'United Kingdom',
        'US' => 'United States',
        'UM' => 'United States Outlying Islands',
        'UY' => 'Uruguay',
        'UZ' => 'Uzbekistan',
        'VU' => 'Vanuatu',
        'VE' => 'Venezuela',
        'VN' => 'Viet Nam',
        'VG' => 'Virgin Islands, British',
        'VI' => 'Virgin Islands, U.S.',
        'WF' => 'Wallis And Futuna',
        'EH' => 'Western Sahara',
        'YE' => 'Yemen',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe',
    );
}
