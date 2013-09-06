<?php
include ('header.php');
?>

<?php
if($_REQUEST["nom2"]=="admin" && $_REQUEST["pass"]=="admin123")
{
    session_start();
    echo '<p>Session ouverte</p>';
    echo '<img src="fail.jpg">';

    $_SESSION["Nom"]="Salut";

}
else
{
    echo '<p><FONT COLOR= "#FF0000">"Erreur ,pas le droit"</FONT></p>';
    header('Refresh: 5;url=login.php');
}
?>