<?php

if(!empty($_POST)){
	$id =uniqid();
	$Prenom = $_POST['prenom'];
	$Nom = $_POST['nom'];
	$Age = $_POST['age'];
	$person = array($id,$Prenom,$Nom,$Age);

	// -The file_get_contents() reads a file into a string.
	$fichier = file_get_contents("personnes.json");

	// -The json_decode() function is used to decode or convert a JSON object to a PHP object.
	$data = json_decode($fichier);
	array_push($data,$person);	

	// -The json_encode() function is used to encode a value to JSON format.
	// -The file_put_contents() writes data to a file.
	file_put_contents("personnes.json",json_encode($data))	;
	header("location: index.php"); 

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<form action="" method='post'>
	
<input type="text" name="prenom">
<input type="text" name="nom">
<input type="text" name="age">

<button type='submit'>ajoute</button>
</form>

</body>
</html>

















	<!-- - The code starts by checking if the $_POST variable is empty. 
	- If it is, then the code will create a new uniqid() and store it in $id.
	- The Prenom and Nom values are taken from the $_POST array, 
	which are stored in variables called $Prenom and $Nom respectively.
	- Then age is also taken from the $_POST array, which is stored in a variable called $Age.
	- The next step of this code is to use file_get_contents("personnes.json") 
	to get all of the data that was saved into "personnes.json" earlier on in this script (the JSON file).
	- This data can be found at line 8-9: $data = json_decode($fichier);
	- array_push($data,$person);
	- This creates an associative array with one key/value pair for each person saved into "personnes.json". 
	- The first value of each key/value pair has been set as null because they were not filled out when they were created (line 7). 
	- Next we call json_encode() on these arrays so that we can save them back into "personnes.json" using header
	- The code is used to create a new file called personnes.json in the same directory as the index.php file.
	- The code then takes the data from $_POST and stores it into an array called $data, 
	which is then passed onto json_decode() function to convert it into JSON format 
	before being saved into the newly created file.
	- The header() function is used to redirect back to index.php after saving the data in personnes.json -->