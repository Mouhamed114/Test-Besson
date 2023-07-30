<?php

namespace App\Dto;


final class CalculMontantDto
{
  public int $destinataire;

  public int $expediteur;

  public int $nombreColis;

  public float $poids;

  public int $quiPaye;

}