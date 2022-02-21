<?php
    if ($_POST) {

        $errors = array();
        
        if (empty($_POST["user_name"])) {
            $errors["user_name_1"] = "Votre Nom est obligatoire.";
        } elseif (!preg_match("/^[a-zA-Z-' \p{L}]+$/ui", $_POST["user_name"])) {
            $errors["user_name_2"] = "Seuls les lettres et espaces sont acceptés";
        }

        if (empty($_POST["user_fname"])) {
            $errors["user_fname_1"] = "Votre Prénom est obligatoire.";
        } elseif (!preg_match("/^[a-zA-Z-' \p{L}]+$/ui", $_POST["user_fname"])) {
            $errors["user_fname_2"] = "Seuls les lettres et espaces sont acceptés";
        }

        if (empty($_POST["user_mail"])) {
            $errors["user_mail_1"] = "Votre email est obligatoire.";
        } elseif (!filter_var($_POST["user_mail"], FILTER_VALIDATE_EMAIL)) { 
            $errors["user_mail_2"] = "Le format d'email est incorrect"; 
        }

        if (empty($_POST["phone"])) {
            $errors["phone_1"] = "Votre téléphone est obligatoire.";
        } 

        if (empty($_POST["user_message"])) {
            $errors["user_message_1"] = "Le message est obligatoire.";
        } 
    }
?>

<form method="POST" action="thanks.php" >
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" value="<?php if(isset($_POST["user_name"])) echo $_POST["user_name"]?>">
        <p><?php 
        if (isset($errors["user_name_1"])) {
            echo $errors["user_name_1"];
        }

        if (isset($errors["user_name_2"])) {
            echo $errors["user_name_2"];
        }
        ?></p>
    </div>
    <div>
        <label for="fname">Prénom :</label>
        <input type="text" id="fname" name="user_fname" value="<?php if(isset($_POST["user_fname"])) echo $_POST["user_fname"]?>">
        <p><?php 
        if(isset($errors["user_fname_1"])) {
            echo $errors["user_fname_1"];
        }

        if (isset($errors["user_fname_2"])) {
            echo $errors["user_fname_2"];
        }
        ?></p>
    </div>
    <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail" value="<?php if(isset($_POST["user_mail"])) echo $_POST["user_mail"]?>">
        <p><?php 
        if (isset($errors["user_mail_1"])) {
            echo $errors["user_mail_1"];
        }

        if (isset($errors["user_mail_2"])) {
            echo $errors["user_mail_2"];
        }
        ?></p>
    </div>
    <div>
        <label for="phone">Téléphone :</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="06XXXXXXXX" value="<?php if(isset($_POST["phone"])) echo $_POST["phone"]?>">
        <p><?php 
        if (isset($errors["phone_1"])) {
            echo $errors["phone_1"];
        }
        ?></p>
    </div>
    <div>
        <label for="subject">Sujet :</label>
        <select id="subject" name="subject">
            <option value="questions">Questions</option>
            <option value="devis">Devis</option>
            <option value="bugs">Bugs détectés</option>
        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message" value="<?php if(isset($_POST["user_message"])) echo $_POST["user_message"]?>"></textarea>
        <p><?php 
        if (isset($errors["user_message_1"])) {
            echo $errors["user_message_1"];
        }
        ?></p>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
