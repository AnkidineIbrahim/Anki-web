<?php
// require_once __DIR__ . '/../library/BaseController.php';
// require_once __DIR__ . '/../models/User.php';

// class UserController extends BaseController {
//     private $userModel;

//     public function __construct() {
//         $this->userModel = new User();
//     }

//     // Inscription
//     public function register() {
//         $errors = [];
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $name = $_POST['name'];
//             $email = $_POST['email'];
//             $password = $_POST['password'];
    
//             // Validation des champs
//             if (empty($name) || empty($email) || empty($password)) {
//                 $errors[] = 'Tous les champs sont requis.';
//             }
    
//             if (empty($errors)) {
//                 if ($this->userModel->emailExists($email)) {
//                     $errors[] = 'Cet email est déjà utilisé. Veuillez en choisir un autre.';
//                 } else if ($this->userModel->register($name, $email, $password)) {
//                     $this->redirect('login'); // Rediriger vers la page de connexion
//                 } else {
//                     $errors[] = 'Erreur lors de l\'inscription. L\'email peut déjà être utilisé.';
//                 }
//             }
//         }
    
//         $this->render('register', ['errors' => $errors], 'users');
//     }
    

//     // Connexion
//     public function login() {
//         $errors = [];
//         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//             $email = $_POST['email'];
//             $password = $_POST['password'];
    
//             // Try to log the user in and retrieve user data
//             $userData = $this->userModel->login($email, $password); // Modify this line
    
//             // Check if $userData is not null (login successful)
//             if ($userData) {
//                 $_SESSION['user'] = $userData; // Set user data in session
//                 $_SESSION['user_id'] = $userData['id']; // Set user ID for redirection check
//                 $this->redirect('dashboard'); // Redirect to dashboard
//             } else {
//                 $errors[] = 'Identifiants invalides.';
//             }
//         }

//         $this->render('login', ['errors' => $errors], 'users');
//     }

//     // Connexion
//     public function profile() {

//         // Vérifier la devise courante ou définir une valeur par défaut
//         $currency = $_SESSION['currency'] ?? 'DH'; // Par défaut en dirhams
        
//         $this->render('profile', ['currency' => $currency], 'users');
//     }
    
//     public function uploadProfileImage() {
//         $errors = [];
//         if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_image'])) {
//             $file = $_FILES['profile_image'];
//             $userId = $_SESSION['user_id'];
    
//             // Vérification du type et de la taille du fichier
//             $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
//             if (in_array($file['type'], $allowedTypes) && $file['size'] <= 2000000) {
//                 $fileName = 'user_' . $userId . '_' . time() . '.' . pathinfo($file['name'], PATHINFO_EXTENSION);
//                 $filePath = __DIR__ . '/../public/dist/img/' . $fileName;
    
//                 // Déplacement du fichier dans le répertoire "uploads"
//                 if (move_uploaded_file($file['tmp_name'], $filePath)) {
//                     // Mettre à jour le chemin de l'image dans la base de données
//                     $this->userModel->updateProfileImage($userId, $fileName);
    
//                     // Mettre à jour l'image dans la session
//                     $_SESSION['user']['profile_image'] = $fileName;
//                     $this->redirect('profile');
//                 } else {
//                     $this->render('profile', ['error' => 'Erreur lors du téléchargement du fichier.'], 'users');
//                 }
//             } else {
//                 $this->render('profile', ['error' => 'Le fichier doit être une image de moins de 2 Mo.'], 'users');
//             }
//         }
//     }
    
//     // Déconnexion
//     public function logout() {
//         $this->userModel->logout();
//         $this->redirect('login'); // Rediriger vers la page de connexion
//     }

//     // Suppression de compte
//     public function deleteAccount() {
//         if (isset($_SESSION['user_id'])) {
//             $this->userModel->deleteAccount($_SESSION['user_id']);
//             $this->logout(); // Déconnexion après suppression
//         }
//         $this->redirect('register'); // Rediriger vers la page d'inscription
//     }
    
// }
