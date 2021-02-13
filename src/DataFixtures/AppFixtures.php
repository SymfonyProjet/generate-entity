<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $animal1 = new Animal();
        $animal1->setNom('Lion')
                ->setDescription('Je suis le roi de la savane')
                ->setImage('lion.jpg')
                ->setPoids(195)
                ->setCarnivore(true)
                ->setHabitat("Afrique")
        ;
        $manager->persist($animal1);

        $animal2 = new Animal();
        $animal2->setNom('Crocodile')
                ->setDescription("J'ai une mâchoire surpuissante !")
                ->setImage('crocodile.jpg')
                ->setPoids(750)
                ->setCarnivore(true)
                ->setHabitat("Afrique")
        ;
        $manager->persist($animal2);

        $animal3 = new Animal();
        $animal3->setNom('Ours')
                ->setDescription("J'aime bien manger du miel")
                ->setImage('ours.jpg')
                ->setPoids(600)
                ->setCarnivore(false)
                ->setHabitat("Amérique du nord")
        ;
        $manager->persist($animal3);

        $animal4 = new Animal();
        $animal4->setNom('Tigre')
                ->setDescription("Je suis un gros chat")
                ->setImage('tigre.jpg')
                ->setPoids(310)
                ->setCarnivore(true)
                ->setHabitat("Asie")
        ;
        $manager->persist($animal4);

        $animal5 = new Animal();
        $animal5->setNom('Requin blanc')
                ->setDescription("Les dents de la mer, c'est moi !")
                ->setImage('requin.jpg')
                ->setPoids(1100)
                ->setCarnivore(true)
                ->setHabitat("Toutes les mers tempérées du globe")
        ;
        $manager->persist($animal5);

        $manager->flush();
    }
}
