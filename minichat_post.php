<?php
header('minichat.php');
$bdd = new PDO('mysql:host=localhost;dbname=minichat', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$msgg = $bdd->prepare('INSERT INTO msg (name, msg) VALUES(?, ?)');
$msgg->execute(array($_POST['name'], $_POST['msg']));

header('Location: minichat.php');

?>