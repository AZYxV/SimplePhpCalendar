<?php
// exemple de connexion a une BDD

$BDD = mysqli_connect("localhost", "root", "password", "calendar");

// exemple de requête sql pour charger les événements à afficher dans le calendrier

$select = mysqli_query($BDD, "SELECT * FROM calendar WHERE id=$month");

// exemple d'injection d'un évennement dans la BDD
$inject = mysqli_query($BDD, "INSERT INTO calendar (jour, heure, evennement) VALUES ('6','10','RDV Kyxar')");
?>