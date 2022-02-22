<?php
require 'pdo.php';

if(isset($_POST['add']))
{    
    if (!empty($_POST['new_name']) and strlen($_POST['new_name']) < 46) {
        $new_name = trim($_POST['new_name']);
    } elseif (empty($_POST['new_name'])) {
        $_SESSION['nameErrEmpty'] = "Veuillez entrer un Nom";
    } elseif (strlen($_POST['new_name']) > 45) {
        $_SESSION['nameErrLenght'] = "Le Nom est limité à 45 caractères";
    }

    if (!empty($_POST['new_fname']) and strlen($_POST['new_fname']) < 46) {
        $new_fname = trim($_POST['new_fname']);
    } elseif (empty($_POST['new_fname'])) {
        $_SESSION['fnameErrEmpty'] = "Veuillez entrer un Prénom";
    } elseif (strlen($_POST['new_fname']) > 45) {
        $_SESSION['fnameErrLenght'] = "Le Prénom est limité à 45 caractères";
    } 

    if (!empty($_POST['new_name']) and !preg_match("/^[a-zA-Z-' \p{L}]+$/ui", $_POST['new_name']) or !empty($_POST['new_fname']) and !preg_match("/^[a-zA-Z-' \p{L}]+$/ui", $_POST['new_fname'])) {
        $_SESSION['nameErrContent'] = "Seuls les lettres et espaces sont acceptés";
    } 

    if (empty($_SESSION)) {
        $add = "INSERT INTO friend (`lastname`,`firstname`)
        VALUES (:lastname, :firstname);";

        $addPrepare = $pdo->prepare(($add));
        $addPrepare->bindValue(':lastname', $new_name, \PDO::PARAM_STR);
        $addPrepare->bindValue(':firstname', $new_fname, \PDO::PARAM_STR);
        $addPrepare->execute();

        header('Location: index.php');

    } else {
        header('Location: index.php');
    }
}
