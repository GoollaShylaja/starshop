<?php

namespace App\Controller;

use starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;


class StarshipApiController extends AbstractController
{

    #[Route('/api/starships')] // @GetMapping("/api/starships")
    public function getCollection(LoggerInterface $logger): Response
    {

        //dd($logger); //stands for "dump and die"
        $logger->info("log starship data");
        $starships =
        [
            new starship(1, 'USS LeafyCruiser (NCC-0001)','Garden','Jean-Luc Pickles','taken over by Q'),
            new starship(2, 'USS Espresso (NCC-1234-C)','Latte','James T. Quick!','repaired'),
            new starship(3, 'USS Wanderlust (NCC-2024-W)','Delta Tourist','Kathryn Journeyway','under construction')
        ];
        //return $this->json($starships) -> return array of three empty objects because internally, $this->json() uses the PHP json_encode() function 
        //and that function can't handle private properties 
        //solution: we need to install the Symfony Serializer
        return $this->json($starships); 
    }

}
?>