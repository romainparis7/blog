$("#bouton1").click(function(){
        $.ajax({
            url: "accueil.php",
        
            /*success: function( response ) {  
            $('#article1').html(response.title);
            $('#article2').html(response.content);
            $('#article3').html(response.title);
            $('#article4').html(response.content);
            $('#article5').html(response.title);
            $('#article6').html(response.content);
            $('#article7').html(response.title);
            $('#article8').html(response.content);
            $('#article9').html(response.title);
            $('#article10').html(response.content);
            $('#article11').html(response.title);
            $('#article12').html(response.content);*/
            for(i = 0; i < articles.length; i++){


                // var clone = $("#card").clone();
                // var clone = $("#clonecard0").clone().attr('id', 'clonecard' + article.id );
                var clone = $("#card").clone().attr('id', 'card' + articles[i].id );
  
  
               $("#firstcard h5").text(articles[i].title);
               $("#card h5 ~ p").text(articles[i].content);
               $("#card").fadeIn('slow');
               $("#card").removeClass('card');
               $("#row").append(clone);
               id_last_article = articles[i].id;
  
            }
           },

            },
            dataType: "json"
            }
        )


/*  var boucle (){
            i=0 i=>3 i=++
        }


        $("article1" ).clone(response.title) // pour cloner un élément*/
        