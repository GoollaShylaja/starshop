<?php

// package in java

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController
{
    // GetMapping("/")
    #[Route('/')]
    public function homePage(): Response
    {
        // ResponseEntity
        return new Response('<strong>Hi</strong>:, Welcome to Starshop');
    }
}
// Same Java Code
/*@GetMapping("/")
public ResponseEntity<String> homePage() {
    return ResponseEntity.ok("<strong>Hi</strong>");
}*/
