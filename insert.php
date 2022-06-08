<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect('localhost' ,'root', '', 'user_db');
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$songtitle = $_REQUEST['songname'];
		$songfile = $_REQUEST['songfile'];
		$songimg = $_REQUEST['songimg'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO songs VALUES ('$songtitle',
			'$songfile','$songimg')";
			$alldata = "SELECT * from songs";
			$result = mysqli_query($conn, $alldata);
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$songtitle\n $songfile\n "
				. "$songimg");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		$a1=[];
		while ($row = $result->fetch_assoc()) {
			array_push($a1, [$row['songname'],$row['songfile'],$row['songimg']]);
		
		}
		print_r($a1[1]);
		<script type="text/javascript" var data="<?=$a1?>"></script>
		<script type="text/javascript" src="script.js"></script>		
		// // Close connection
		// mysqli_close($conn);
		?>
	</center>
	
</body>

</html>
