<!DOCTYPE html>
<html>
<head>
    <title>AJAX-BLOG </title>
   
   
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>


<body>
        <h1 styl>ARTICLE PHP</h1>
        <section>
            <p>
                    Dum haec in oriente aguntur, Arelate hiemem agens Constantius post theatralis </p>
                    <p>ludos atque circenses ambitioso editos apparatu diem sextum idus Octobres, qui imperii eius annum tricensimum terminabat,</p> 
                    <p>insolentiae pondera gravius librans, siquid dubium deferebatur aut falsum, pro liquido accipiens et conperto, </p>
                    <p>inter alia excarnificatum Gerontium Magnentianae comitem partis exulari maerore multavit.</p>
                    <p>Novo denique perniciosoque exemplo idem Gallus ausus est inire flagitium grave, quod Romae </p>
                    <p>cum ultimo dedecore temptasse aliquando dicitur Gallienus, et adhibitis paucis clam ferro succinctis Caesare quisque sentiret.</p> 
                    <p>et haec confidenter agebat in urbe ubi pernoctantium luminum claritudo dierum solet imitari fulgorem.</p> 
                    <p>postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda </p>
                    <p>quae putabat seria cernebatur. et haec quidem medullitus multis gementibus agebantur.</p>
            </p>

<!--je crée mon bouton LIKE-->        
    <div class="yazid">     
        <i id="like"    class="fas fa-thumbs-up"  onclick="like()"></i>     
    </div class="yazid">
        <i id="dislike" class="fas fa-thumbs-down" onclick="dislike()"></i>

        
        </section>
<!--creation du textarea-->
            <label> Commentaire: </label>
            <textarea type="text" id="chocolat" name="comment" rows="10" cols="50"></textarea>
            <input id="send" type="submit" value="ok" onclick="dedans()">
<!--je crée une grande DIV "correspondent au parent" qui va contenir 3 DIV pour les commentaires-->
        <div id="comments">

<?php
//faire le lien entre bdd et php
    $connec = new PDO("mysql:dbname=blog", 'root', '0000');
    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//je questionne la bdd    
    $request = $connec->prepare("SELECT * FROM commentaire");
    $request->execute();
//je recupere les resultats sur mon $commentaires
   $commentaires = $request->fetchAll(PDO::FETCH_ASSOC);

   //var_dump ($commentaires);

//permet d'afficher la BDD blog

foreach( $commentaires as $key=> $value ){
   
    echo "<div>".$value['date_create'] ." ---". $value['content'] .'</div>'; 

}
?>
        </div>

</body>
</html>