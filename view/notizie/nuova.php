<!DOCTYPE html>
<html>
<head>
    <title>Nuova Notizia</title>
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
<header>
    <h1>Nuova Notizia</h1>
</header>
<main>
    <form method="POST" action="index.php?page=notizie_store">
        <label>Titolo: <input type="text" name="titolo" required></label><br><br>
        <label>Contenuto:<br>
            <textarea name="contenuto" rows="6" cols="60" required></textarea>
        </label><br><br>
        <input type="submit" value="Pubblica Notizia">
    </form>
</main>
<footer>
    <p>&copy; 2024 Associazione No-Profit</p>
</footer>
</body>
</html>
