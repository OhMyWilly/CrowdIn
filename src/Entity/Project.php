<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="text")
     */
    private $Details;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $lang_source;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $lang_dest;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $file;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $proposed_result = [];


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAuthor(): ?int
    {
        return $this->author;
    }

    public function setIdAuthor(int $id_author): self
    {
        $this->id_author = $id_author;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->Details;
    }

    public function setDetails(string $Details): self
    {
        $this->Details = $Details;

        return $this;
    }

    public function getLangSource(): ?string
    {
        return $this->lang_source;
    }

    public function setLangSource(string $lang_source): self
    {
        $this->lang_source = $lang_source;

        return $this;
    }

    public function getLangDest(): ?string
    {
        return $this->lang_dest;
    }

    public function setLangDest(string $lang_dest): self
    {
        $this->lang_dest = $lang_dest;

        return $this;
    }

    public function getFile(): ?string
    {
        return $this->file;
    }

    public function setFile(string $file): self
    {
        $this->file = $file;

        return $this;
    }

    /**
     * get result proposed by translators
     */
    public function getProposedResult(): array
    {
        $proposed_result = $this->proposed_result;
        $proposed_result[] = '';
        return array_unique($proposed_result);
    }

    public function setProposedResult(array $proposed_result): self
    {
        $this->proposed_result = $proposed_result;

        return $this;
    }
}
