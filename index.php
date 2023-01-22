
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Simplon CI Register</title>
    <!--link to css file-->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
   

    <h2>Bienvenue à Simplon Côte d'Ivoire.
       </h2>
       <p id="send"></p>

       <br> 

        <div class="container" id="container">
            
            <div class="form-container sign-in-container">

                <!--Formulaire d'enregistrement-->
                <form action="#">
                    <h1>Enregistrez vous !</h1>
                   <div class="social-container"> </div>
                   
                    <input type="text" id="nom" name="nom" placeholder="Nom" required>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                    <input type="number" id="numero" name="numero" placeholder="Numéro" required>
                    <input type="email" id="mail" name="mail" placeholder="Email" required>

                    <a href="#"></a>

                    <!--bouton 'envoyer'-->
                    <input type="button" style="cursor: pointer;" id="submitBtn" class="open-modal" name="envoyer" value="Envoyer" required>

  
                </form>

                <!--Fin/Formulaire d'enregistrement-->

                


            </div>

            <!--Le bloc contenant le lien pour aller à la page d'affichage des participants.-->
            <div class="overlay-container">
                <div class="overlay">
                    
                    <div class="overlay-panel overlay-right">
                        <h1>Liste des participants.</h1>
                        <p>Si vous vous êtes déjà inscrit(e) sur la liste des participants, vous pouvez vérifier votre nom sur la liste de présence <a target="_blank" href="affichage.php">ici</a>.</p>
                         
                    </div>
                </div>
            </div>
            <!--FIN/Le bloc contenant le lien pour aller à la page d'affichage des participants.-->
        </div>
        
       
   

<!--Code javascript pour envoyer le formulaire sans quitter la page en cours-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script type="text/javascript">
    document.querySelector("#submitBtn").addEventListener("click",function(){
        var nom = $("input[name=nom]").val();
        var prenom = $("input[name=prenom]").val();
        var numero = $("input[name=numero]").val();
        var mail = $("input[name=mail]").val();
        var error = "";

        // Contrôle des champs
        if(nom == "" || prenom == "" || numero == "" || mail == ""){
            error = "Veuillez remplir tous les champs du formulaire svp ! <br>";
        }
       
        if(error != ""){
            $("#send").html("<strong style='color:red'>Erreur :</strong> " + error);
        } else {
            var UserData = "nom="+nom + "&prenom="+prenom+ "&numero="+numero+ "&mail="+mail;
            $.ajax({
                type: "post",
                data:UserData,
                url:"sendform.php",
                success:function(response){
                    console.log("Data Submitted");
                    // console.log(response);
                    
                    $("#send").html(" Enregistrement effectué avec succès !")
                    $("input[name=nom]").val("");
                    $("input[name=prenom]").val("");
                    $("input[name=numero]").val("");
                    $("input[name=mail]").val("");
                },
                error:function(e){
                    $("#send").html("Une erreur s'est produite lors de l'envoi des données.");
                }
            })
        }
    })
</script>
<!-- fin//Code javascript pour envoyer le formulaire sans quitter la page en cours-->






    
</body>
 
</html>