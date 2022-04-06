<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=CoursRepository::class)
 * @Vich\Uploadable
 */
class Cours
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;


    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * 
     * @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName", size="imageSize")
     * 
     * @var File|null
     */
    private $imageFile;

     /**
     * @ORM\Column(type="string")
     *
     * @var string|null
     */
    private $imageName;

    
    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTimeInterface|null
     */
    private $updatedAt;



    /**
     * @ORM\Column(type="string", length=100)
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $tarif;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre_participant;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $heure;

    /**
     * @ORM\ManyToOne(targetEntity=EcoleFormation::class, inversedBy="cours")
     */
    private $propose;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateurs::class)
     */
    private $est_inscrit;

    /**
     * @ORM\OneToOne(targetEntity=Salles::class, cascade={"persist", "remove"})
     */
    private $est_dispense;

    /**
     * @ORM\ManyToOne(targetEntity=Formateurs::class, inversedBy="cours")
     */
    private $enseigne;

    /**
     * @ORM\ManyToOne(targetEntity=TrancheAgeCategorie::class, inversedBy="cours")
     */
    private $dispose;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
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

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(string $tarif): self
    {
        $this->tarif = $tarif;

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

    public function getNombreParticipant(): ?string
    {
        return $this->nombre_participant;
    }

    public function setNombreParticipant(string $nombre_participant): self
    {
        $this->nombre_participant = $nombre_participant;

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

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getPropose(): ?EcoleFormation
    {
        return $this->propose;
    }

    public function setPropose(?EcoleFormation $propose): self
    {
        $this->propose = $propose;

        return $this;
    }

    public function __toString()
    {
        return $this->nom;
    }

    public function getEstInscrit(): ?Utilisateurs
    {
        return $this->est_inscrit;
    }

    public function setEstInscrit(?Utilisateurs $est_inscrit): self
    {
        $this->est_inscrit = $est_inscrit;

        return $this;
    }

    public function getEstDispense(): ?Salles
    {
        return $this->est_dispense;
    }

    public function setEstDispense(?Salles $est_dispense): self
    {
        $this->est_dispense = $est_dispense;

        return $this;
    }

    public function getEnseigne(): ?Formateurs
    {
        return $this->enseigne;
    }

    public function setEnseigne(?Formateurs $enseigne): self
    {
        $this->enseigne = $enseigne;

        return $this;
    }

    public function getDispose(): ?TrancheAgeCategorie
    {
        return $this->dispose;
    }

    public function setDispose(?TrancheAgeCategorie $dispose): self
    {
        $this->dispose = $dispose;

        return $this;
    }

    

}
