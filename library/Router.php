<?php
// Inclure manuellement les contrôleurs nécessaires
require_once __DIR__ . '/../controllers/DashboardController.php';
require_once __DIR__ . '/../controllers/UserController.php';

class Route {
    public function route($uri) {
        // Affichez l'URI originale pour le débogage
        // echo "URI originale : $uri<br>";

        // Nettoyez l'URI
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = ltrim($uri, '/anki-web/');

        // Affichez l'URI nettoyée pour le débogage
        // echo "URI nettoyée : $uri<br>";
    
        switch ($uri) {
            case '':
            case 'dashboard': $controller = new DashboardController(); $controller->show(); break;
   
            default:  $this->show404(); break;
        }
    }

    // Gérer les erreurs 404 (Page non trouvée)
    private function show404() { echo "Erreur 404 : Page non trouvée."; }
}
