<!DOCTYPE html>
<html>
<head>
    <title>Iscrizione Evento</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header>
    <h1>Iscrizione Evento</h1>
</header>
<main>
    <h2><?php echo htmlspecialchars($evento['nome']); ?></h2>
    <p><strong>Data:</strong> <?php echo htmlspecialchars($evento['data']); ?></p>
    <p><strong>Luogo:</strong> <?php echo htmlspecialchars($evento['luogo']); ?></p>

    <form method="POST" action="index.php?page=iscriviti">
        <input type="hidden" name="evento_id" value="<?php echo $evento['id']; ?>">
        <label>Nome: <input type="text" name="nome" required></label><br><br>
        <label>Email: <input type="email" name="email" required></label><br><br>
        <input type="submit" value="Iscriviti">
    </form>
</main>
<footer>
    <p>&copy; 2024 Associazione No-Profit</p>
</footer>
</body>
</html>
