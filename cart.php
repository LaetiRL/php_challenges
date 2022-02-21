<?php
require 'add.php';

if (empty($_SESSION['cart'])) {
    echo "Votre panier est vide";
} else {
    foreach ($_SESSION['cart'] as $products) {
        echo $products['title']."<br>Quantité: ".$products['quantity']."<br>Prix: ".$products['price']*$products['quantity']."€<br>";
    }
}
?>

<?php
require 'footer.php';
?>