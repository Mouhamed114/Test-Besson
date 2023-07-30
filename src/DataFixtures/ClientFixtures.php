<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use SimpleXMLElement;
use App\Entity\Client;

class ClientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
        <ServiceResponse>
            <Response>
                <Object type="java.util.Collection">
                    <ObjectClient hashcode="53a346a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ClientTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <idClient type="java.lang.Integer">1</idClient>
                        <raisonSociale type="java.lang.String">ASV</raisonSociale>
                        <ville type="java.lang.String">LYON</ville>
                    </ObjectClient>
                    <ObjectClient hashcode="546cd6f8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ClientTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <idClient type="java.lang.Integer">2</idClient>
                        <raisonSociale type="java.lang.String">ASV * LUGNY LES CHAROLLES</raisonSociale>
                        <ville type="java.lang.String">LUGNY LES CHAROLLES</ville>
                    </ObjectClient>
                    <ObjectClient hashcode="35955f15" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ClientTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <idClient type="java.lang.Integer">3</idClient>
                        <raisonSociale type="java.lang.String">VINS DU MACONNAIS</raisonSociale>
                        <ville type="java.lang.String">MACON</ville>
                    </ObjectClient>
                    <ObjectClient hashcode="6195772e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ClientTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <idClient type="java.lang.Integer">4</idClient>
                        <raisonSociale type="java.lang.String">ALBERCOURT EXPRESS</raisonSociale>
                        <ville type="java.lang.String">ABELCOURT</ville>
                    </ObjectClient>
                    <ObjectClient hashcode="6195772e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ClientTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <idClient type="java.lang.Integer">5</idClient>
                        <raisonSociale type="java.lang.String">VESOUL SERVICE</raisonSociale>
                        <ville type="java.lang.String">VESOUL</ville>
                    </ObjectClient>
                    <ObjectClient hashcode="6195772f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ClientTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <idClient type="java.lang.Integer">6</idClient>
                        <raisonSociale type="java.lang.String">BENEDICTE GUEUGNON</raisonSociale>
                        <ville type="java.lang.String">GUEUGNON</ville>
                    </ObjectClient>
                </Object>
            </Response>
            <Exception/>
        </ServiceResponse>'; 

        $xmlObject = new SimpleXMLElement($xml);

        foreach ($xmlObject->Response->Object->ObjectClient as $clientData) {
            $client = new Client();
            $client->setCodePostal((string)$clientData->codePostal);
            $client->setRaisonSociale((string)$clientData->raisonSociale);
            $client->setVille((string)$clientData->ville);

            $manager->persist($client);
        }

        $manager->flush();
    }
}
