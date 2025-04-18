<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eventi</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header>
    <h1>Eventi</h1>
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
    <ul>
        <?php foreach ($eventi as $evento): ?>
            <li>
                <strong><?php echo htmlspecialchars($evento['nome']); ?></strong><br>
                Data: <?php echo htmlspecialchars($evento['data']); ?><br>
                Luogo: <?php echo htmlspecialchars($evento['luogo']); ?><br>
                <a href="index.php?page=evento&id=<?php echo $evento['id']; ?>">Iscriviti</a>
            </li>
        <?php endforeach; ?>
    </ul>
</main>
<footer>
    <p>&copy; 2024 Associazione No-Profit</p>
</footer>
</body>
</html>
