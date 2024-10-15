<?php

class Database {
    private $pdo;
    private $statement; // Ajout explicite de la propriété statement

    public function __construct() {
        $config = require(__DIR__ . '/../config/database.php');
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8";
        $this->pdo = new PDO($dsn, $config['username'], $config['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Modifie la méthode query pour accepter les paramètres
    public function query($sql, $params = []) {
        $this->statement = $this->pdo->prepare($sql);  // Prépare la requête
        $this->statement->execute($params);  // Exécute la requête avec les paramètres fournis
        return $this;  // Retourne l'objet courant pour chaîner les appels
    }

    // Récupérer tous les résultats sous forme de tableau associatif
    public function resultSet() {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);  // Retourne un tableau associatif
    }

    // Récupérer une seule ligne
    public function single() {
        return $this->statement->fetch(PDO::FETCH_ASSOC);  // Retourne une seule ligne sous forme de tableau associatif
    }

    public function prepare($sql) {
        return $this->pdo->prepare($sql);
    }

    public function execute($statement, $params = []) {
        return $statement->execute($params);
    }
}
