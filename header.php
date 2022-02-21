<?php
require 'PDO.php';
session_start();

$livreQuery = $pdo->query('SELECT livre.id, page, auteur_id, titre, genre_id, date, prix, resume, genre, nom, prenom FROM livre JOIN genre ON genre.id = livre.genre_id JOIN auteur ON auteur.id = livre.auteur_id ORDER BY titre');
$livre = $livreQuery->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Library Factory</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav> 
            <ul class="d-flex">
                <?php 
                if (empty($_SESSION['name'])) {
                    echo '<li><a href="index.php">Accueil</a></li>';
                    echo '<li><a href="login.php">Login</a></li>';
                } else {
                    echo '<li><a href="index.php">Accueil</a></li>';
                    echo '<li><a href="cart.php">Panier</a></li>';
                    echo '<li><a href="logout.php">Logout</a></li>';
                }
                ?>
            </ul>
        </nav>
        <hr>
        <div>
            <?php 
                if (!empty($_SESSION['name'])) {
                echo "<h2>Bonjour " . $_SESSION['name'] . ".</h2>"; 
                } 
            ?>
        </div>
    </header>