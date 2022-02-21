<?php
require 'header.php';

if (isset($_POST['login']))
{
    if(!preg_match("/^[a-zA-Z-' \p{L}]+$/ui", $_POST['name'])) {
        $errors["name"] = "Seuls les lettres et espaces sont acceptés";
    } else {
        $_SESSION['name'] = $_POST['name'];
        header('Location: index.php');
    }

}
?>

<h2>Connectez-vous pour avoir accès au panier</h2>
<form action="login.php" method="post">
    
    <label for="name">Nom</label>
    <input type="text" name="name" id="name">
    <p><?php 
    if (isset($errors["name"])) {
        echo $errors["name"];
    }
    ?></p>
    <input type="submit" name="login" value="Connexion">
</form>

<?php
require 'footer.php';
?>