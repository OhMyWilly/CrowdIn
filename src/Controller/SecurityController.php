<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Form\UserRegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    public const LAST_EMAIL = 'app_login_last_email';

    /**
     * @Route("/login", name="app_login", methods={"GET", "POST"})
     */
    public function login(): Response
    {
        $this->denyAccessUnlessGranted('IS_ANONYMOUS');
        return $this->render('security/login.html.twig');
    }


    /**
     * @Route("/register", name="app_register", methods={"GET", "POST"})
     */

    public function register(Request $request, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder): Response
    {
        $this->denyAccessUnlessGranted('IS_ANONYMOUS');
        $form = $this->createForm(UserRegistrationFormType::class);

        //if method is POST
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->getData();
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword($encoder->encodePassword($user, $plainPassword));
            $user->setRoles(["user"]);
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'User successfully registered');
            return $this->redirectToRoute("app_login");
        }
        return $this->render('security/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout(): Response
    {
        return $this->render('security/login.html.twig');
    }

    /**
     * @Route("/settings", name="app_settings", methods={"GET", "POST"})
     */
    public function settings(Request $request, UserRepository $repo, EntityManagerInterface $em, UserPasswordEncoderInterface $encoder): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        if ($request->isMethod('POST')) {
            $id = $request->get('id');
            $email = $request->get('email');
            $plainPassword = $request->get('password');

            $user = $repo->find($id);
            if (!$user)
                return $this->redirectToRoute("app_settings");

            if ($email != null)
                $user->setEmail($email);
            else {
                $user->setPassword($encoder->encodePassword($user, $plainPassword));
            }
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Settings successfully updated');
            return $this->redirectToRoute("app_settings");
        }
        return $this->render('security/settings.html.twig');
    }
}
