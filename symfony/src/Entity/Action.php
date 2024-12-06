<?php

namespace App\Entity;

use ApiPlatform\Metadata\GetCollection;
use App\Repository\ActionRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;

#[ApiResource]
#[ORM\Entity(repositoryClass: ActionRepository::class)]
class Action
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $categorie = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $organe = null;

    #[ORM\Column(length: 255)]
    private ?string $environnement = null;

    #[ORM\Column(length: 255)]
    private ?string $texte_effet_sante = null;

    #[ORM\Column(length: 255)]
    private ?string $texte_effet_env = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getOrgane(): ?string
    {
        return $this->organe;
    }

    public function setOrgane(string $organe): static
    {
        $this->organe = $organe;

        return $this;
    }

    public function getEnvironnement(): ?string
    {
        return $this->environnement;
    }

    public function setEnvironnement(string $environnement): static
    {
        $this->environnement = $environnement;

        return $this;
    }

    public function getTexteEffetSante(): ?string
    {
        return $this->texte_effet_sante;
    }

    public function setTexteEffetSante(string $texte_effet_sante): static
    {
        $this->texte_effet_sante = $texte_effet_sante;

        return $this;
    }

    public function getTexteEffetEnv(): ?string
    {
        return $this->texte_effet_env;
    }

    public function setTexteEffetEnv(string $texte_effet_env): static
    {
        $this->texte_effet_env = $texte_effet_env;

        return $this;
    }
}
