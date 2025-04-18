<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header>
    <h1>Login</h1>
</header>

<main>
    <?php if (!empty($errore)): ?>
        <p class="error-message"><?php echo $errore; ?></p>
    <?php endif; ?>
    <form method="POST" action="index.php?page=login">
        <label>Username: <input type="text" name="username" required></label><br><br>
        <label>Password: <input type="password" name="password" required></label><br><br>
        <input type="submit" value="Accedi">
    </form>
</main>

<footer>
    <p>&copy; 2024 Associazione No-Profit</p>
</footer>
</body>
</html>
