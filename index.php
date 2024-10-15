<?php

session_start(); // Démarrer la session

require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/library/Router.php';

// // Vérifiez si l'utilisateur est connecté
// if (!isset($_SESSION['user_id']) && $_SERVER['REQUEST_URI'] !== '/fs/login' && $_SERVER['REQUEST_URI'] !== '/fs/register') {
//     // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
//     redirect('login');
// }

// Instancier le routeur
$router = new Route();

// Obtenir l'URL de la requête
$uri = $_SERVER['REQUEST_URI'];
// Route la requête
$router->route($uri);