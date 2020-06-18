<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
 



/**
 * @ORM\Entity(repositoryClass="App\Repository\HotelRepository") 
 * @Vich\Uploadable
 */
class Hotel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="NONE") 
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     * @var string|null
     */
    private $filename;
    /**
     * @Vich\UploadableField(mapping="hotel_image", fileNameProperty="filename")
     * @var File|null
     */
    private $imageFile;
     /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updated_at;
    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    
    private $nom_hotel;

    /**
     * @ORM\Column(type="integer")
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;
    /**
     * @ORM\Column(type="integer")
     */
    private $prix_LPDstandart;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_PDstandart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prix_PCstandart;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix_ALLISOFTstandart;

   
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNomHotel(): ?string

    {
        return $this->nom_hotel;
    }

    public function setNomHotel(string $nom_hotel): self
    {
        $this->nom_hotel = $nom_hotel;

        return $this;
    }

    public function getCategorie(): ?int
    {
        return $this->categorie;
    }

    public function setCategorie(int $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    
    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

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
    public function getPrixLPDstandart(): ?int
    {
        return $this->prix_LPDstandart;
    }

    public function setPrixLPDstandart(int $prix_LPDstandart): self
    {
        $this->prix_LPDstandart = $prix_LPDstandart;

        return $this;
    }

    public function getPrixPDstandart(): ?int
    {
        return $this->prix_PDstandart;
    }

    public function setPrixPDstandart(int $prix_PDstandart): self
    {
        $this->prix_PDstandart = $prix_PDstandart;

        return $this;
    }
 
    public function getPrixPCstandart(): ?string
    {
        return $this->prix_PCstandart;
    }

    public function setPrixPCstandart(string $prix_PCstandart): self
    {
        $this->prix_PCstandart = $prix_PCstandart;

        return $this;
    }

    public function getPrixALLISOFTstandart(): ?int
    {
        return $this->prix_ALLISOFTstandart;
    }

    public function setPrixALLISOFTstandart(int $prix_ALLISOFTstandart): self
    {
        $this->prix_ALLISOFTstandart = $prix_ALLISOFTstandart;

        return $this;
    }
    /**
     * @return null|string
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }
    /**
     * @param null|string $filename
     * @return Hotel
     */

    public function setFilename(?string $filename): Hotel
    {
        $this->filename = $filename;
        return $this;
    }
    /**
     * @return null|File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }
    /**
     * @param null|File $imageFile
     * @return Hotel
     */

    public function setImageFile(?File $imageFile): hotel
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile) {
            $this->updated_at = new \DateTime('now');

        }

        return $this;
    }
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }
    
    

   
  
    

   
  
}
