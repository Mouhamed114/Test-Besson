<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use SimpleXMLElement;
use App\Entity\ConditionTaxation;

class ConditionTaxationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
        <ServiceResponse>
            <Response>
                <Object type="java.util.Collection">
                    <ObjectConditionTaxation hashcode="fd7ec14" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ConditionTaxationTest">
                        <idClient type="java.lang.Integer"/>
                        <taxePortDu type="java.math.BigDecimal">10</taxePortDu>
                        <taxePortPaye type="java.math.BigDecimal">1</taxePortPaye>
                        <useTaxePortDuGenerale type="boolean">false</useTaxePortDuGenerale>
                        <useTaxePortPayeGenerale type="boolean">false</useTaxePortPayeGenerale>
                    </ObjectConditionTaxation>
                    <ObjectConditionTaxation hashcode="28cc1d2c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ConditionTaxationTest">
                        <idClient type="java.lang.Integer">1</idClient>
                        <taxePortDu type="java.math.BigDecimal">5</taxePortDu>
                        <taxePortPaye type="java.math.BigDecimal">2.5</taxePortPaye>
                        <useTaxePortDuGenerale type="boolean">false</useTaxePortDuGenerale>
                        <useTaxePortPayeGenerale type="boolean">false</useTaxePortPayeGenerale>
                    </ObjectConditionTaxation>
                    <ObjectConditionTaxation hashcode="708f48a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$ConditionTaxationTest">
                        <idClient type="java.lang.Integer">2</idClient>
                        <taxePortDu type="java.math.BigDecimal">5</taxePortDu>
                        <taxePortPaye type="java.math.BigDecimal">2.5</taxePortPaye>
                        <useTaxePortDuGenerale type="boolean">true</useTaxePortDuGenerale>
                        <useTaxePortPayeGenerale type="boolean">true</useTaxePortPayeGenerale>
                    </ObjectConditionTaxation>
                </Object>
            </Response>
            <Exception/>
        </ServiceResponse>';

        $xmlObject = new SimpleXMLElement($xml);

        foreach ($xmlObject->Response->Object->ObjectConditionTaxation as $conditionTaxationData) {
            $conditionTaxation = new ConditionTaxation();
            $conditionTaxation->setIdClient((int)$conditionTaxationData->idClient);
            $conditionTaxation->setTaxePortDu((float)$conditionTaxationData->taxePortDu);
            $conditionTaxation->setTaxePortPaye((float)$conditionTaxationData->taxePortPaye);
            $conditionTaxation->setUseTaxePortDuGenerale((bool)$conditionTaxationData->useTaxePortDuGenerale);
            $conditionTaxation->setUseTaxePortPayeGenerale((bool)$conditionTaxationData->useTaxePortPayeGenerale);

            $manager->persist($conditionTaxation);
        }

        $manager->flush();
    }

   
}
