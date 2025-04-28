<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Controller\UploadImageAuteurController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Serializer\Annotation\Groups;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageAuteurRepository")
 * @Vich\Uploadable()
 * @ApiResource(
 *      collectionOperations={
 *          "get"={
 *              "method"="GET",
 *              "path"="/images_auteurs",
 *              "normalization_context"=
 *                  {
 *                      "groups"={"get_images"}
 *                  }
 *          },
 *          "post"={
 *              "method"="POST",
 *              "path"="/images_auteurs",
 *              "controller"=UploadImageAuteurController::class
 *           }
 *      }
 * )
 */
class ImageAuteur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups({"get_images"})
     */
    private $id;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="auteurImages", fileNameProperty="filename")
     */
    public $file;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"get_images"})
     */
    private $filename;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename(): ?string
    {
        return "images/auteur/".$this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }
}
