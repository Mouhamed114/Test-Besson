<?php

namespace App\Controller;

use App\Dto\CalculMontantDto;
use App\Service\CalculMontantService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    


    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/calculMontant', name: 'app_calculMontant', methods: ['POST'])]
    public function calculMontantTransport(Request $request, CalculMontantService $calculMontantService)
    {
        //recupération des données du formulaire en POST
        $content = json_decode($request->getContent(), true);
        
        $input = new CalculMontantDto();// $input = instance de l'objet CalculMontantDto
        $input->destinataire = $content['destinataire'];
        $input->expediteur = $content['expediteur'];
        $input->nombreColis = $content['nombreColis'];
        $input->poids = $content['poids'];
        $input->quiPaye = $content['quiPaye'];

        //Appeler le service pour calculer le montant
        $montantTransport = $calculMontantService->calculMontantTransport($input);

        //Retourner une response en Json
        return new JsonResponse(['montant_transport' => $montantTransport]);
    }
}
