<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrazione</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header><h1>Crea un nuovo account</h1></header>
<main>
    <?php if (!empty($error)): ?>
        <p class="error-message"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="index.php?page=register">
        <label>Username: <input type="text" name="username" required></label><br><br>
        <label>Password: <input type="password" name="password" required></label><br><br>
        <label>Conferma Password: <input type="password" name="password_confirm" required></label><br><br>
        <input type="submit" value="Registrati">
    </form>
</main>
<footer><p>&copy; 2024 Associazione No-Profit</p></footer>
</body>
</html>
