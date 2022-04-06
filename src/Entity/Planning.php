<?php

namespace App\Entity;

use App\Repository\PlanningRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlanningRepository::class)
 */
class Planning
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $heure;

    /**
     * @ORM\OneToOne(targetEntity=Utilisateurs::class, cascade={"persist", "remove"})
     */
    private $peut_choisir;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?string
    {
        return $this->heure;
    }

    public function setHeure(string $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getPeutChoisir(): ?Utilisateurs
    {
        return $this->peut_choisir;
    }

    public function setPeutChoisir(?Utilisateurs $peut_choisir): self
    {
        $this->peut_choisir = $peut_choisir;

        return $this;
    }

    public function __toString()
    {
        return $this->date . ' ' . $this->heure;
    }
}
