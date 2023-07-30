<?php

namespace App\Entity;

use App\Repository\TarifRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TarifRepository::class)]
class Tarif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $codeDepartement = null;

    #[ORM\Column]
    private ?int $idClient = null;

    #[ORM\Column(nullable: true)]
    private ?int $idClientHeritage = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 2, scale: '0')]
    private ?string $montant = null;

    #[ORM\Column]
    private ?int $zone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeDepartement(): ?string
    {
        return $this->codeDepartement;
    }

    public function setCodeDepartement(string $codeDepartement): self
    {
        $this->codeDepartement = $codeDepartement;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdClientHeritage(): ?int
    {
        return $this->idClientHeritage;
    }

    public function setIdClientHeritage(?int $idClientHeritage): self
    {
        $this->idClientHeritage = $idClientHeritage;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getZone(): ?int
    {
        return $this->zone;
    }

    public function setZone(int $zone): self
    {
        $this->zone = $zone;

        return $this;
    }
}
