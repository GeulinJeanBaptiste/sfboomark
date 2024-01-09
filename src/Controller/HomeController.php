<?php

namespace App\Controller;

use App\Repository\LiensRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(LiensRepository $liensRepository): Response
    {
        $liens = $liensRepository->findBy([], ['id' => 'DESC']);
        return $this->render('home/index.html.twig', [
            'liens' => $liens,
        ]);
    }
}
