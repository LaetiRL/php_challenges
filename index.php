<?php
require 'pdo.php';
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends</title>
    <link rel="stylesheet" href="style.css">

</head>
<body> 
    <section class="col-flex">
        <?php
            foreach ($friends as $row_friend) {
                echo '<div>
                <span>'.$row_friend['firstname'].'</span>
                <span>'.$row_friend['lastname'].'</span>
                </div>';
            }
        ?>
        <hr>
    </section>
    <section>
        <form action="add.php" method="POST">
            <div class="d-flex">
                <div>
                    <label for="new_name">Nom*</label>
                    <input type="text" id="new_name" name="new_name">
                </div>
                <div>
                    <label for="new_fname">Prénom*</label>
                    <input type="text" id="new_fname" name="new_fname">
                </div>
                <div>
                    <input type="submit" name="add" value="Ajouter" class="bouton">
                </div>
            </div>
        </form>
        <p><?php 
        if (!empty($_SESSION['nameErrEmpty'])) {
            echo($_SESSION['nameErrEmpty']); 
            unset($_SESSION['nameErrEmpty']);
        } ?></p>
        <p><?php 
        if (!empty($_SESSION['nameErrLenght'])) {
            echo($_SESSION['nameErrLenght']); 
            unset($_SESSION['nameErrLenght']);
        } ?></p>
        <p><?php 
        if (!empty($_SESSION['fnameErrEmpty'])) {
            echo($_SESSION['fnameErrEmpty']); 
            unset($_SESSION['fnameErrEmpty']);
        } ?></p>
        <p><?php 
        if (!empty($_SESSION['fnameErrLenght'])) {
            echo($_SESSION['fnameErrLenght']); 
            unset($_SESSION['fnameErrLenght']);
        } ?></p>
        <p><?php 
        if (!empty($_SESSION['nameErrContent'])) {
            echo($_SESSION['nameErrContent']); 
            unset($_SESSION['nameErrContent']);
        } ?></p>
    </section>
</body>
</html>