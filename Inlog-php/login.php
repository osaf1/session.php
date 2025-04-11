<?php
session_start();
include ('config.php');

if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (isset($users[$username]) && $users[$username] == $password) {
       $_SESSION['username'] = $username;
       header ('Location: index.php');
       exit;
    } else {
       $error = 'Ongeldige gebruikersnaam of wachtwoord';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
</head>
<body>
    <h2>Inloggen</h2>
    <?php if (isset($error)) { echo '<p style="color:red;">' . $error . '</p>'; } ?>
    <form method="POST">
        <label for="username">Gebruikersnaam:</label><br>
        <input type="text" name="username" id="username" required><br>
        <label for="password">Wachtwoord:</label><br>
        <input type="password" name="password" id="password" required><br>
        <input type="submit" value="Inloggen">
    </form>

</body> 
</html>