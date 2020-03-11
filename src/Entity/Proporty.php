<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProportyRepository")
 */
class Proporty
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Tarif;

    /**
     * @ORM\Column(type="integer")
     */
    private $capacite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Surface;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_hotel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->Tarif;
    }

    public function setTarif(string $Tarif): self
    {
        $this->Tarif = $Tarif;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->Surface;
    }

    public function setSurface(string $Surface): self
    {
        $this->Surface = $Surface;

        return $this;
    }

    public function getIdHotel(): ?string
    {
        return $this->id_hotel;
    }

    public function setIdHotel(string $id_hotel): self
    {
        $this->id_hotel = $id_hotel;

        return $this;
    }
}
