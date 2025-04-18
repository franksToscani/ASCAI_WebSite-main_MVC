<!DOCTYPE html>
<html>
<head>
    <title>Conferma Iscrizione</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header>
    <h1>Conferma Iscrizione</h1>
</header>
<main>
    <?php if (isset($success) && $success): ?>
        <p class="success-message">Iscrizione completata con successo!</p>
    <?php else: ?>
        <p class="error-message">Errore durante l'iscrizione. Riprova.</p>
    <?php endif; ?>
    <a href="index.php?page=eventi">Torna agli eventi</a>
</main>
<footer>
    <p>&copy; 2024 Associazione No-Profit</p>
</footer>
</body>
</html>
