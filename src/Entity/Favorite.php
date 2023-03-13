<?php

namespace App\Entity;

use App\Repository\FavoriteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavoriteRepository::class)]
class Favorite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    #[OneToOne(targetEntity: User::class)]
    #[JoinColumn(name: 'idUser', referencedColumnName: 'id')]
    private ?int $idUser = null;

    #[ORM\Column]
    #[OneToOne(targetEntity: Artist::class)]
    #[JoinColumn(name: 'idArtiste', referencedColumnName: 'id')]
    private ?int $idArtiste= null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getIdArtiste(): ?int
    {
        return $this->idArtiste;
    }

    public function setIdArtiste(int $idArtiste): self
    {
        $this->idArtiste = $idArtiste;

        return $this;
    }
}
