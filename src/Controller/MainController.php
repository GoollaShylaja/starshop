<?php

// package in java

namespace App\Controller;

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

    // GetMapping("/")
    #[Route('/')]
    public function homePage(): Response
    {
        //follow the file paht and name like 
        //className/methodName.html.twig
        //ex
        //main->MainController
        //homePage->methodName.html.twig

        $myShip = [
            'name' => 'USS LeafyCruiser (NCC-0001)',
            'class' => 'Garden',
            'captain' => 'Jean-Luc Pickles',
            'status' => 'under construction',
        ];

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
