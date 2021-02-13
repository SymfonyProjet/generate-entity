<?php

namespace App\Controller;

// use App\Entity\Animal;
use App\Repository\AnimalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * Affiche la liste des animaux
     * 
     * Option 1 : avec la fonction getDoctrine()
     * Option 2 : en injection de dépendance
     * 
     * @Route("/", name="home")
     */
    public function index(AnimalRepository $repository): Response
    {
        // $repository = $this->getDoctrine()->getRepository(Animal::class);
        $animaux = $repository->findAll();

        return $this->render('home/index.html.twig', [
            'animaux' => $animaux
        ]);
    }

    /**
     * Permet d'afficher un animal via son id
     * 
     * @Route("/animal/{id}", name="show_animal")
     *
     * @return Response
     */
    public function show(AnimalRepository $repository, $id): Response
    {
        $animal = $repository->find($id);

        return $this->render('animal/animal.html.twig', [
            "animal" => $animal
        ]);
    }
}
