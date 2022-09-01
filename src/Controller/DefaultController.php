<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use App\Repository\SousCategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DefaultController extends AbstractController
{

    /**
     * @Route("/", name="accueil", methods={"GET"})
     */
    public function index(CategorieRepository $categorieRepository,
                         SousCategorieRepository $sousCategorieRepository): Response
    {
        return $this->render('index.html.twig', [
            'categories' => $categorieRepository->findAll(),
            'souscategories' => $sousCategorieRepository->findAll(),
        ]);
    }

    /**
     * @Route("/admin", name="index", methods={"GET"})
     */
    public function accueil(CategorieRepository $categorieRepository,
                         SousCategorieRepository $sousCategorieRepository): Response
    {
        return $this->render('accueil.html.twig', [
            'categories' => $categorieRepository->findAll(),
            'souscategories' => $sousCategorieRepository->findAll(),
        ]);
    }

}
