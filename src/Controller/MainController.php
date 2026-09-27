<?php

namespace App\Controller; // package in java

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    // // GetMapping("/")
    // #[Route('/')]
    // public function homePage(): Response
    // {
    //     // ResponseEntity
    //     return new Response('<strong>Hi</strong>:, Welcome to Starshop');
    // }

    // @GetMapping("/")
    #[Route('/')]
    public function homePage(): Response
    {
        $myShip = [
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];

        //follow the file path and name like 
        //className/methodName.html.twig in templates folder
        //ex
        //main->MainController
        //homePage->methodName.html.twig

        $starshipCount=457;
        return $this->render('main/homepage.html.twig',[
            'numberOfStarshipCount'=>$starshipCount,
            'myShip'=>$myShip
        ]);
    }
}
// Same Java Code
/*@GetMapping("/")
public ResponseEntity<String> homePage() {
    return ResponseEntity.ok("<strong>Hi</strong>");
}*/
