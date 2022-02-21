<?php
require 'header.php';
?>

<main>
    <section class="col-flex">
        <?php
            foreach ($livre as $row_livre) {
                echo '<div class="livre">';
                echo '<div><h2>'.$row_livre['titre'].'</h2></div>';
                echo '<div><span>'.'Auteur: '.$row_livre['prenom'].' '.$row_livre['nom'].'</span><span>'.'Catégorie: '.$row_livre['genre'].'</span></div>';
                echo '<div><p>'.$row_livre['resume'].'</p></div>';
                echo '<div><span>'.'Prix: '.$row_livre['prix'].'€'.'</span><span>'.'Parution: '.$row_livre['date'].'</span><span>'.'Nombre de pages: '.$row_livre['page'].'</span></div>';
                echo '<form action="add.php" method="POST">
                <label for="qty">Quantité</label>
                <input type="text" id="qty" name="qty" value="1">
                <input type="hidden" name="hid_id" value="'.$row_livre['id'].'">
                <input type="hidden" name="hid_title" value="'.$row_livre['titre'].'">
                <input type="hidden" name="hid_price" value="'.$row_livre['prix'].'">
                <input type="submit" name="add" class="bouton" value="Ajouter au panier">
                </form>';
                echo '</div>';
            }
        ?>
        
    </section>
</main>

<?php
require 'footer.php';
?>