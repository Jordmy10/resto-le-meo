<?php

$pdo = new pdo('mysql');

$nom = htmlspecialchars($_POST['nom']);
$date = $_POST['date'];
$heure = $_POST['heure'];

$sql = "INSERT INTO reservations (nom,date,heure) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$nom,$date,$heure]);

echo "Réservation enregistrée avec succès"

?>