<!DOCTYPE html>
<html>
<head>
    <title>Conferma Notizia</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header>
    <h1>Conferma Notizia</h1>
</header>
<main>
    <?php if ($success): ?>
        <p class="success-message">Notizia pubblicata con successo!</p>
    <?php else: ?>
        <p class="error-message">Errore nella pubblicazione. Riprova.</p>
    <?php endif; ?>
    <a href="index.php?page=notizie">Torna alle notizie</a>
</main>
<footer>
    <p>&copy; 2024 Associazione No-Profit</p>
</footer>
</body>
</html>
