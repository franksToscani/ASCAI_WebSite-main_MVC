<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Accesso Negato</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header><h1>Accesso Negato</h1></header>
<main>
    <p class="error-message">Non hai i permessi per accedere a questa pagina.</p>
    <a href="index.php">Torna alla home</a>
</main>
<footer><p>&copy; 2024 Associazione No-Profit</p></footer>
</body>
</html>
