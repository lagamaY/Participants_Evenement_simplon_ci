
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	
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


$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id = $_REQUEST["id"];
		$nom = $_REQUEST['nom'];
		$prenom = $_REQUEST['prenom'];
		$numero = $_REQUEST['numero'];
		$mail = $_REQUEST['mail'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO participants(id, nom, prenom, numero, mail) VALUES ('$id',
		'$nom',
			'$prenom','$numero','$mail')";
		
		mysqli_query($conn, $sql);

		
		// Close connection
		mysqli_close($conn);


		?>
		

		 



</body>

</html>
