<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet Web 2</title>
    <link rel="stylesheet" href="https://use.typekit.net/lpp7zdj.css">
    <link rel="stylesheet" href="css/warning.css">
</head>

<body>

    <main>

        <div class="container">

            <h1>Important à savoir : <br> Projet scolaire réalisé en équipe</h1>

            <p>
                Je tiens à préciser que ce projet a été réalisé dans le cadre d'une évaluation scolaire d'équipe et que
                j'ai été principalement responsable de la partie <span>backend</span> du projet.
            </p>

            <p>
                Bien que ce projet puisse encore bénéficier de plusieurs améliorations, nous sommes fiers d'avoir déjà
                réalisé davantage que ce qui était prévu dans le devis initial, malgré un temps limité.
            </p>

            <div class="team">
                <p>MEMBRES DE L'ÉQUIPE :</p>
                <ul>
                    <li>Jacqueline Lebel, <span>frontend</span></li>
                    <li>Pier-Alexandre Auger-Matteau, <span>fullstack</span></li>
                    <li>Patricia Massie, <span>backend</span></li>
                </ul>
            </div>

            <p>
                <small>
                    Si vous êtes arrivé jusqu'ici, il est possible que vous ayez téléchargé le projet afin de le
                    consulter dans votre navigateur. J'ai donc décidé de supprimer le contenu de la page d'accueil afin
                    d'afficher cette note, vous informant de ma participation sur ce projet. Cependant, je tiens à
                    préciser que les autres pages restent accessibles via l'url.
                </small>
            </p>

            <p>
                Pour consulter le panneau d'administration, cliquez
                <a href="{{ route('admin-dashboard') }}">ici</a>.
                <small>
                    <br>
                    Email : admin@mirror-world.com
                    <br>
                    Password : projetweb2admin
                    <br>
                    N'oubliez pas de consulter le
                    <a href="https://github.com/patricia-m/scolaire-projet-web-2#readme" target="blank">README</a>
                    du repo pour les instructions d'installation.
                </small>
            </p>

            </p>


        </div>
    </main>
</body>

</html>
