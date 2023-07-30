<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use SimpleXMLElement;
use App\Entity\Tarif;

class TarifFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
        <ServiceResponse>
            <Response>
                <Object type="java.util.Collection">
                    <ObjectTarif hashcode="414e786e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">69</codeDepartement>
                        <idClient type="java.lang.Integer">0</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">69.01</montant>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="1c688df1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">69</codeDepartement>
                        <idClient type="java.lang.Integer">0</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">69.02</montant>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="143ed7c9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">70</codeDepartement>
                        <idClient type="java.lang.Integer">0</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">70.01</montant>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="29c8d781" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">70</codeDepartement>
                        <idClient type="java.lang.Integer">0</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">70.02</montant>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="40bc6b95" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">71</codeDepartement>
                        <idClient type="java.lang.Integer">0</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">71.01</montant>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="68d2ef8a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">69</codeDepartement>
                        <idClient type="java.lang.Integer">1</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">69.11</montant>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="706c82c9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">69</codeDepartement>
                        <idClient type="java.lang.Integer">1</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">69.12</montant>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="63fe93c8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">70</codeDepartement>
                        <idClient type="java.lang.Integer">1</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">70.12</montant>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="5e9862c1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">71</codeDepartement>
                        <idClient type="java.lang.Integer">1</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">71.11</montant>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="667b9d6b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">71</codeDepartement>
                        <idClient type="java.lang.Integer">1</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">71.12</montant>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="3d9c105d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">71</codeDepartement>
                        <idClient type="java.lang.Integer">2</idClient>
                        <idClientHeritage type="java.lang.Integer">1</idClientHeritage>
                        <montant type="java.math.BigDecimal">71.21</montant>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="50f66944" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">71</codeDepartement>
                        <idClient type="java.lang.Integer">2</idClient>
                        <idClientHeritage type="java.lang.Integer">1</idClientHeritage>
                        <montant type="java.math.BigDecimal">71.22</montant>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="50f66945" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">71</codeDepartement>
                        <idClient type="java.lang.Integer">6</idClient>
                        <idClientHeritage type="java.lang.Integer"/>
                        <montant type="java.math.BigDecimal">71.61</montant>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="3d9c105e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">70</codeDepartement>
                        <idClient type="java.lang.Integer">5</idClient>
                        <idClientHeritage type="java.lang.Integer">1</idClientHeritage>
                        <montant type="java.math.BigDecimal">70.51</montant>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectTarif>
                    <ObjectTarif hashcode="3d9c105f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$TarifTest">
                        <codeDepartement type="java.lang.String">70</codeDepartement>
                        <idClient type="java.lang.Integer">5</idClient>
                        <idClientHeritage type="java.lang.Integer">1</idClientHeritage>
                        <montant type="java.math.BigDecimal">71.52</montant>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectTarif>
                </Object>
            </Response>
            <Exception/>
        </ServiceResponse>'; 

        $xmlObject = new SimpleXMLElement($xml);

        foreach ($xmlObject->Response->Object->ObjectTarif as $tarifData) {
            $tarif = new Tarif();
            $tarif->setCodeDepartement((string)$tarifData->codeDepartement);
            $tarif->setIdClient((int)$tarifData->idClient);
            $tarif->setIdClientHeritage((int)$tarifData->idClientHeritage);
            $tarif->setMontant((float)$tarifData->montant);
            $tarif->setZone((int)$tarifData->zone);

            $manager->persist($tarif);
        }

        $manager->flush();
    }
}
