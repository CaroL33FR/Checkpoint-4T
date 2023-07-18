<?php

namespace App\Entity;

use App\Repository\ResidentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResidentRepository::class)]
class Resident
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $lastname = null;

    #[ORM\Column(length: 80)]
    private ?string $firstname = null;

    #[ORM\Column(length: 15)]
    private ?string $gender = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $birthday = null;

    #[ORM\Column(length: 25)]
    private ?string $room = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): static
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(string $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    public function setBirthday(string $birthday): static
    {
        $this->birthday = $birthday;

        return $this;
    }

    public function getRoom(): ?string
    {
        return $this->room;
    }

    public function setRoom(string $room): static
    {
        $this->room = $room;

        return $this;
    }
}
