<?php 

require_once '../vendor/autoload.php';

// SELECT * FROM article

$profil = [
    "firstName" => "David",
    "lastName" => "Robert",
    "job" => "Web dev",
    "languages" => ["JS", "PHP", "TS"],
    "avatar" => "https://f.hellowork.com/obs-static-images/seo/ObsJob/developpeur-web.jpg",
    "looksForJob" => false
]; 


// La classe FilesystemLoader permet d'indiquer le chemin du dossier des views
$loader = new \Twig\Loader\FilesystemLoader('../view');
// On utilise une instance de la classe Twig Environnement pour appeler les fichiers view
$twig = new \Twig\Environment($loader);

// On appelle avec render le fichier de view profil.html.twig, en lui envoyant la variable $profil
echo $twig->render('profil.html.twig', ['profil' => $profil]);

// require_once('../view/profil.view.php'); Remplacer twig->render
?>


