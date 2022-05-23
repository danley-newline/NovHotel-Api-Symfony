<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ReservationChambreRepository::class)
 */
class ReservationChambre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups("post:reserve")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="Le Nom de l'hotel est obligatoire")
     * @Assert\Length(min=3)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="Le prix est obligatoire")
     * @Assert\Length(min=1)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="La date d'arrivée est obligatoire")
     * @Assert\Length(min=3)
     */
    private $date_arrive;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="La date de depart est obligatoire")
     * @Assert\Length(min=3)
     */
    private $date_depart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="veuillez renseigner le nombres d'adultes")
     * @Assert\Length(min=1)
     */
    private $adultes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="veuillez renseigner le nombres d'enfants")
     * @Assert\Length(min=1)
     */
    private $enfants;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="la reduction est obligatoire")
     * @Assert\Length(min=1)
     */
    private $reduction;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="le prix total est obligatoire")
     * @Assert\Length(min=1)
     */
    private $total_price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="le moyen de paiement est obligatoire")
     * @Assert\Length(min=3)
     */
    private $moyen_paiement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="le nombre de nuit est obligatoire")
     * @Assert\Length(min=1)
     */
    private $nombre_of_night;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups("post:reserve")
     * @Assert\NotBlank(message="le lieu est obligatoire")
     * @Assert\Length(min=3)
     */
    private $lieu;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $CreatedAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(?string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDateArrive(): ?string
    {
        return $this->date_arrive;
    }

    public function setDateArrive(?string $date_arrive): self
    {
        $this->date_arrive = $date_arrive;

        return $this;
    }

    public function getDateDepart(): ?string
    {
        return $this->date_depart;
    }

    public function setDateDepart(?string $date_depart): self
    {
        $this->date_depart = $date_depart;

        return $this;
    }

    public function getAdultes(): ?string
    {
        return $this->adultes;
    }

    public function setAdultes(?string $adultes): self
    {
        $this->adultes = $adultes;

        return $this;
    }

    public function getEnfants(): ?string
    {
        return $this->enfants;
    }

    public function setEnfants(?string $enfants): self
    {
        $this->enfants = $enfants;

        return $this;
    }

    public function getReduction(): ?string
    {
        return $this->reduction;
    }

    public function setReduction(?string $reduction): self
    {
        $this->reduction = $reduction;

        return $this;
    }

    public function getTotalPrice(): ?string
    {
        return $this->total_price;
    }

    public function setTotalPrice(?string $total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }

    public function getMoyenPaiement(): ?string
    {
        return $this->moyen_paiement;
    }

    public function setMoyenPaiement(?string $moyen_paiement): self
    {
        $this->moyen_paiement = $moyen_paiement;

        return $this;
    }

    public function getNombreOfNight(): ?string
    {
        return $this->nombre_of_night;
    }

    public function setNombreOfNight(?string $nombre_of_night): self
    {
        $this->nombre_of_night = $nombre_of_night;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->CreatedAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $CreatedAt): self
    {
        $this->CreatedAt = $CreatedAt;

        return $this;
    }
}
