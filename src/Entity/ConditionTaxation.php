<?php

namespace App\Entity;

use App\Repository\ConditionTaxationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConditionTaxationRepository::class)]
class ConditionTaxation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $idClient = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0', nullable: true)]
    private ?string $taxePortDu = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0', nullable: true)]
    private ?string $taxePortPaye = null;

    #[ORM\Column]
    private ?bool $useTaxePortDuGenerale = null;

    #[ORM\Column]
    private ?bool $useTaxePortPayeGenerale = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getTaxePortDu(): ?string
    {
        return $this->taxePortDu;
    }

    public function setTaxePortDu(?string $taxePortDu): self
    {
        $this->taxePortDu = $taxePortDu;

        return $this;
    }

    public function getTaxePortPaye(): ?string
    {
        return $this->taxePortPaye;
    }

    public function setTaxePortPaye(?string $taxePortPaye): self
    {
        $this->taxePortPaye = $taxePortPaye;

        return $this;
    }

    public function isUseTaxePortDuGenerale(): ?bool
    {
        return $this->useTaxePortDuGenerale;
    }

    public function setUseTaxePortDuGenerale(bool $useTaxePortDuGenerale): self
    {
        $this->useTaxePortDuGenerale = $useTaxePortDuGenerale;

        return $this;
    }

    public function isUseTaxePortPayeGenerale(): ?bool
    {
        return $this->useTaxePortPayeGenerale;
    }

    public function setUseTaxePortPayeGenerale(bool $useTaxePortPayeGenerale): self
    {
        $this->useTaxePortPayeGenerale = $useTaxePortPayeGenerale;

        return $this;
    }
}
