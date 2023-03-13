<?php

namespace App\Entity;

use App\Repository\ConcertRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConcertRepository::class)]
class Concert
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(nullable: true)]
    private ?int $capacite = null;

    #[ORM\Column(nullable: true)]
    #[OneToOne(targetEntity: Artist::class)]
    #[JoinColumn(name: 'idArtiste', referencedColumnName: 'id')]
    private ?int $idArtiste = null;

    #[ORM\Column(nullable: true)]
    #[OneToOne(targetEntity: Salle::class)]
    #[JoinColumn(name: 'idSalle', referencedColumnName: 'id')]
    private ?int $idSalle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(?int $capacite): self
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getIdArtiste(): ?int
    {
        return $this->idArtiste;
    }

    public function setIdArtiste(?int $idArtiste): self
    {
        $this->idArtiste = $idArtiste;

        return $this;
    }

    public function getIdSalle(): ?int
    {
        return $this->idSalle;
    }

    public function setIdSalle(?int $idSalle): self
    {
        $this->idSalle = $idSalle;

        return $this;
    }
}
