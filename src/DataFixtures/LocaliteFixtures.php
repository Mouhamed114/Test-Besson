<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Localite;
use SimpleXMLElement;

class LocaliteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $xml = '<?xml version="1.0" encoding="ISO-8859-1"?>
        <ServiceResponse>
            <Response>
                <Object type="java.util.Collection">
                    <ObjectLocalite hashcode="5c7a262a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AEROPORT LYON ST EXUPERY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f6dad1a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AFFOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="197fb6e8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AIGUEPERSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="fc1466c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ALBIGNY SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59f66488" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ALIX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f424adc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AMBERIEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1940d1f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AMPLEPUIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e987a6d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AMPUIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c8dc2d4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ANCY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ef21bc4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ANSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="68fd118e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ARBUISSONNAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e8bb77b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ARNAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="46bb0c51" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AVEIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2225be1e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AVENAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5be4b515" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">AZOLETTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="42ca4d5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BAGNOLS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="135bc2a6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BARROT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6d482a37" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BEAUJEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ccbb8ee" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BELLEVILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2da2007" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BELLEVILLE SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e6cad07" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BELLEVUE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50d3c695" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BELMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7f9289a7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BESSENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6d8b745f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BIBOST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5e854128" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BLACE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e78d992" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BOURG DE THIZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3014411c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BRIGNAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1beaded" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BRINDAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d8ca380" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BRON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="c422f73" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BRULLIOLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4d392d4e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BRUSSIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="64cd837d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">BULLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7073b73e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CAILLOUX SUR FONTAINES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d03811f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CALUIRE ET CUIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31123984" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CENVES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="237e2247" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CERCIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2dfc7585" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHAMBOST ALLIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19878659" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHAMBOST LONGESSAIGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="10854a27" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHAMELET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ec74eea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHAMPAGNE AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2f0df46f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHAPONNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d2abb8b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHAPONOST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="407ec20c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHARBONNIERES LES BAINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="41f5c2e8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHARENTAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6dcf2f2c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHARLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d222a06" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHARNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="df50f45" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHASSAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="53bd822b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHASSELAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ead0000" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHASSIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4fdb2025" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHATILLON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b1b8618" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHAUSSAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="c00aff9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHAZAY D AZERGUES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1210a97" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHENAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="203e4015" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHENELETTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="56e1333c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHESSY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5aead4b3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHESSY LES MINES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6f326266" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHEVINAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54da4f92" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CHIROUBLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="489e25c3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CIVRIEUX D AZERGUES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6c14a74" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CLAVEISOLLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7bff0922" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">COGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24b0d6c7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">COISE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="55e4b5a2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">COLLONGES AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a50cabc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">COLOMBIER SAUGNIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e2e0a23" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">COMMUNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="509b9784" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CONDRIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16f88474" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CORBAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15bfe774" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CORCELLES EN BEAUJOLAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="69f47bd3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">COURS LA VILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31ed8ffd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">COURZIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="638844a6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">COUZON AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7532157" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CRAPONNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62b1da82" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CREPIEUX LA PAPE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a80bf6d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CUBLIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a97927e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">CURIS AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="651293a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DARDILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="269a2137" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DAREIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50fab5ad" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DARGOIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7bad9a63" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DECINES CHARPIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="42731904" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DENICE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="126f77b1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DIEME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="541b0eeb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DOMMARTIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3c709170" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DRACE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="25c6f10" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DUERNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="27f84a6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">DURETTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ddaf92" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ECHALAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1319b33" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ECULLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5fc431e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">EMERINGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49a6dbe5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">EVEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="69aebd29" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FEYZIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f0504f3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FILLONNIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5288160c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FLEURIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="645f9828" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FLEURIEU SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ffe9d93" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FLEURIEUX SUR L ARBRESLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="651b3eb7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FONTAINES ST MARTIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5fb2943c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FONTAINES SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45222039" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FRANCHEVILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4371a1a4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">FRONTENAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="592b3893" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">GENAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="248f68a1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">GENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="431e34c7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">GIVORS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="741b173d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">GLEIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1e92e158" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">GRANDRIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d086816" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">GREZIEU LA VARENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="72e99ba7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">GREZIEU LE MARCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="46ea2be1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">GRIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37e6e526" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">HAUTE RIVOIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="17ce3e76" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">IRIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6566c12f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">JARNIOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d1528ab" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">JONAGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="382111e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">JONS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31ce791" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">JOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ea6e22f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">JULIENAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1e4bac35" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">JULLIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a16db1c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">L ARBRESLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="728b49e2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA BREVENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="169fcf2e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA CALONNIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="55dae09c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE DE MARDORE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="14d04dcd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE SUR COISE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="77a3d867" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA COMBE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="25d48f8e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA FLACHERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="261cc709" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA FOUILLOUSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b4f336b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA GIRAUDIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5cb8cc03" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA MULATIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="685a0883" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA MURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ee505fa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA RODIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7deb98f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA TOUR DE SALVAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="76877f0f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LA VILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39a6ee94" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LACENAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e79541d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LACHASSAGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f817cc9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LAMURE SUR AZERGUES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e2798e6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LANCIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19a743eb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LANTIGNIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="345c0675" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LARAJASSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ac062e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LE BATARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="60c9b8ea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LE BOIS D OINGT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5b8b3c4a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LE BOULARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="12234d3a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LE BREUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ba32423" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LE PERREON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43999ca0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LE RICHOUD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19f9ef0c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LE ROSSEON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="67bd0a26" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LEGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2be579ff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LENTILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66ac6adc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LES ARDILLATS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="419bc62d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LES CHERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59efd601" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LES ECHARMEAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="10cb09c8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LES HAIES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ef3215" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LES HALLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7ec101b0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LES OLMES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31560ad3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LES SAUVAGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e0bbf3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LETRA</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3353528f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LIERGUES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2351449c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LIMAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2c6f6fe1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LIMONEST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="481a3391" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LISSIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="302f9992" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LOIRE SUR RHONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50b58f5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LONGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2bfd3f69" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LONGESSAIGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7f4e1d0e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LOZANNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6155c36d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LUCENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45915b07" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LURCIEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49ef4c3f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON</ville>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d76e204" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 1ER</ville>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7f0b4f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 2EME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4bf8868c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 3EME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2949784b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 4EME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1678991a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 5EME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="478b857c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 6EME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="18e8b496" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 7EME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="55a7f0a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 8EME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4a6c44f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON 9EME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="60a220eb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">LYON SATOLAS AEROPORT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="341f55dd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MARCHAMPT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="753e3ae6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MARCILLY D AZERGUES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="488d0e2c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MARCY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="249d8fea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MARCY L ETOILE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="64535e6d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MARDORE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1d5c7990" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MARENNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2230ebff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MARNAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39d5c3e2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MEAUX LA MONTAGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="12f4818" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MESSIMY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="47262043" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MEYS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="18103333" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MEYZIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f91659c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MILLERY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="52a60d93" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MIONS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="13c55849" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MOIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1272ac3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MONSOLS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="326868cc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MONTAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="64b842ee" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MONTANAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d324aea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MONTMELAS ST SORLIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="70d488dc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MONTROMANT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="11655d63" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MONTROTTIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15d61781" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MORANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1aa1215a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">MORNANT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4894a95e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">NEUVILLE SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="17fb7f8c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">NUELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="72cca1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ODENAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="70d85e41" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">OINGT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d143748" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ORLIENAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2a395ead" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">OULLINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c76c583" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">OUROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39a12a0e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">PIERRE BENITE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d01ab1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">POLEYMIEUX AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="53885c6b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">POLLIONNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1d6b9fa5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">POMEYS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4be18ba" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">POMMIERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c495dc4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">PONT TRAMBOUZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54ab1e31" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">PONTCHARRA SUR TURDINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e4b4e64" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">POUILLY LE MONIAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="52079efa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">POULE LES ECHARMEAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="72565928" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">PROPIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2f78bbd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">PUSIGNAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49f726d0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">QUINCIE EN BEAUJOLAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="11547a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">QUINCIEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c1159ee" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">RANCHAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="372726a7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">RAVEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6b5aba3a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">REGNIE DURETTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="11786ce6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">RILLIEUX LA PAPE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="793578ff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">RIVERIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="259aeb84" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">RIVOLET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ddc3a65" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ROCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="257ded07" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ROCHETAILLEE SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e5479cb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">RONNO</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6c083703" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">RONTALON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f53dd5e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ROUSSILLIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4aea4e2e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SAIN BEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5cb2d46e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SALLES ARBUISSONNAS EN BEAUJOLAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6098b14d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SARCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="48a067c6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SATHONAY CAMP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1afd1d6a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SATHONAY VILLAGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f9627fd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SAUGNIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b1b8411" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SAVIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4b7bb73b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SEREZIN DU RHONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="273aa934" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SIMANDRES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c3aa90a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SOLAIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6f300f3d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SOUCIEU EN JARREST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3c38a6d2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SOURCIEUX LES MINES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b5043e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SOURZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="22987efe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">SOUZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49b96770" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST ANDEOL LE CHATEAU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b360fe0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST ANDRE LA COTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6a4c5149" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST APPOLINAIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="386cc624" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST BONNET DE MURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6d44826c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST BONNET DES BRUYERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2cceb87f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST BONNET LE TRONCY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37b2b0d4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST CHRISTOPHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="34774add" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST CLEMENT DE VERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d40e14" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST CLEMENT LES PLACES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="56e84502" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST CLEMENT SUR VALSONNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b0ab2e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST CYR AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4b65e7da" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST CYR LE CHATOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f58bfe2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST CYR SUR LE RHONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="b9d964d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST DIDIER AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16f69f30" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST DIDIER SOUS RIVERIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="194d1417" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST DIDIER SUR BEAUJEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1361fefb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST ETIENNE DES OULLIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ab1aae" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST ETIENNE LA VARENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4b6498ed" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST FONS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39741646" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST FORGEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="74626b21" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST GENIS L ARGENTIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="69677f38" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST GENIS LAVAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="9d16b98" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST GENIS LES OLLIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="13eecd31" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST GEORGES DE RENEINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="22e15630" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST GERMAIN AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="77e17b33" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST GERMAIN SUR L ARBRESLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="745f8ec1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST IGNY DE VERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2d955c97" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST JACQUES DES ARRETS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="28f1d4e2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST JEAN D ARDIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ccf566e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST JEAN DE TOUSLAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="70335e88" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST JEAN DES VIGNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3c836c44" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST JEAN LA BUSSIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="58390365" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST JULIEN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="70e0923" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST JULIEN SUR BIBOST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2a79dc73" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST JUST D AVRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="267817ce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST LAGER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1662e91d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST LAURENT D AGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37b67a66" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST LAURENT D OINGT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2d1ddb1d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST LAURENT DE CHAMOUSSET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31c640f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST LAURENT DE MURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ced1661" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST LAURENT DE VAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="71585986" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST LOUP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f5da68c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST MAMERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d61623d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST MARCEL L ECLAIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="478d31a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST MARTIN DE CORNAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="186b5241" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST MARTIN EN HAUT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2de535ed" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST MAURICE SUR DARGOIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="23377225" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST NIZIER D AZERGUES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d26ed33" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST PIERRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="769eb603" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST PIERRE DE CHANDIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2dbfbbcc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST PIERRE LA PALUD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6c2658b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST PRIEST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="44988c24" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST ROMAIN AU MONT D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b18b2aa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST ROMAIN DE POPEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1279f609" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST ROMAIN EN GAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="507d259" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST ROMAIN EN GIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4482d3a3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST SORLIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="69149578" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST SYMPHORIEN D OZON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="46612f2d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST SYMPHORIEN SUR COISE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16605774" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST VERAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f0d8c26" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST VINCENT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="426c1a82" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">ST VINCENT DE REINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="47406edf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">STE CATHERINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="572f1704" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">STE COLOMBE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54903453" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">STE CONSORCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="475b6084" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">STE FOY L ARGENTIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="401d9eb5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">STE FOY LES LYON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="589e9df5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">STE PAULE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15946d47" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TALUYERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43925b62" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TAPONAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3dada196" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TARARE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="524b9e7c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TASSIN LA DEMI LUNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62920919" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TERNAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="61937add" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TERNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19677537" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">THEIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="57407ae8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">THEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4a454218" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">THIZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="8f65bc0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">THURINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66019ed8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TOUSSIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7463ab39" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TRADES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b7e66e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TREVES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="67945c4a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">TUPIN ET SEMONS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d373366" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VALSONNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="730f8cef" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VAUGNERAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1edd9ed" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VAULX EN VELIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="267e5798" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VAUX EN BEAUJOLAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="30a8cfe6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VAUXRENARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ae91dff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VEISSIEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3eb05e26" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VENISSIEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2cf530f1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VERNAISON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15603546" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VERNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f4991a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VILLE SUR JARNIOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="56f7d03f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VILLECHENEVE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="278904b4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VILLEFRANCHE SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1493d9b3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VILLEURBANNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="76b98152" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VILLIE MORGON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="cd96b63" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">VOURLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1619372c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">69</codePostal>
                        <ville type="java.lang.String">YZERON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="51753509" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ABELCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="65ed0ba6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ABONCOURT GESINCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2d97f391" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ACHEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="52f7cbf9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ADELANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a7072fd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AILLEVANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c8d4565" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AILLEVILLERS ET LYAUMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ec7195b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AILLONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="151c590" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AINVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1f81719d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AISEY ET RICHECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6b4a0a93" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ALAINCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49fc6fec" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AMAGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c1814e6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AMANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31043746" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AMBIEVILLERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="bc8edce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AMBLANS ET VELOTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3474756d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AMONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49c96202" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AMONT ET EFFRENEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="44419726" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ANCHENONCOURT ET CHAZEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e2a62cc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ANCIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="60bc56c1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ANDELARRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ce3ca84" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ANDELARROT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f04d7f5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ANDORNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="36fe468f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ANGIREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6fca727d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ANJEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5422a5e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">APREMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2eb881ee" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ARBECEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="535a4838" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ARC LES GRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4c3b7f48" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ARGILLIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="56217711" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AROZ</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2f102944" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ARPENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4e05477f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ARSANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3c990add" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ATHESANS ETROITEFONTAINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6398523f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ATTRICOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="253fd92e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUBERTANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2cb6e1d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUBIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="79aa3359" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUGICOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15115676" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AULX LES CROMARY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="254367c8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUTET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6c528e94" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUTHOISON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="200ece1b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUTOREILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2bfd5f0e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUTREY LE VAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="76ba6b2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUTREY LES CERRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2c8cf3ec" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUTREY LES GRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59e221cd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUVET ET LA CHAPELOTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d1947d5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AUXON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="76baf7aa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">AVRIGNEY VIREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6cd9f6cb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BAIGNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59d9c141" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BARD LES PESMES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="671ec07c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BARGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="13ef41c8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BASSIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="40c7bbb1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BATTRANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="78f382b0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BAUDONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b092ed9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BAULAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="57e2c6d6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="696c38ad" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BEAUJEU ST VALLIER PIERR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ffd1bed" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BEAUMOTTE AUBERTANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="234856d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BEAUMOTTE LES PIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4623b83c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BELFAHY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="53148f1d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BELMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6abfe387" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BELONCHAMP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5bf2ead1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BELVERNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="29166e80" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BESNANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7fb0aa92" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BETAUCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="278e98bc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BETONCOURT LES BROTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2cd72ee" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BETONCOURT LES MENETRIERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e3468b1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BETONCOURT ST PANCRAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="22c57d32" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BETONCOURT SUR MANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="539e6f73" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BEULOTTE ST LAURENT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="46a711e8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BEVEUGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="288ba95" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BITHAINE ET LE VAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5e918d7f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BLONDEFONTAINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="25e0bd5a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BONBOILLON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45af7323" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BONNEVENT VELLOREILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b02293" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="52ade1c2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOUGEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15c0b1f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOUGNON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1de398a2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOUHANS ET FEURG</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4939c302" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOUHANS LES LURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6f31dddc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOUHANS LES MONTBOZON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="32dccf8c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOULIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ebe0a6a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOULOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e9dd554" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOULT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c2095b4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOURBEVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f449c16" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOURGUIGNON LES CONFLANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="316388cd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOURGUIGNON LES LA CHARI</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7daa640f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOURGUIGNON LES MOREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d8f553d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOURSIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d25375e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BOUSSERAUCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6560310" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BRESILLEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="78e312af" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BREUCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3dfdd2a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BREUCHOTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5e30f262" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BREUREY LES FAVERNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f79303d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BREVILLIERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d4e25c3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BRIAUCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5912c08" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BROTTE LES LUXEUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7de1c412" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BROTTE LES RAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="710fba4e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BROYE AUBIGNEY MONTSEUGN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f9090df" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BROYE LES LOUPS ET VERFO</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2c174113" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BRUSSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2ab15d02" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BUCEY LES GY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62514433" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BUCEY LES TRAVES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4554a2b2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BUFFIGNECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="378577ad" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BUSSIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b741b55" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BUSSUREL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="63ae7787" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BUTHIERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="53297331" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">BYANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4649c09e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CALMOUTIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1404e91f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CEMBOING</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4e64fc7d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="47fc9ac0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CENDRECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1913d82c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CERRE LES NOROY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="65d53d90" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAGEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="12bced2b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHALONVILLARS MANDREVILL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3176aba9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAMBORNAY LES BELLEVAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="65fffd9d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAMBORNAY LES PIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="96382bc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAMPAGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="641c0974" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAMPEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6cb0d204" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAMPLITTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4cac3c5b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAMPLITTE LA VILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3faea1b0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAMPTONNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="61f94a79" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAMPVANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3588802f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHANCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1497a91e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHANTES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="70dffb21" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHARCENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e06d6c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHARENTENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e2fcde7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHARGEY LES GRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6476fff7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHARGEY LES PORT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="409ee4a8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHARIEZ</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7fb5f2bc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHARMES ST VALBERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2535625" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHARMOILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2d3c9854" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHASSEY LES MONTBOZON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6534c9ff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHASSEY LES SCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6cb9b841" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHATEAU LAMBERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="14efeb2b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHATENEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="13385eca" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHATENOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59d729a1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAUMERCENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3cee371b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAUVIREY LE CHATEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b63ecdd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAUVIREY LE VIEIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1d53bfa1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAUX LA LOTIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6549f211" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAUX LES PORT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59b36e0a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHAVANNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="12fd8088" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHEMILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="41016a75" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHENEBIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43f448aa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHENEVREY ET MOROGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5aceb3c0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHEVIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="387b30d3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CHOYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1fc2899d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CINTREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1cd8b2b5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CIREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="56bc97de" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CITERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="77969c4e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CITEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="40f00238" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CLAIREGOUTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4d21cbd6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CLANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="65cd7629" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COGNIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1408b1f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COISEVAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="46db97c0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COLOMBE LES BITHAINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7ac7e297" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COLOMBE LES VESOUL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="58ed667a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COLOMBIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49e30132" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COLOMBOTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="56639f83" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COMBEAUFONTAINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="267d7dc4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COMBERJON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="78cbe299" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CONFLANDEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1189e8c4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CONFLANS SUR LANTERNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7510a4da" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CONFRACOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="17b72041" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CONTREGLISE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="77a69790" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CORBENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5a28ac4e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CORCELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24486320" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CORDONNET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="c63dc7c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CORNOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7020573e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CORRAVILLERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5b3fe0f4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CORRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ec9e1f9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COULEVON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3812c2a3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COURCHATON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="57a87817" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COURCUIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="75645af6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COURMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f9008b0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COURTESOULT ET GATEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="392a62cb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">COUTHENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="dbc1abf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CRESANCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="387ff8a4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CREVANS ET LA CHAPELLE L</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="599cf3f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CREVENEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f54c970" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CROMARY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="477500c0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CUBRY LES FAVERNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="528461e6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CUBRY LES SOING</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="71376d5c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CUGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6deced15" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CULT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5dc13614" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">CUVE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37c58b22" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DAMBENOIT LES COLOMBE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a3181c9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DAMPIERRE LES CONFLANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="383fb859" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DAMPIERRE SUR LINOTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f5ff7e8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DAMPIERRE SUR SALON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="158cd143" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DAMPVALLEY LES COLOMBE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ffe90c2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DAMPVALLEY ST PANCRAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="51d1d995" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DELAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2823ef2a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DEMANGEVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f2ac2fc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">DENEVRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6756ff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ECHAVANNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="807f8e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ECHENANS SOUS MONT VAUDO</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="743643e3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ECHENOZ LA MELINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16a327b0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ECHENOZ LE SEC</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31829f6c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ECHEVANNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="76b084d8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ECROMAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ee1bdc8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ECUELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5672b5b8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">EHUNS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f86f5f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">EQUEVILLEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5257c885" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ERREVET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="12dbdff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ESBOZ BREST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6214b0f3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ESMOULIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3c6d53d3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ESMOULINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2d9a60a3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ESPRELS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="723e84b8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ESSERTENNE ET CECEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="667b86a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ETOBON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37c3a6f0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ETRELLES ET LA MONTBLEUS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e04f32a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ETROITEFONTAINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66f85196" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ETUZ</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="38b483aa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FAHY LES AUTREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="53302afb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FALLON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7f55ef67" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FAUCOGNEY ET LA MER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62d89480" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FAVERNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="78fd9232" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FAYMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f894eac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FEDRY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f8c26ff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FERRIERES LES RAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a544ff1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FERRIERES LES SCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="254c5c83" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FILAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="384daf96" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FLAGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7442bdba" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FLEUREY LES FAVERNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49b639f7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FLEUREY LES LAVONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5a97acef" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FLEUREY LES ST LOUP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1bdaad60" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FONDREMAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31ac87e9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FONTAINE LES LUXEUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="360eeb79" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FONTENOIS LA VILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d8570a9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FONTENOIS LES MONTBOZON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="33a76e2e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FOUCHECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3532a880" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FOUGEROLLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="10d486c9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FOUVENT LE BAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="70dcfec0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FOUVENT ST ANDOCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3cd92923" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRAHIER ET CHATEBIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="551bd80a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRAMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1704a42d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRANCALMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31b69229" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRANCHEVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4935db3e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRANCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ecce8fe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRASNE LE CHATEAU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ed4b486" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FREDERIC FONTAINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e97f1d8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRESNE ST MAMES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3986d4a1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="42f1b388" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRETIGNEY ET VELLOREILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a41c80e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FRETTES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="64b51464" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FROIDECONCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2c4de4e3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FROIDETERRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2dee09ce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FROTEY LES LURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66c5caf0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">FROTEY LES VESOUL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="438e8746" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GENEVREUILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="42532750" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GENEVREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="613a1734" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GEORFANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2cc988ca" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GERMIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="63339cbe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GEVIGNEY ET MERCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5177b0d3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GEZIER ET FONTELENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="8fa166e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GIREFONTAINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ad6945c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GONVILLARS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3da6529b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GOUHENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="72795dbb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GOURGEON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7df8dab3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GRAMMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5cde5e61" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GRANDECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="b0661e9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GRANDVELLE ET LE PERRENO</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50060da6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GRANGES LA VILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d6a3655" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GRANGES LE BOURG</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="81525f3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GRATTERY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="246e78aa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50b3f395" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GRAY LA VILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="563ce497" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GREUCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37c3a1bc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">GY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="caf5a3e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">HAUT DU THEM CHATEAU LAM</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4c4da2f3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">HAUTEVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d0526a7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">HERICOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5d2cde10" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">HUGIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2ca71c3a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">HURECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f2e3abd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">HYET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24125614" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">IGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2fd14d8c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">JASNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="563a3ada" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">JONVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="8edea70" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">JUSSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3bba63a4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA BARRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49e3c29e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA BASSE VAIVRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7fe38f8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA BRUYERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="434e25e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE LES LUXEUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f98f94c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE ST QUILLAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54170d32" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA CORBIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="356378bf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA COTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="158c5efb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA CREUSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="32afbbca" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA DEMIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2f51e4c5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA GRANDE RESIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="298259c8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA LANTERNE ET LES ARMON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2cd46ec2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA LONGINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2eb3998c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA MALACHERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1125ce48" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA MONTAGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4909e1c3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA NEUVELLE LES LURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="27c4eeab" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA NEUVELLE LES SCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="721130f2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA PISSEURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="46a49a5f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA PROISELIERE ET LANGLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6092f734" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA QUARTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50a3a874" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA RESIE ST MARTIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="28888108" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA ROCHE MOREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19cf4902" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA ROCHELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="77c22f8a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA ROSIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6dbf4a72" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA VAIVRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="29b0baa8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA VERGENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="11ae80fa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA VERNOTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5795a627" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA VILLEDIEU EN FONTENET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="21cf775d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA VILLENEUVE BELLENOYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ba58c02" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LA VOIVRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="718af5e5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LAMBREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5a15c79f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LANTENOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4be4c5ed" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LARIANS ET MUNANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="187e7188" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LARRET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="154fa448" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LAVIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1faa7de6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LAVONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="722f9747" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LE MAGNORAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1274f0e2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LE PONT DE PLANCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b728ee5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LE TREMBLOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5e037ae0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LE VAL DE GOUHENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="36783858" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LE VAL ST ELOI</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="ebb3558" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LEFFOND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24ab2bf6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LES AYNANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="61d33648" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LES BATIES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7190e324" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LES FESSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f308abb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LES FONTENIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6be42bcf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LES MAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50f85a5f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LIEFFRANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="60f53c80" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LIEUCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="457293b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LIEVANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7653e2b6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LINEXERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d49576a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LOEUILLEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5a0a3068" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LOMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="52f02a06" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LONGEVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15571a74" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LOULANS VERCHAMP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="989c09e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="32c4c9f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LUXEUIL AIR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15a74f84" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LUXEUIL LES BAINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b556e37" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LUZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5b6eae6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">LYOFFANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2bf7a4f8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAGNIVRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f6fac55" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAGNONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6c9b085d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAGNY DANIGON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3642495f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAGNY JOBERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39df17cd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAGNY LES JUSSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6593b169" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAGNY VERNOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43649898" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAILLERONCOURT CHARETTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15e45b9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAILLERONCOURT ST PANCRA</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54337562" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAILLEY ET CHAZELOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e5fa01d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAIZIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="380910bc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MALANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5b29c361" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MALBOUHANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="12da4409" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MALVILLERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37a8b48a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MANDREVILLARS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24e4ec92" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MANTOCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3167782a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MARAST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="226bd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MARGILLEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d3d424c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MARNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="30cb925e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MAUSSANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f67259" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MELECEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4fcd339a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MELIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="28f6ec64" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MELINCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6b19ae3e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MELISEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62fe9f60" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MEMBREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3a918a66" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MENOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="29154c94" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MERCEY SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="35569d9e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MERSUAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49860b6d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MEURCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7f5846d0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MIELLIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c914300" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MIGNAFANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24c5f4e4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MIGNAVILLERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4050b798" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MOFFANS ET VACHERESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="73457d24" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MOIMAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="571b019b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MOLAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e0693ca" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MOLLANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31d0ca61" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONT LE FRANOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="296bfd4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONT LE VERNOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="770bf89f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONT ST LEGER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="32efcbc8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTAGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1d2bd198" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTARLOT LES CHAMPLITTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="27cd611e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTARLOT LES RIOZ</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ca30cfc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTBOILLON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="14a98314" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTBOZON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4dca0a5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="30b6b321" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2aaa5483" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTDORE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="14927a57" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTESSAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c9df04e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTIGNY LES CHERLIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="450b9f8f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTIGNY LES VESOUL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e1888b2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTJUSTIN ET VELOTTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7cb69eca" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39731fbd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTSEUGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3528cec2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTUREUX ET PRANTIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a1e3dd2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MONTUREUX LES BAULAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="476cab2e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MOTEY BESUCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2f5a7da4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">MOTEY SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5deeb245" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NANTILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="61fa0030" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NANTOUARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="64228190" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NAVENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1568484c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NEUREY EN VAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7162808e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NEUREY LES LA DEMIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="79e624c9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NEUVELLE LES CHAMPLITTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="747946a4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NEUVELLE LES CROMARY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="460cf4b9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NEUVELLE LES LA CHARITE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c96c19c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NOIDANS LE FERROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d8128ab" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NOIDANS LES VESOUL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a94f97a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NOIRON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2a86c638" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NOROY LE BOURG</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="763f9c57" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">NOROY LES JUSSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4a315067" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">OIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6b95c03e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">OISELAY ET GRACHAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="34805da0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ONAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5782ce4d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">OPPENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4cb64e1d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ORICOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54c27943" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ORMENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2ba7492e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ORMOICHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="73b58165" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ORMOY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1142493c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">OUGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16d60afe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">OVANCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e6bb568" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">OYRIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1152dedc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PALANTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="57a54666" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PASSAVANT LA ROCHERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="23b0ff7e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PENNESIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3955bb80" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PERCEY LE GRAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b88ede8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PERROUSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2abb30ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PESMES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6778821e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PIERRECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="18a6b4a4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="689d87a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PLAINEMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e334f08" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PLANCHER BAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a89b61f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PLANCHER LES MINES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4713bad5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">POLAINCOURT ET CLAIREFON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="604f1a67" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">POMOY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="694e9196" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PONT DU BOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="253844dd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PONT SUR L OGNON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="11311c42" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PONTCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2f3639df" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PORT D ATELIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="111177b0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PORT SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="11c8cc91" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">POYANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15ee4cb6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PREIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4fee4bf9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PRESLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="25bdf16e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PROVENCHERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5935801d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PURGEROT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="476e1dac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PUSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e5e2bd7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">PUSY ET EPENOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4890379f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">QUENOCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7433ccf0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">QUERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="74d3dc29" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">QUINCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="11b43ab" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">QUITTEUR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24f7901e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RADDON ET CHAPENDU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7916b487" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RAINCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="41a6492c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RANZEVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="c0e0960" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RAY SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6d8983ce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RAZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f2c8190" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RECOLOGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62ee45c0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RECOLOGNE LES RIOZ</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="92572fe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RENAUCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="79a08662" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RIGNOVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19d6ca50" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="647c5770" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RIOZ</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1f50ad9a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ROCHE ET RAUCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="69b56985" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ROCHE SUR LINOTTE ET SOR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="522d0fb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RONCHAMP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="30c6115f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ROSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b9e8cfd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ROSIERES SUR MANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="463a4435" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ROYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b541798" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RUHANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2dd90a2c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">RUPT SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="42ae638" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SAPONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c7068ab" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SAULNOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="17e7c123" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SAULX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7038ed17" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SAUVIGNEY LES GRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2955ba90" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SAUVIGNEY LES PESMES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b4b5923" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SAVOYEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4fc9273e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SCEY SUR SAONE ET ST ALB</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1f2f805e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SCYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6794ab50" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SECENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="517b4650" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="744557fa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SEMMADON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="749319b8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SENARGENT MIGNAFANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="657dbad2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SENONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2174650c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SERVANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="609607fc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SERVIGNEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19e662ee" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SEVEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6469048a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SOING CUBRY CHARENTENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2aa93386" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SORANS LES BREUREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4a75b84b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SORNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="76966a1d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST ANDOCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d10d2be" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST BARTHELEMY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4b7bbea5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST BRESSON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2921695a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST BROING</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="508ba8ce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST FERJEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f795b2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST GAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e84d99c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST GERMAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43ead1a8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST JULIEN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6d6a8f6d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST LOUP NANTOUARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6eee7539" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST LOUP SUR SEMOUSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="69522a14" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST MARCEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1148bd11" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST REMY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e74aff4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST SAUVEUR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ecbdc34" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST SULPICE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19e60a8b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">ST VALBERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4dbe38f5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">STE MARIE EN CHANOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="38d84b3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">STE MARIE EN CHAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="40030597" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">STE REINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6641d56" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">SUAUCOURT ET PISSELOUP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16c1fc61" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TARTECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19a04ff3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TAVEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6be0e7a9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TERNUAY MELAY ET ST HILA</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a893f93" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">THEULEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="48ad0abe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">THIEFFRANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="589c6538" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">THIENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b96cfb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TINCEY ET PONTREBEAU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2a1d4a6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TRAITIEFONTAINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4e8fdfa3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TRAVES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="47a36ea0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TREMOINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ab3ef1e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TRESILLEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b17b8ad" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TREVEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="525da4fd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">TROMAREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1fb084a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VADANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7dd334a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VAITE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4b52434e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VAIVRE ET MONTOILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c0dc84" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VALAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="38cd610f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VALLEROIS LE BOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="339f3ceb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VALLEROIS LORIOZ</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b5882c7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VANDELANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ff1e4d7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VANNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="11e70842" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VANTOUX ET LONGEVELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="56cf2e3c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VAROGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3be491aa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VARS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b174e9e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VAUCHOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="172a74f7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VAUCONCOURT NERVEZAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="64651002" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VAUVILLERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="26fe26cc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VAUX LE MONCELOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="77a52f13" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELESMES ECHEVANNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7db5c5c2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="28ca8408" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLE LE CHATEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a23e24" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLECHEVREUX ET COURBEN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2c9db166" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLECLAIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24e9b66c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLEFAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6bc77f62" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLEFREY ET VELLEFRANGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="767c3235" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLEFRIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="53c47258" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLEGUINDRY ET LEVRECEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62f1a5f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLEMINFROY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e6c5624" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLEMOZ</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a8b9653" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLEXON QUEUTREY ET VAU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="623a61ff" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELLOREILLE LES CHOYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66f7deba" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VELORCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b3fba26" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VENERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="74d622c3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VENISEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16846c22" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VERCHAMP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4fd737ba" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VEREUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3a8bbd49" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VERLANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2c3821a6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VERNOIS SUR MANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19292ff8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VESOUL</ville>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f0c4faf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VEZET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="21439ae9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLAFANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5d6f480e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLARGENT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="34e3bf0e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLARS LE PAUTEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54144b42" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLEFRANCON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59052e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLEPAROIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54630f2f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS BOUTON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="337a01f1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS CHEMIN ET MONT L</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f158f9e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS LA VILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5087d5ce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS LE SEC</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5e5f0b0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS LES LUXEUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b1cb5d6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS PATER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59e612eb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS SUR PORT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="fe43069" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS SUR SAULNOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4e2645a5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLERS VAUDEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="32a67bb8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILLE
        RSEXEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50048702" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VILORY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="593bbd58" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VIREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="610c0a2c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VISONCOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5d70007a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VITREY SUR MANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="642f7982" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VOLON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="68d27930" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VORAY SUR L OGNON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="52127413" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VOUGECOURT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3982b57d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VOUHENANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="34593f0a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VREGILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f39c45f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VY LE FERROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="598b619b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VY LES FILAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4db5350a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VY LES LURE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="33ad4b61" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VY LES RUPT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="362fe7c8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">70</codePostal>
                        <ville type="java.lang.String">VYANS LE VAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31a1743" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ALLEREY SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="25ed314c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ALLERIOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="773f8807" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ALUZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6bfbc0ba" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">AMANZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5d2a2ab8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">AMEUGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b5ac5d0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ANGLURE SOUS DUN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="47119f5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ANOST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1d5f261a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ANTULLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="51be8406" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ANZY LE DUC</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="32cdcfd7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ARTAIX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6608464f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">AUTHUMES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="294020de" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">AUTUN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="312de3fa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">AUXY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3bd24b4f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">AZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6b4e4e37" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BALLORE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="61f133ea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BANTANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="228779e2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BARIZEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6c52f623" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BARNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3a9dab64" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BARON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="455f504c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BAUDEMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7490d128" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BAUDRIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f93d4e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BAUGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="727d2897" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BEAUBERY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="76f40c39" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BEAUMONT SUR GROSNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="104eaf32" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BEAUREPAIRE EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1dd003fb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BEAUVERNOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43b56307" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BELLEVESVRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3978834b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BERGESSERIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16f3ce67" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BERGESSERIN LA CHATELAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6073d7f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BERZE LA VILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="556788f2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BERZE LE CHATEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ff3ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="106a15d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BISSEY SOUS CRUCHAUD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5a4be131" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BISSY LA MACONNAISE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2bad8647" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BISSY SOUS UXELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d4ab5b8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BISSY SUR FLEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="23e049d9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BLANOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5a1057f5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BLANZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66fec404" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOIS STE MARIE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ff7176f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BONNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5723a9a1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOSJEAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6655b5b8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOUHANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50d7785" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOURBON LANCY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3721bf5a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOURG LE COMTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="899c9fd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOURGNEUF VAL D OR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="289c0574" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOURGVILAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b2a1780" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOUZERON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="686ce26e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BOYER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4485d951" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRAGNY EN CHAROLLAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2f7e77fc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRAGNY SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="17f759c0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRANDON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7025588a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="23d8058b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b53fb0f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRESSE SUR GROSNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="687b437" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRIANT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37488a3a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRIENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b6b0230" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRION</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e5cdc9d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BROYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5297df32" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BRUAILLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="70be75fa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BUFFIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6833a9e9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BURGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="17d83571" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BURNAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="739c99f1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BURZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e3ed883" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BUSSIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ff8982d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">BUXY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="79cec2c0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CERON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="755409b9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CERSOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="604a8cdc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e65f0e7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAINTRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16aaedb2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHALMOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2fdb4cbe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHALON SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="668b667d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAMBILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49f5cd23" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAMILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="286edac4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAMPAGNAT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5dc8e99" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAMPAGNY SOUS UXELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5315e1d0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAMPFORGEUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="419c494d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAMPLECY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b907fe1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAMPLIEU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4bbbcc27" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHANES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16583b49" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHANGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a9c4114" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHANGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2874c6ef" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAPAIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="ab089a9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHARBONNAT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4c1dbbba" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHARBONNIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="340fd760" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHARDONNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c04fa53" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHARETTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2ace9ec1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHARMOY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6318a6db" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHARNAY LES CHALON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6772a6b0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHARNAY LES MACON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="181da1df" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAROLLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="416e43d7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHARRECEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e27f9d0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHASSELAS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4281de5c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHASSEY LE CAMP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c2d8c20" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHASSIGNY SOUS DUN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="324ab827" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHASSY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4780223c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHATEAU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2d47b5d0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHATEAUNEUF</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ef181e9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHATEAURENAUD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="61880847" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHATEL MORON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="29d79f57" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHATENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="b1e1e37" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHATENOY EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6651b294" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHATENOY LE ROYAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7da34706" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAUDENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6a8c1b5a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHAUFFAILLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1457e85c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHEILLY LES MARANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1757fa73" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHENAY LE CHATEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="10fb9ffe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHENOVES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="77c4e567" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHERIZET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1fb10a9f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHEVAGNY LES CHEVRIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="20305cfa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHEVAGNY SUR GUYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="47283198" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHIDDES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1fd016a7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHISSEY EN MORVAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="167f3e42" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CHISSEY LES MACON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7bd06a97" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CIEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="30061f02" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CIRY LE NOBLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="61ddd4ef" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CLERMAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2ac6c91b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CLESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="60bd218d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CLESSY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="20e5e199" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CLUNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="543e14ae" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CLUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37bfd6b7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">COLLONGE EN CHAROLLAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="13a9a4f9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">COLLONGE LA MADELEINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="668de184" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">COLOMBIER EN BRIONNAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6cd0d5b5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CONDAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="27e95e3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CORDESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="44a26b5c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CORMATIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3368838" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CORTAMBERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7129162d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CORTEVAIX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="406f1e65" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">COUBLANC</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f3499ef" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">COUCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16663a54" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CRECHES SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="117f6c49" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CREOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="449e3598" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CRESSY SUR SOMME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ed0b159" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CRISSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="472b82e5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CRONAT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="799eace3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CRUZILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2068a976" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CUISEAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="374d9299" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CUISERY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45d3972c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CULLES LES ROCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4669ed84" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CURBIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54689939" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CURDIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1f23987a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CURGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59ef818e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CURTIL SOUS BUFFIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b22bfc2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CURTIL SOUS BURNAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="265b98b6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CUSSY EN MORVAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4786e866" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">CUZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6a03a539" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DAMEREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1554778f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DAMPIERRE EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c755839" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DAVAYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1bf3359b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DEMIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c446172" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DENNEVY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6d59c31a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DETTEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2018180c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DEVROUZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="dd2cc4a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DEZIZE LES MARANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a62155d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DICONNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2d6891fe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DIGOIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2c48d1fc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DOMMARTIN LES CUISEAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="60d20e1a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DOMPIERRE LES ORMES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e9bfe9e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DOMPIERRE SOUS SANVIGNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="33697802" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DONZY LE NATIONAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5145e5ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DONZY LE PERTUIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43e9a8e3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DRACY LE FORT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="214ef1ea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DRACY LES COUCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45ec4abb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DRACY ST LOUP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c1e5eda" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">DYO</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="de548a2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ECUELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="48038ace" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ECUISSES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="608dff51" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">EPERTULLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a75505d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">EPERVANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1bef0f08" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">EPINAC</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6bc3e48b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ESSERTENNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="9d198f3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ETANG SUR ARROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1f907e8e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ETRIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4764acd2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FARGES LES CHALON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="228e339c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FARGES LES MACON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="25de587d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FLACE LES MACON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="288389f7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FLACEY EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="53d6cbe8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FLAGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ae51758" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FLEURVILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="165fb09d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FLEURY LA MONTAGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="64441ee4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FLEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="34483e29" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FONTAINES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="72e9108f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FONTENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="233e5739" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FRAGNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="51d07142" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FRANGY EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4bbbce04" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FRETTERANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16d28f74" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FRONTENARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59c81460" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FRONTENAUD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5eb1d8ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">FUISSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e0834c5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GEANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5cc0a9f2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GENELARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6cd57e70" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GENOUILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="346022e2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GERGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="13923e4b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GERMAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6637b7f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GERMOLLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="540eabe7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GERMOLLES SUR GROSNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f37f5ce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GIBLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="22eaaf30" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GIGNY SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5d938a38" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GILLY SUR LOIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1579287" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GIVRY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c54ddc1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GOURDON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7aab86f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GRANDVAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="59328357" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GRANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="34cf281" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GREVILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="30c4f4d8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GRURY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="52a6a9eb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GUERFAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3bddadb1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">GUEUGNON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="56b65e2b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">HAUTEFOND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ee08586" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">HUILLY SUR SEILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="665e5113" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">HURIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3a1ceae6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">IGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4081bfd8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">IGORNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="65a1efe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">IGUERANDE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6a8b8f4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ISSY L EVEQUE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2f069e96" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">JALOGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5b95a1f8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">JAMBLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3cbccfc1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">JONCY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="feba70e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">JOUDES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3824904c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">JOUVENCON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="687d8a5f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">JUGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a079891" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">JUIF</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="78b15cbb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">JULLY LES BUXY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="443f36e4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">L ABERGEMENT DE CUISERY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="122cd5bd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">L ABERGEMENT STE COLOMBE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3d84749d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">L HOPITAL LE MERCIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43040ef8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA BOULAYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f72de27" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CELLE EN MORVAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e56f2fc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE AU MANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e6a85be" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE DE BRAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1372b594" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE DE GUINCHAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4fef1185" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE DU MONT DE FRANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="58675bc2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE NAUDE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="69b94ae5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE PONTANEVAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e4369d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE SOUS BRANCIO</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7bbd7f69" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE SOUS DUN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="55f805f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE SOUS UCHON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e4f8592" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE ST SAUVEUR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ca3b95" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAPELLE THECLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="470db6ae" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHARMEE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="55547df3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CHAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1e190849" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA CLAYETTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d6f000e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA COMELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="26cd778" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA FRETTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37b60886" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA GENETE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="fe9b1fd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA GRANDE VERRIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37a46134" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA GUICHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="8e9b976" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA LOYERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="288ef68c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA MOTTE ST JEAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="41dc7621" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA PETITE VERRIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="70cf924e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA RACINEUSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4b8e78be" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA ROCHE VINEUSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="769928b2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA SALLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="413efaf2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA TAGNIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="dcd4755" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA TRUCHERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="20062487" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA VILLENEUVE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="73482b7d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LA VINEUSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="71f56ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LACROST</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a7339db" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LAIVES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2db666e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LAIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1221c139" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LAIZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66148e7b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LALHEUE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f966198" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19e16afa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LAYS SUR LE DOUBS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1e36505c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE BREUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7fd5d782" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE CREUSOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3037d95f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE FAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="22a004b4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE MIROIR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3794d72e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE PLANOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="cbb2984" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE PULEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="53a29fa3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE ROUSSET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="599eb13a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE TARTRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="418584cd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LE VILLARS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="24d1d056" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LES BIZOTS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ac4d0fc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LES BORDES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f7476bd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LES GAUTHERETS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="771f92d6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LES GUERREAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39e15cb3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LESME</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a8d0974" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LESSARD EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4167dd87" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LESSARD LE NATIONAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a00eb9d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LEYNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="426c958c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LIGNY EN BRIONNAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66ce3c65" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LOCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ddf3f9d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LOISY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5bc994c5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LONGEPIERRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f464097" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LOUHANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4d3a8156" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LOURNAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3c015cb6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LUCENAY L EVEQUE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d6dcf80" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LUGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="34521cd5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LUGNY LES CHAROLLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7ae2fec8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">LUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4cc53b7f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MACON</ville>
                        <zone type="java.lang.Integer">1</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="28c53639" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MAILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b6aed18" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MALAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="78f3d8ec" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MALTAT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5126abfd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MANCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="41e598aa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARCIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4889e2b2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARCILLY LA GUEURCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54823952" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARCILLY LES BUXY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="318161d6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="253e41fe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARIZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a5e9dcc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARLY SOUS ISSY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39c9c99a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARLY SUR ARROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ed2bb19" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARMAGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4cf99f26" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="183f9f45" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARTAILLY LES BRANCION</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="78f17772" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARTIGNY LE COMTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="34d91b66" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MARY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1995e0a5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MASSILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ecf7dc2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MASSY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="28496bc5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MATOUR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6c42672c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MAZILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b83b13a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MELAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e89630" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MELLECEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="73dc2acd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MENETREUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b7e3427" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MERCUREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a922bc8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MERVANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="72786518" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MESSEY SUR GROSNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e35455e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MESVRES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b5d3e3a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MEULIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6a05fdf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MILLY LAMARTINE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="af62cdf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="27fbea18" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONT LES SEURRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="bc5e22a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONT ST VINCENT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6c83396f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTAGNY LES BUXY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b2fde11" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTAGNY PRES LOUHANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="639c3c08" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTAGNY SUR GROSNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2629644f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTBELLET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6778921b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTCEAU LES MINES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1cc05faf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTCEAUX L ETOILE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="19c9e8e8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTCEAUX RAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16d9e492" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTCENIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3b2d38f6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTCHANIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="15f6bcd4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTCONY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="79e70d8f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTCOY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="302b65cf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTHELON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="712911bd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTJAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f4bc955" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTMELARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="88f0bea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTMORT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="67573409" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTPONT EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e196fe0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MONTRET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="27ffe25b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MOREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1065d8e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MORLET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e81a430" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MORNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="614252c0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MOROGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4946ed22" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MOUTHIER EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4f7a78c3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">MUSSY SOUS DUN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="718e72f8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">NANTON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f1e3206" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">NAVILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="57664849" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">NEUVY GRANDCHAMP</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c13dd72" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">NOCHIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c2fa701" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ORMES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c7d7259" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">OSLON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6fde3fab" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">OUDRY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="68262ced" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">OUROUX SOUS LE BOIS STE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="224fb106" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">OUROUX SUR SAONE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1def1283" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">OYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3aa865cf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">OZENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5b4171f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">OZOLLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7259f725" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PALINGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7070d8c9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PALLEAU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a8adcb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PARAY LE MONIAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4229eac3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PARIS L HOPITAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4df3ca24" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PASSY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="405c2977" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PERONNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62a664a3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PERRECY LES FORGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a193bee" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PERREUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ead93a4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PERRIGNY SUR LOIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45b82cc0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PIERRE DE BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e821502" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PIERRECLOS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4e31565d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PLOTTES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="91d1bc6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">POISSON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="560a68d6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PONTANEVAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4568e5bb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PONTOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="69c27b96" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">POUILLOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5f3feb18" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">POURLANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5d63a582" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PRESSY SOUS DONDIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="390729b4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PRETY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="54305ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PRISSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="732961e6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PRIZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="21da7e1b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">PRUZILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="f8d2ffa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">RANCY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e48ce0f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">RATENELLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5dd07b8e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">RATTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="225fd7c0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">RECLESNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="424d8fe1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">REMIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="72211ec8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">RIGNY SUR ARROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c6c1701" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ROMANECHE THORINS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3c5a720e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ROMENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="55f61416" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ROSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="ea0dc71" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ROUSSILLON EN MORVAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62e88637" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ROYER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="fc3b79c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">RULLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a4b6ad9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6d540b48" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAILLENARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="28b0dc0b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="733e6b0b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAISY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e5da49" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SALORNAY SUR GUYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c5df228" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAMPIGNY LES MARANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1bc54f78" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SANCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="36e45d86" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SANTILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ab82491" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SANVIGNES LES MINES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7f68d1e9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SARRY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3aad5958" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SASSANGY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ac4be80" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SASSENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3ab6ebd9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAULES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f3611ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAUNIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="76c2539f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAVIANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="500028a2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAVIGNY EN REVERMONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3a6bccb6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAVIGNY SUR GROSNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7b4cdeb0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SAVIGNY SUR SEILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="73b0340d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SEMUR EN BRIONNAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="35297cd1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SENNECE LES MACON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="36c1989b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SENNECEY LE GRAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="600a0432" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SENOZAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31999fe0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SENS SUR SEILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5ccf4490" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SERCY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b9e798a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SERLEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="313d6965" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SERMESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="36d27f24" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SERRIERES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3599309a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SERRIGNY EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c45e9f3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SEVREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="72027fd8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SIGY LE CHATEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2177862" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SIMANDRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="52e06b00" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SIMARD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="b90f782" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SIVIGNON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5a697dbc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SOLOGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="43bdf003" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SOLUTRE POUILLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6ad877b3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SOMMANT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="299abf92" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SORNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e971f94" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST AGNAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="39a6645" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST ALBAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="db03ddc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST AMBREUIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2dad3d89" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST AMOUR BELLEVUE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="48a304cc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST ANDRE EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="46901255" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST ANDRE LE DESERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ca3aea4" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST AUBIN EN CHAROLLAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e1e9fac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST AUBIN SUR LOIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4c84f510" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST BERAIN SOUS SANVIGNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2cf514af" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST BERAIN SUR DHEUNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="e210438" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST BOIL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="199bffc7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST BONNET DE CRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="50b56ef3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST BONNET DE JOUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37873cea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST BONNET DE VIEILLE VIG</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="fb04321" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST BONNET EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d073392" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST CHRISTOPHE EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="63caf65e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST CHRISTOPHE EN BRIONNAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="21f4c881" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST CLEMENT SUR GUYE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4d979e91" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST CYR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1d2b6963" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST DENIS DE VAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d13f18b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST DESERT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1856e362" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST DIDIER EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="706a4369" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST DIDIER EN BRIONNAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="506fdc27" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST DIDIER SUR ARROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5fdeadb2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST EDMOND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="145db24a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST EMILAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="136422b8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST ETIENNE EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="132367fa" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST EUGENE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="797f57e6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST EUSEBE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1763fb5b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST FIRMIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="250b1f5c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST FORGEOT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7d37e403" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GENGOUX DE SCISSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="605ac12e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GENGOUX LE NATIONAL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6640e46d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GERMAIN DES RIVES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2e54e48d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GERMAIN DU BOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4768fcbe" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GERMAIN DU PLAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3da94292" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GERMAIN EN BRIONNAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="33519ede" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GERMAIN LES BUXY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="33951b24" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GERVAIS EN VALLIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="228f2f1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GERVAIS SUR COUCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4e65ad52" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST GILLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="75560ab3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST HURUGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="63d8a9f3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST IGNY DE ROCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="257dc3bb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST JEAN DE TREZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="63bd3d37" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST JEAN DE VAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1cfe1909" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST JEAN LE PRICHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e1dacbd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST JULIEN DE CIVRY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5e37e4c5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST JULIEN DE JONZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="278c71d6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST JULIEN SUR DHEUNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7585ace2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LAURENT D ANDENAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1b1965b5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LAURENT EN BRIONNAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="20645bf9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LEGER DU BOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1cd2490c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LEGER LES PARAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="31b9c19c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LEGER SOUS BEUVRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a560245" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LEGER SOUS LA BUSSIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4af0d85" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LEGER SUR DHEUNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a0992a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LOUP DE LA SALLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2fa794b8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LOUP DE VARENNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2314d479" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST LOUP GEANGES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2c8965ed" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARCEL</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7082c172" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARCELIN DE CRAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="186a5d13" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARD DE VAUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6f0496ea" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN BELLE ROCHE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16501597" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN D AUXY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="63b977f2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN DE COMMUNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2571e404" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN DE LIXY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5830d5d0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN DE SALENCEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e2577eb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN DU LAC</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5de41dcb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN DU MONT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b602a95" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN DU TARTRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="368bb272" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="d707658" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN EN GATINOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5269924c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN LA PATROUILLE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1103e5d9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MARTIN SOUS MONTAIGU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="16e71249" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MAURICE DE SATONNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c61825e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MAURICE DES CHAMPS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45b5f7e0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MAURICE EN RIVIERE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2da4b6e1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MAURICE LES CHATEAUNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="18e28530" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MAURICE LES COUCHES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f961f13" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST MICAUD</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="18d23902" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST NIZIER SUR ARROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="119cbf09" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST PANTALEON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="49c1f0e7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST PIERRE DE VARENNES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5baef385" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST PIERRE LE VIEUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3af5cfc9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST POINT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="601cb35c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST PRIVE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7c438e4f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST PRIX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="37342445" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST RACHO</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="40394a53" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST REMY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="713eb015" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST ROMAIN DES ILES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4a9a6cc8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST ROMAIN SOUS GOURDON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="605be4bb" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST ROMAIN SOUS VERSIGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3105e269" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST SERNIN DU BOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="795374a3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST SERNIN DU PLAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="560eb78f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST SYMPHORIEN D ANCELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6035396c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST SYMPHORIEN DE MARMAGN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="464d12cc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST SYMPHORIEN DES BOIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e0d3322" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST USUGE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="249835a0" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST VALLERIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4e8ae25" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST VALLIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="480101a7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST VERAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3a139fdf" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST VINCENT BRAGNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5e650742" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST VINCENT DES PRES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3abfae78" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST VINCENT EN BRESSE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7e576669" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST YAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1c04b84c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">ST YTHAIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="79df93f2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">STE CECILE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="456a3360" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">STE CROIX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3f53073a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">STE FOY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="63ff9150" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">STE HELENE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1f9d4e7a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">STE RADEGONDE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="108b3bcd" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SUIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="25031837" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">SULLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6e2ad5dc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TAIZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3e3e9705" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TAIZE COMMUNAUTE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7f2ce92f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TANCON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5d814de3" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TAVERNAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5420a20a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TERRANS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2a6e69ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">THIL SUR ARROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="36dbb0f7" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">THUREY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="113f4444" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TINTRY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="509ad534" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TORCY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="65237243" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TORPES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a22c094" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TOULON SUR ARROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7f917330" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TOURNUS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="262195be" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TOUTENANT</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="66ee0080" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TRAMAYES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1363084b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TRAMBLY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4ab57dde" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TRIVY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="515aa023" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">TRONCHY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="14c7838f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">UCHIZY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="368e2bf1" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">UCHON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2fe6f732" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">UXEAU</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="646f0c2f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VAREILLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3689152c" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VARENNE L ARCONCE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="61cd17ac" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VARENNE ST GERMAIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5fcd4f5d" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VARENNE SUR LE DOUBS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="201593ce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VARENNES LE GRAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="689ac9d6" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VARENNES LES MACON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a393641" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VARENNES SOUS DUN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="3218eaa5" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VARENNES ST SAUVEUR</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1d51055" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VAUBAN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4b233d63" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VAUDEBARRIER</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7693551e" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VAUX EN PRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="42b96163" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VENDENESSE LES CHAROLLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="18a8ccce" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VENDENESSE SUR ARROUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="721df507" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VERDUN SUR LE DOUBS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="cc1d919" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VERGISSON</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="a93feda" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VERISSEY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="7a409fa2" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VERIZET</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="28b08362" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VERJUX</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5c81abcc" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VEROSVRES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45360d86" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VERS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5fb1fbe9" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VERSAUGUES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1e11af14" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VERZE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1afd5978" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VIGNY LES PARAY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="6efce31f" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VILLEGAUDIN</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1ca34126" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VILLENEUVE EN MONTAGNE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="220a347a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VINCELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="4bfb470b" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VINDECY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5df54a25" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VINZELLES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="12d6f354" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="5e011975" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VIREY LE GRAND</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="1a2e808a" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VIRY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="62f8f173" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VITRY EN CHAROLLAIS</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="45b3e7c8" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VITRY LES CLUNY</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="26361f38" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VITRY SUR LOIRE</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                    <ObjectLocalite hashcode="2b3ba921" type="fr.truckinfo.etreck.core.expedition.JPanelExpedition$LocaliteTest">
                        <codePostal type="java.lang.String">71</codePostal>
                        <ville type="java.lang.String">VOLESVRES</ville>
                        <zone type="java.lang.Integer">2</zone>
                    </ObjectLocalite>
                </Object>
            </Response>
            <Exception/>
        </ServiceResponse>'; 

        $xmlObject = new SimpleXMLElement($xml);

        foreach ($xmlObject->Response->Object->ObjectLocalite as $localiteData) {
            $localite = new Localite();
            $localite->setCodePostal((string)$localiteData->codePostal);
            $localite->setVille((string)$localiteData->ville);
            $localite->setZone((int)$localiteData->zone);

            $manager->persist($localite);
        }

        $manager->flush();
    }
}
