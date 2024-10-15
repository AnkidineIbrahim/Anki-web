<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= BASE_URL ?>public/images/logo.jpg" />
    <title>Inscription - Faculté des sciences</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Style -->
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/s.css">
    <style>
        
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="register-container text-center p-4 border rounded shadow">
        <h2 class="mb-4">Inscription</h2>
        
        <!-- Affichage des erreurs -->
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errors as $error): ?>
                    <p class="mb-0"><?= htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Formulaire d'inscription -->
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nom complet :</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe :</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-success">S'inscrire</button>
            </div>
        </form>

        <p class="mt-3">Vous avez déjà un compte ? <a href="login">Connectez-vous ici</a>.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
