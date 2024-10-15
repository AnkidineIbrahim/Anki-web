<?php
// Inclure les modèles nécessaires
require_once __DIR__ . '/../library/BaseController.php';

class DashboardController extends BaseController {
    
    public function show() {
        // Rendre la vue du tableau de bord avec les données nécessaires
        $this->render('dashboard', []);
    }
}
