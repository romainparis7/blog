function dedans()
{ 
  /*  
  alert('test');

*/

//parametre
var xhr = new XMLHttpRequest();
    //fonction de rappel
    xhr.onreadystatechange= function() {

    if (xhr.readyState == 4 && xhr.status == 200) {
      //  document.getElementById('rappel').innerHTML=xhr.responseText;
        
// 1. Creer un nouveau noeud de type div
var newDiv = document.createElement("div");
// 2. lui affecter la valeur qui est dans le champ comment
document.getElementById("comment");
// 3. Recuperer le parent de comment..le contenu de l enfant recupere le contenu  du pareznt
newDiv.innerHTML = xhr.responseText + "---" +document.getElementById ("chocolat").value; //le echo
newDiv.style.color = "green";
// 4. Lier le parent à l'enfant
comments.appendChild(newDiv); 

    }
    };

   //ouvrir requête de la 2e METHODE POST  
    xhr.open('POST','save_comment.php');
    //envoi de la requête de la 2e METHODE POST
    var data = new FormData();
    data.append('comment', document.getElementById('chocolat').value);
    //data.append(‘membre’,membre);
    xhr.send(data);
}
