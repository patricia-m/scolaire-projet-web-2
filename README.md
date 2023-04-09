# scolaire-projet-web-2

## Installation :

Pour installer le projet, veuillez suivre ces instructions :

1. Installer les dépendances du projet à l'aide de la ligne de commande : `composer install`
2. Créer le fichier `.env` à la racine du projet et inscrire les informations relatives à la bdd.
3. Créer et remplir la bdd à l'aide de la ligne de commande suivante : `php artisan migrate:fresh --seed`
4. Démarrer le projet et consulter la page d'accueil `php artisan serve`

## Description du projet :

Le projet Web 2 était la dernière étape de ma formation en conception et programmation de sites Web. Cette évaluation scolaire a été effectuée en équipe et j'ai principalement travaillé sur la partie backend du projet. Le but était de créer un site web pour un festival imaginaire selon un devis bien précis. Ce dernier demandait d'inclure des fonctionnalités telles qu'un panneau d'administration ou encore la gestion des réservations selon les dates (avec l'impossibilité d'annuler une réservation une fois le festival commencé).  

En tant qu'équipe, nous avons décidé d'aller au-delà du devis initial en incluant des fonctionnalités supplémentaires. Par exemple, nous avons intégré un système de paiement via PayPal et avons modifié la page des forfaits une fois le festival terminé, afin de continuer à afficher le contenu tout en empêchant les utilisateurs d'ajouter un forfait au panier. Nous avons également développé des middleware personnalisés pour gérer différents cas de redirection en fonction de l'état de l'utilisateur (connecté ou non) et de son type (administrateur ou public).

Bien que ce projet puisse encore bénéficier de plusieurs améliorations, nous sommes fiers d'avoir déjà réalisé davantage que ce qui était prévu dans le devis initial, malgré un temps limité.
