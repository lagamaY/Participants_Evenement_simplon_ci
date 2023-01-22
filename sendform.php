
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
         

         $conn = mysqli_connect("localhost", "root", "", "evenementsimplon");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$nom = $_REQUEST['nom'];
		$prenom = $_REQUEST['prenom'];
		$numero = $_REQUEST['numero'];
		$mail = $_REQUEST['mail'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO participants VALUES (
		'$nom',
			'$prenom','$numero','$mail')";
		
		mysqli_query($conn, $sql);

		
		// Close connection
		mysqli_close($conn);


		?>
		






</body>

</html>
