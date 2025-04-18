<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>ASCAI WebSite</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header>
    <h1>Associazione No-Profit</h1>
    <nav>
 <?php if (isset($_SESSION['username'])): ?>
    <p style="text-align:right; margin-right:20px;">
        Benvenuto, <?php echo $_SESSION['username']; ?> | <a href="index.php?page=logout">Logout</a>
    </p>
<?php else: ?>
    <p style="text-align:right; margin-right:20px;">
        <a href="index.php?page=login_form">Login</a> |
        <a href="index.php?page=register_form">Registrati</a>
    </p>
<?php endif; ?>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?page=notizie">Notizie</a></li>
            <li><a href="index.php?page=eventi">Eventi</a></li>
            <li><a href="index.php?page=iscrizioni">Iscrizioni</a></li>
        </ul>
    </nav>
</header>
<main>
<h1>Elenco Notizie</h1>
    <ul>
        <?php foreach ($notizie as $notizia): ?>
            <li>
                <strong><?php echo htmlspecialchars($notizia['titolo']); ?></strong><br>
                <?php echo nl2br(htmlspecialchars($notizia['contenuto'])); ?>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
<footer>
    <p>&copy; 2024 Associazione No-Profit. Tutti i diritti riservati.</p>
</footer>
</body>
</html>