<?php

namespace App\Service;

use App\Dto\CalculMontantDto;
use App\Dto\CalculMontantReponse;
use App\Repository\ClientRepository;
use App\Repository\ConditionTaxationRepository;
use App\Repository\LocaliteRepository;
use App\Repository\TarifRepository;

class CalculMontantService
{
    private ClientRepository $clientRepository;
    private LocaliteRepository $localiteRepository;
    private TarifRepository $tarifRepository ;
    private ConditionTaxationRepository $conditionTaxationRepository ;

    const  ID_CLIENT_GENERAL = 0 ;

    public function __construct(
        ClientRepository $clientRepository,
        LocaliteRepository $localiteRepository ,
        TarifRepository $tarifRepository,
        ConditionTaxationRepository $conditionTaxationRepository ) 
    {
        $this->clientRepository = $clientRepository;
        $this->localiteRepository = $localiteRepository ;
        $this->tarifRepository = $tarifRepository ;
        $this->conditionTaxationRepository = $conditionTaxationRepository ;


    }


    public function calculMontantTransport(CalculMontantDto $calculMontantDto):CalculMontantReponse{
        //determination de la ville du destinataire 
        $client = $this->clientRepository->findOneById($calculMontantDto->destinataire);

        //Détermination de la zone du destinataire 
        $localite = $this->localiteRepository->findOneByVille($client->getVille()) ;

        //Cherche du tarif applicable
        $tarif = $this->tarifRepository->findOneByZoneAndIdCliendAndDepartement($localite->getZone(), $client->getId(), $client->getCodePostal()) ;

        // Test si le tarif existe dans la zone trouvé sinon(null) on bascule sur le code zone-1
        if(null == $tarif) {
            $zoneActuel = $localite->getZone()-1;
            while(null == $tarif & $zoneActuel >= 1 ) {
                $tarif = $this->tarifRepository->findOneByZoneAndIdCliendAndDepartement($zoneActuel, $client->getId(), $client->getCodePostal()) ;
                $zoneActuel-- ;
            }
            // Si le tarif est toujours null alors, on utilise le tarif général
            if(null == $tarif) {
                $tarif = $this->tarifRepository->findOneByZoneAndIdCliendAndDepartement($localite->getZone(), $this::ID_CLIENT_GENERAL, $client->getCodePostal()) ;

            }else {
                //  Si idClientHeritage est « not null », alors il convient d’utiliser le tarif du client identifié par
                //   idClientHeritage pour ce département.
                if(null != $tarif->getIdClientHeritage()) {
                    $tarif = $this->tarifRepository->findOneByZoneAndIdCliendAndDepartement($localite->getZone(), $tarif->getIdClientHeritage(), $client->getCodePostal()) ;
                }
            }
        }

        //Détermination du montant de la taxe à appliquer
        $conditionTaxation = $this->conditionTaxationRepository->findOneByIdClient($calculMontantDto->quiPaye) ;
        // Test si le client posséde une condition de taxation, si non? alors on utilise la condition generale
        if(null == $conditionTaxation) { 
            $conditionTaxation = $this->conditionTaxationRepository->findOneByIdClient($this::ID_CLIENT_GENERAL) ;
        }

        //Calcul du montant 
          // Condition de taxation
           $montant = new CalculMontantReponse() ;
            if($conditionTaxation->isUseTaxePortDuGenerale() == true) {
                $montant->setMontantConditionTaxation($conditionTaxation->getTaxePortDu()) ;
            }

            if($conditionTaxation->isUseTaxePortPayeGenerale() == true) {
                $montant->setMontantConditionTaxation($conditionTaxation->getTaxePortPaye()) ;
            }
            $montant->setMontantTaxe($tarif->getMontant());

            $montant->setMontant($montant->getMontantTaxe()+$montant->getMontantConditionTaxation()) ;

          return $montant ;
    }
}