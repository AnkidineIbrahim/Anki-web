<?php
// require_once __DIR__ . '/../library/Database.php';

// class User {
//     private $db;

//     public function __construct() {
//         $this->db = new Database();
//     }

//     // Inscription de l'utilisateur
//     public function emailExists($email) {
//         $stmt = $this->db->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
//         $stmt->execute([$email]);
//         return $stmt->fetchColumn() > 0;
//     }
    
//     public function register($name, $email, $password) {
//         if ($this->emailExists($email)) {
//             return false; // L'email existe déjà
//         }
    
//         $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
//         $stmt = $this->db->prepare("INSERT INTO users (name, email, password, created_at) VALUES (?, ?, ?, NOW())");
//         return $stmt->execute([$name, $email, $hashedPassword]);
//     }
    

//     // Connexion de l'utilisateur
//     public function login($email, $password) {
//         // Here you would query the database to find the user
//         $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
//         $stmt->bindParam(':email', $email);
//         $stmt->execute();
    
//         // Fetch the user data
//         $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
//         // Check if the user exists and verify the password
//         if ($user && password_verify($password, $user['password'])) {
//             return $user; // Return the user data if credentials are correct
//         }
    
//         return null; // Return null if the login fails
//     }
    

//     // Déconnexion de l'utilisateur
//     public function logout() {
//         session_destroy();
//     }

//     // Suppression du compte utilisateur
//     public function deleteAccount($userId) {
//         // Supprimer les revenus de l'utilisateur
//         $stmt = $this->db->prepare("DELETE FROM incomes WHERE user_id = ?");
//         $stmt->execute([$userId]);
    
//         // Supprimer les dépenses de l'utilisateur
//         $stmt = $this->db->prepare("DELETE FROM expenses WHERE user_id = ?");
//         $stmt->execute([$userId]);
    
//         // Supprimer l'utilisateur
//         $stmt = $this->db->prepare("DELETE FROM users WHERE id = ?");
//         return $stmt->execute([$userId]);
//     }
    

//     public function updateProfileImage($userId, $fileName) {
//         $stmt = $this->db->prepare("UPDATE users SET profile_image = ? WHERE id = ?");
//         return $stmt->execute([$fileName, $userId]);
//     }
    
// }
