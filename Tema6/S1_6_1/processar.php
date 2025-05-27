<?php
session_start();
$_SESSION['nom'] = $_POST['nom'] ?? '';
$_SESSION['username'] = $_POST['username'] ?? '';
$_SESSION['email'] = $_POST['email'] ?? '';

echo "nom: $nom \n";
echo "nom d'usuari: $username \n";
echo "email: $email";
?>