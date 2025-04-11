<?php
include('config.php');

if (!isLoggedIn()) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Content Pagina 1</title>
</head>
<body>
    <h1>Welkom op Content Pagina 1</h1>
    <p><a href="index.php">Terug naar de Homepagina</a></p>
</body>
</html>
