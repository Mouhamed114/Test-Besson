<?php

namespace App\Dto;


final class CalculMontantReponse
{
  public int $montantTaxe;

  public int $montantConditionTaxation;

  public int $montant;

  public function getMontantTaxe(): ?int
  {
      return $this->montantTaxe;
  }
  public function setMontantTaxe(string $montantTaxe): self
  {
      $this->montantTaxe = $montantTaxe;

      return $this;
  }

  public function getMontantConditionTaxation(): ?int
  {
      return $this->montantConditionTaxation;
  }
  public function setMontantConditionTaxation(string $montantConditionTaxation): self
  {
      $this->montantConditionTaxation = $montantConditionTaxation;

      return $this;
  }

    
  public function getMontant(): ?int
  {
      return $this->montant;
  }
  public function setMontant(string $montant): self
  {
      $this->montant = $montant;

      return $this;
  }


}