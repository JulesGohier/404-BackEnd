<?php

namespace App\DataFixtures;

use App\Entity\Action;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $actions = [
            // 1. Protection de l'environnement marin
            [
                'nom' => 'Réduire les déchets plastiques',
                'categorie' => 'Protection_de_l\'environnement_marin',
                'organe' => 'Poumons',
                'environnement' => 'Diminution de la pollution plastique dans l\'océan',
                'texte_effet_env' => 'Réduit la pollution plastique, préservant les écosystèmes marins.',
                'texte_effet_sante' => 'Amélioration des poumons, réduction du risque de maladies respiratoires.',
            ],
            [
                'nom' => 'Lutter contre la pêche illégale',
                'categorie' => 'Protection_de_l\'environnement_marin',
                'organe' => 'Cœur',
                'environnement' => 'Préservation des espèces marines et des écosystèmes',
                'texte_effet_env' => 'Protège les écosystèmes marins fragiles.',
                'texte_effet_sante' => 'Amélioration de la circulation sanguine.',
            ],
            [
                'nom' => 'Interdire les rejets industriels toxiques',
                'categorie' => 'Protection_de_l\'environnement_marin',
                'organe' => 'Foie',
                'environnement' => 'Réduction de la pollution chimique dans l\'océan',
                'texte_effet_env' => 'Protège les écosystèmes des toxines industrielles.',
                'texte_effet_sante' => 'Protection du foie contre les toxines.',
            ],
            [
                'nom' => 'Réduire les émissions de CO2',
                'categorie' => 'Protection_de_l\'environnement_marin',
                'organe' => 'Poumons',
                'environnement' => 'Diminution de l\'acidification des océans',
                'texte_effet_env' => 'Contribue à un environnement marin moins acide.',
                'texte_effet_sante' => 'Amélioration de la respiration et réduction du stress oxydatif.',
            ],
            [
                'nom' => 'Installer des systèmes de filtration des eaux usées',
                'categorie' => 'Protection_de_l\'environnement_marin',
                'organe' => 'Foie',
                'environnement' => 'Filtrage des eaux polluées avant leur déversement',
                'texte_effet_env' => 'Améliore la qualité de l\'eau dans les océans.',
                'texte_effet_sante' => 'Protection du foie et des reins contre les polluants.',
            ],
            // 2. Restauration de la biodiversité marine
            [
                'nom' => 'Planter des récifs coralliens',
                'categorie' => 'Restauration_de_la_biodiversite_marine',
                'organe' => 'Cerveau',
                'environnement' => 'Amélioration de la biodiversité marine',
                'texte_effet_env' => 'Fournit des habitats pour de nombreuses espèces marines.',
                'texte_effet_sante' => 'Amélioration des fonctions cognitives grâce à un environnement plus serein.',
            ],
            [
                'nom' => 'Créer des réserves marines protégées',
                'categorie' => 'Restauration_de_la_biodiversite_marine',
                'organe' => 'Système immunitaire',
                'environnement' => 'Sauvegarde des habitats marins naturels',
                'texte_effet_env' => 'Protège les zones sensibles des océans.',
                'texte_effet_sante' => 'Stimulation du système immunitaire et réduction du stress.',
            ],
            [
                'nom' => 'Réintroduire des espèces marines menacées',
                'categorie' => 'Restauration_de_la_biodiversite_marine',
                'organe' => 'Cœur',
                'environnement' => 'Restauration de l\'équilibre écologique sous-marin',
                'texte_effet_env' => 'Rééquilibre les écosystèmes marins.',
                'texte_effet_sante' => 'Meilleure oxygénation du sang.',
            ],
            [
                'nom' => 'Réduire l\'exploitation des ressources marines',
                'categorie' => 'Restauration_de_la_biodiversite_marine',
                'organe' => 'Cœur',
                'environnement' => 'Préservation de la faune et de la flore marines',
                'texte_effet_env' => 'Diminue la pression sur les ressources naturelles.',
                'texte_effet_sante' => 'Prévention des maladies cardiaques.',
            ],
            [
                'nom' => 'Promouvoir la pêche durable',
                'categorie' => 'Restauration_de_la_biodiversite_marine',
                'organe' => 'Cerveau',
                'environnement' => 'Maintien des stocks de poissons et équilibre écologique',
                'texte_effet_env' => 'Favorise un écosystème équilibré.',
                'texte_effet_sante' => 'Amélioration de la santé mentale et bien-être général.',
            ],
            // 3. Sensibilisation et éducation
            [
                'nom' => 'Organiser des campagnes de sensibilisation à la pollution',
                'categorie' => 'Sensibilisation_et_education',
                'organe' => 'Cerveau',
                'environnement' => 'Sensibilisation à l\'importance de la protection des océans',
                'texte_effet_env' => 'Mobilise les populations pour la conservation des océans.',
                'texte_effet_sante' => 'Réduction du stress et amélioration du bien-être mental.',
            ],
            [
                'nom' => 'Promouvoir les énergies renouvelables',
                'categorie' => 'Sensibilisation_et_education',
                'organe' => 'Poumons',
                'environnement' => 'Réduction de la dépendance aux énergies fossiles',
                'texte_effet_env' => 'Moins de polluants dans l\'environnement marin.',
                'texte_effet_sante' => 'Amélioration de la respiration et réduction des toxines.',
            ],
            [
                'nom' => 'Créer des programmes éducatifs pour les jeunes',
                'categorie' => 'Sensibilisation_et_education',
                'organe' => 'Cerveau',
                'environnement' => 'Formation des jeunes sur la conservation marine',
                'texte_effet_env' => 'Encourage une nouvelle génération de protecteurs de l\'environnement.',
                'texte_effet_sante' => 'Meilleure santé mentale et développement cognitif.',
            ],
            [
                'nom' => 'Organiser des événements de nettoyage des plages',
                'categorie' => 'Sensibilisation_et_education',
                'organe' => 'Système immunitaire',
                'environnement' => 'Élimination des déchets dans les zones marines',
                'texte_effet_env' => 'Améliore la qualité de l\'environnement côtier.',
                'texte_effet_sante' => 'Stimulation du système immunitaire grâce à l\'activité physique.',
            ],
            [
                'nom' => 'Lancer des applications de suivi de la qualité de l\'eau',
                'categorie' => 'Sensibilisation_et_education',
                'organe' => 'Foie',
                'environnement' => 'Collecte de données sur la santé de l\'océan',
                'texte_effet_env' => 'Aide à surveiller les niveaux de pollution.',
                'texte_effet_sante' => 'Prévention des maladies liées à la contamination de l\'eau.',
            ],
        ];

        foreach ($actions as $data) {
            $action = new Action();
            $action->setNom($data['nom']);
            $action->setCategorie($data['categorie']);
            $action->setOrgane($data['organe']);
            $action->setEnvironnement($data['environnement']);
            $action->setTexteEffetEnv($data['texte_effet_env']);
            $action->setTexteEffetSante($data['texte_effet_sante']);
            $manager->persist($action);
        }

        $manager->flush();
    }
}
