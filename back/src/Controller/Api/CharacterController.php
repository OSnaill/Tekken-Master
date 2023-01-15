<?php

namespace App\Controller\Api;

use App\Repository\CharacterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CharacterController extends AbstractController
{
    #[Route('/api/characters', name: 'app_api_character')]
    public function showAll(CharacterRepository $characterRepository): JsonResponse
    {

        $characterList = $characterRepository->findAll();

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/CharacterController.php',
        ]);
    }
}
