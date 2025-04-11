<?php
include('config.php');

if (!isLoggedIn()) {
    header ('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepagina</title>
</head>
<body>
    <h1>Welkom, <?php echo $_SESSION['username']; ?>!</h1>
    <p><a href="content1.php">Content Pagina 1</a></p>
    <p><a href="content2.php">Content Pagina 2</a></p>
    <p><a href="content3.php">Content Pagina 3</a></p>
    <p><a href="logout.php">Uitloggen</a></p>
</body>
</html>