<?php

namespace App\Entity;

use App\Repository\ImgUserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImgUserRepository::class)]
class ImgUser
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[OneToOne(targetEntity: Img::class)]
    #[JoinColumn(name: 'idImage', referencedColumnName: 'id')]
    private ?int $idImage = null;

    #[ORM\Column]
    #[OneToOne(targetEntity: User::class)]
    #[JoinColumn(name: 'idUser', referencedColumnName: 'id')]
    private ?int $idUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdImage(): ?int
    {
        return $this->idImage;
    }

    public function setIdImage(int $idImage): self
    {
        $this->idImage = $idImage;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }

    public function setIdUser(int $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }
}
