<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Playfair Display', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 500px;
            padding: 30px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        input {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #66101f;
            border: none;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #5b0e29;
        }

        .main-page-link {
            display: block;
            font-size: 12px;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=twitter', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ...
}
?>

<div class="container">
    <h1>Inscription</h1>
    <form method="post">
        <input type="text" name="id" placeholder="Identifiant numérique">
        <br>
        <input type="text" name="pseudo" placeholder="Pseudo">
        <br>
        <input type="text" name="nom" placeholder="Nom">
        <br>
        <input type="email" name="mail" placeholder="Email">
        <br>
        <input type="password" name="mdp" placeholder="Mot de passe">
        <br>
        <input type="submit" value="s'Inscrire">
    </form>
    <a href="http://localhost/PHP/05/index.php" class="main-page-link">http://localhost/PHP/05/index.php</a>
</div>
</body>
</html>
