<?php

namespace App\Entity;

use App\Repository\TrancheAgeCategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TrancheAgeCategorieRepository::class)
 */
class TrancheAgeCategorie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_tranche_age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomTrancheAge(): ?string
    {
        return $this->nom_tranche_age;
    }

    public function setNomTrancheAge(string $nom_tranche_age): self
    {
        $this->nom_tranche_age = $nom_tranche_age;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
