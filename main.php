<?php
include ('header.php');
?>

<body>
    <?php
        $nomcookie=$_REQUEST["nom"];
        setcookie("nom", $nomcookie, time()+(900000));
    ?>

    <?php
        if($_COOKIE["nom"])
        {
            echo "<br><br><br><br>";
            echo "Allo, votre nom est :";
            echo $_COOKIE["nom"];
        }
        else
        {
         echo  '<form method="post" action="main.php">
        <p>Quel est votre nom?</p>
        <input type="text" name="nom" size="30">
        <input type="submit" name="Submit" value="Envoyer">
        </form>';
        }
     ?>
</body>