<?php
//je fais le lien avec mon fichier script.js 


$content=$_POST['comment'];
date_default_timezone_set('UTC');
$create_date = date("Y-m-d");

//appel bdd avec chaque colonne date_create et content
$connec = new PDO("mysql:dbname=blog", 'root', '0000');
$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$request = $connec->prepare("INSERT INTO commentaire (date_create,content)
                             VALUE ('$create_date','$content')");
$request->execute();


echo ($create_date);





