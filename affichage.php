<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="particip.css">
    <title>Liste de presence</title>
</head>
<body>
    

<section>
	<!--for demo wrap-->
	<h1>LISTE DE PRESENCE DES PARTICIPANTS</h1>

	<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "evenementsimplon";
/*
$servername ="localhost";
$username = "id20186404_carnetsimplon";
$password = "Password@MAMAM11";
$dbname = "id20186404_carnet";
*/

$recup = mysqli_connect($servername, $username, $password, $dbname);

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

<div class="tbl-header">
		<table cellpadding="0" cellspacing="0" border="0">
		<thead>
			<tr>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Numéro</th>
			<th>Email</th>
			</tr>
		</thead>
		</table>
	</div>

       <!--Gestion de l'affichage-->
       <div class="tbl-content">
		<table cellpadding="0" cellspacing="0" border="0">
		<tbody>
			
        <?php 
           while ($ligne = mysqli_fetch_array($result)) {?>
               
       <tr>
           <td> <?php echo $ligne['nom'] ?></td>
           <td> <?php echo $ligne['prenom'] ?></td>
           <td> <?php echo $ligne['numero'] ?></td>
           <td> <?php echo $ligne['mail'] ?></td>
       </tr>

           <?php } ?>
		
		</tbody>
		</table>
	</div>

       
           
       

   </table>


   <?php

   
}


// Close connection
mysqli_close($recup);


?>

</section>

<!-- follow me template -->
<div class="made-with-love">
  Votre nom n'est pas sur la liste?
  <a  href="index.php">Veuillez-vous enregistrer ici !</a>
</div>

<script>
	// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

</script>
</body>
</html>






