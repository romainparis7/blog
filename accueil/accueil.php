<?php

include_once('articleAccueil.php');

$connec = new PDO("mysql:dbname=blog", 'root', '0000');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("SELECT * FROM article ORDER BY id DESC LIMIT 6");  
$request->execute();
//resultat de la bdd en objet à partir de maintenant
$request->setFetchMode(PDO::FETCH_CLASS,'Article');

$return = $request->fetch();

echo (json_encode($return));



?> 