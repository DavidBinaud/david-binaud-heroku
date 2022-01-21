<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Project;

class ProjetFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $projet = new Project();
        $projet->setName("Deepsoul")
            ->setDate(\DateTime::createFromFormat("d/m/Y", "17/01/2022"))
            ->setAbstract("Jeu vidéo 2D réalisé en 30h lors de la Code Game Jam 2022 avec le moteur Unity sous le thème \"merveilles des profondeurs\"")
            ->setPicUrl("assets/img/projet/Deepsoul.jpg")
            ->setPrize(3)
            ->setSkills("Unity / C#")
            ->setLinks(["Unity" => "https://unity.com/fr"])
            ->setBgPosition("top")
            ->setCanBeSeen(true)
            ->setDescription("<p>C'est un jeu 2D réalisé Lors de la Code Game Jam 2022 qui est une compétition de programmation de jeu en 30h par groupe. Nous étions cinq personnes sur ce projet. Le thème de cette année était \"Merveilles des profondeurs\"<br><br></p>
                        <p>Nous avons utilisé Unity pour réaliser ce jeu. Nous avions déjà des connaissances préalables sur cet outil et sur du C#.<br></p>
                        <p>Nous avons obtenu la troisième place avec notre projet.</p>")
            ->addTag($this->getReference(TagFixtures::TAG_REF . "GAMES"));
        $manager->persist($projet);

        $projet = new Project();
        $projet->setName("MASK ON!")
            ->setDate(\DateTime::createFromFormat("d/m/Y", "21/07/2020"))
            ->setAbstract("Jeu vidéo 2D réalisé en 24h lors d'une Jam avec le moteur Unity sous le thème \"À usage unique\"")
            ->setPicUrl("assets/img/projet/mask-on.jpg")
            ->setPrize(0)
            ->setSkills("Unity / C#")
            ->setLinks(["Unity" => "https://unity.com/fr"])
            ->setBgPosition("bottom")
            ->setCanBeSeen(true)
            ->setDescription("<p>C'est un jeu 2D réalisé lors d'une Jam entre amis en Juillet 2020 en 24 heures. Chaque projet est individuel. Le thème&nbsp; était \"À usage unique\".<br><br></p>
                        <p>J'ai choisi d'utiliser Unity pour ce projet car j'ai déjà pu expérimenter avec cet outil lors de Jams précédentes. Ce projet m'a permis de réfléchir à l'idée, la conceptualiser et la produire tout seul.<br></p>
                        <p>Le jeu réalisé consiste à appliquer des masques aux personnages qui apparaissent et se dirigent vers des magasins, chaque personne qui entre dans un magasin sans masque fait perdre une vie dans la limite de trois erreurs possibles.</p>")
            ->addTag($this->getReference(TagFixtures::TAG_REF . "GAMES"));
        $manager->persist($projet);

        $projet = new Project();
        $projet->setName("Charlie's Sanity")
            ->setDate(\DateTime::createFromFormat("d/m/Y", "22/01/2020"))
            ->setAbstract("Jeu vidéo 3D réalisé en 30h lors de la Code Game Jam 2020 avec le moteur Unity sous le thème \"cute & creepy\"")
            ->setPicUrl("assets/img/projet/CharliesSanity.jpg")
            ->setPrize(2)
            ->setSkills("Unity / C#   - Méthodes Agiles")
            ->setLinks(["Unity" => "https://unity.com/fr"])
            ->setBgPosition("")
            ->setCanBeSeen(true)
            ->setDescription("<p class=\"text-justify\">C'est un jeu 3D réalisé Lors de la Code Game Jam 2020 qui est une compétition de programmation de jeu en 30h par groupe. Nous étions six personnes sur ce projet. Le thème de cette année était \"Cute &amp; Creepy\"<br></p>
                        <p class=\"text-justify\">Nous avons utilisé Unity pour réaliser ce jeu. Avec des connaissances de la participation à l'édition précédente que ce soit dans l'utilisation de Unity ou de la programmation en C#. Une organisation type agiles mise en place nous
                            a permis de nous concentrer sur des taches précises et d'importance supérieure, cette agilité a amélioré notre efficacité et productivité pour cette édition.<br></p><button class=\"btn btn-primary\" data-aos=\"fade-down\" data-aos-once=\"true\"
                            data-toggle=\"modal\" data-target=\"#modal1\" type=\"button\">Regarder la vidéo de présentation</button>")
            ->setModalRaw("<div class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" id=\"modal1\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Présentation</h4><button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button></div>
            <div class=\"modal-body\">
                <p>Avec&nbsp;<a href=\"https://www.torisu.fr\" target=\"_blank\">Tristan Tribes</a>&nbsp;et moi-même<br></p>
                <div id=\"map_container\" style=\"position: relative;padding-bottom: 56.25%;\">
                    <div id=\"map\" style=\"position: absolute;width: 100%;height: 100%;\"><iframe allowfullscreen=\"\" frameborder=\"0\" src=\"https://www.youtube.com/embed/Mfzk2WOFhf4\" style=\"width: 100%;height: 100%;\"></iframe></div>
                </div>
            </div>
            <div class=\"modal-footer\"><button class=\"btn btn-primary\" type=\"button\" data-dismiss=\"modal\">Fermer</button></div>
        </div>
    </div>
</div>")
            ->addTag($this->getReference(TagFixtures::TAG_REF . "GAMES"));
        $manager->persist($projet);

        $projet = new Project();
        $projet->setName("Charlie's Sanity")
            ->setDate(\DateTime::createFromFormat("d/m/Y", "03/01/2020"))
            ->setAbstract("Projet tutoré: Outil de Visualisation de l'Intelligence Collective")
            ->setPicUrl("assets/img/projet/VIZUIC.jpg")
            ->setPrize(0)
            ->setSkills("HTML / CSS / PHP / SQL / JAVASCRIPT / D3.js ")
            ->setLinks(["Github" => "https://github.com/DavidBinaud/VIZUIC"])
            ->setBgPosition("center")
            ->setCanBeSeen(false)
            ->setDescription("<p>Dans le cadre d'un projet tutoré en groupe de quatre, nous avons réalisé un outil destiné à nos tuteurs. Le but de cet outil était de fournir un moyen de&nbsp; représentation de l'intelligence collective mesurée.</p>
                        <p>Pour cela, nous avons mis en place un système de récupération de données via un formulaire adaptatif. Les données sont traitées en fonction de différentes variables choisies par l'utilisateur.</p>
                        <p>Chaque réponse au formulaire disposera d'une représentation graphique avec la possibilité d'ajouter ou retirer des composantes de ces graphiques. Il y a aussi la possibilité de superposer plusieurs graphiques afin de mieux pouvoir
                            les comparer.</p>
                        <p>On peut ainsi télécharger ces graphiques pour les ajouter dans des travaux de recherche.</p>")
            ->addTag($this->getReference(TagFixtures::TAG_REF . "WEB"));
        $manager->persist($projet);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TagFixtures::class
        ];
    }
}
