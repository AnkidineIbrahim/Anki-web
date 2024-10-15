<?php

class BaseController {

    // public function render($view, $data = [], $folder = '') {
    //     // Extrait les données à utiliser dans la vue
    //     extract($data);

    //     // Construire le titre de la page
    //     $pageTitle = ucfirst(str_replace('-', ' ', $view));

    //     // Définir le chemin complet de la vue (dossier si nécessaire)
    //     $viewPath = __DIR__ . '/../views/';
    //     if ($folder !== '') {
    //         $viewPath .= $folder . '/';
    //     }
    //     $viewPath .= $view . '.php';

    //     if(isset($_SESSION["user_id"])) {
    //         // Inclure l'en-tête, la vue et le pied de page
    //         include __DIR__ . '/../views/templates/header.php';
    //     }
    //     if (file_exists($viewPath)) {
    //         include $viewPath;
    //     } else {
    //         echo "La vue {$view}.php n'a pas été trouvée dans {$folder}.";
    //     }

    //     if(isset($_SESSION["user_id"])) {
    //         include __DIR__ . '/../views/templates/footer.php';
    //     }
        
    // }

    public function render($view, $data = [], $folder = '') {
        // Extrait les données à utiliser dans la vue
        extract($data);

        // Construire le titre de la page
        $pageTitle = ucfirst(str_replace('-', ' ', $view));

        // Définir le chemin complet de la vue (dossier si nécessaire)
        $viewPath = __DIR__ . '/../views/';
        if ($folder !== '') {
            $viewPath .= $folder . '/';
        }
        $viewPath .= $view . '.php';

        // Inclure l'en-tête, la vue et le pied de page
        include __DIR__ . '/../views/templates/header.php';
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            echo "La vue {$view}.php n'a pas été trouvée dans {$folder}.";
        }
        include __DIR__ . '/../views/templates/footer.php';
    }

    public function redirect($path) {
        header("Location: " . BASE_URL . $path);
        exit();
    }
}
