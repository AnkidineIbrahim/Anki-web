<?php

define('BASE_URL', 'http://localhost/anki-web/');

// Fonction pour rediriger vers une autre page
// function redirect($path) {
//     if (!isset($_SESSION['user_id'])) {
//         // Optionnel : Gérer la logique si l'utilisateur n'est pas connecté
//     }
//     header("Location: " . BASE_URL . $path);
//     exit();
// }

// Fonction pour rediriger vers une autre page
function redirect($url) {
    header('Location: ' . BASE_URL . $url);
}