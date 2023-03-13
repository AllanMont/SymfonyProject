<?php

namespace App\Entity;

use App\Repository\ReviewRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReviewRepository::class)]
class Review
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
    #[OneToOne(targetEntity: Concert::class)]
    #[JoinColumn(name: 'idConcert', referencedColumnName: 'id')]
    private ?int $idConcert = null;

    #[ORM\Column(nullable: true)]
    private ?int $note = null;

    #[ORM\Column(nullable: true)]
    private ?int $description = null;

    #[ORM\Column]
    #[OneToOne(targetEntity: Booking::class)]
    #[JoinColumn(name: 'idBooking', referencedColumnName: 'id')]
    private ?int $idBooking = null;

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

    public function getIdConcert(): ?int
    {
        return $this->idConcert;
    }

    public function setIdConcert(int $idConcert): self
    {
        $this->idConcert = $idConcert;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getDescription(): ?int
    {
        return $this->description;
    }

    public function setDescription(?int $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getIdBooking(): ?int
    {
        return $this->idBooking;
    }

    public function setIdBooking(int $idBooking): self
    {
        $this->idBooking = $idBooking;

        return $this;
    }
}
