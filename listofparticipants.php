<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Simplon CI Register</title>
    <!--link to css file-->
    <link rel="stylesheet" href="participants.css">
</head>

<body>

<div class="table_container">

    <div class="overlay">
        <!--Pas de contenu ici-->
    </div>

    <!--Titre-->

    <div class="titleDiv">
        <h1 class="title">Liste de présence des participants à l'évènement.</h1>
        <!--<span class="subtitle">à Simplon CI</span>-->
    </div>

    <!--PHP-->

    <?php

		 $servername ="localhost";
		 $username = "root";
		 $password = "";
		 $dbname = "evenementsimplon";
         

         $recup = mysqli_connect("localhost", "root", "", "evenementsimplon");
		
		// Check connection
		if($recup === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	

		$sql = "SELECT*FROM participants";

        $result = mysqli_query($recup, $sql);


		
		if(!$result){
			
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($recup);
			
		} 
        
        else{

			?>
                        <table>
                <tr>
                    <td> Nom</td>
                    <td> Prénom</td>
                    <td> Numéro</td>
                    <td> Email</td>
                </tr>

                <!--Gestion de l'affichage-->

                <?php 
                    while ($ligne = mysqli_fetch_array($result)) {?>
                        
                <tr>
                    <td> <?php echo $ligne['nom'] ?></td>
                    <td> <?php echo $ligne['prenom'] ?></td>
                    <td> <?php echo $ligne['numero'] ?></td>
                    <td> <?php echo $ligne['mail'] ?></td>
                </tr>

                    <?php } ?>
                    
                

            </table>


            <?php

            
		}
		

		// Close connection
		mysqli_close($recup);


		?>



    <!--Le lien vers la page enregistrement-->
    <div class="lienEnregistrement">

        <span class="participant">Vous n'êtes pas encore enregistré? <a href="register.html">Enregistrez-vous ici !</a></span>
    </div>

</div>

</body>
</html>