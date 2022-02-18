<?php  
include 'config.php';
// session_start();


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $update= true;
        $sqlEditQuery = "SELECT * FROM employees WHERE id=$id";
        //mysqli_query = send query to database
        $result = mysqli_query($conn, $sqlEditQuery);

		//mysqli_fetch_assoc = convert result of one item to array
        $row = mysqli_fetch_assoc($result);
        
            
            
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $gender = $row['gender'];
             
            
       
    }

    if(!empty($_POST)){
        
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $gender = $_POST['gender'];

        $sqlUpdateQuery ="UPDATE employees SET 
        first_name='$firstName',last_name='$lastName',gender='$gender' WHERE id=$id ";

        $result = mysqli_query($conn, $sqlUpdateQuery);
        header('location: index.php');
        
    };
    
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
<div>
        <div>
		<div><h3>Create a User</h3>
        <form method="POST" action="">
            <!-- <input type="hidden" name="id" value = "<?php echo $id?>"> -->
			<div>
				<label for="inputFName">First Name</label>
				<input type="text" required="required" id="inputFName"  name="first_name" 
				value="<?php echo $firstName; ?>" placeholder="First Name">
				<span></span>
			</div>
			
			<div>
				<label for="inputLName">Last Name</label>
				<input type="text" required="required" id="inputLName" name="last_name"
				value="<?php echo $lastName;?>" placeholder="Last Name">
        		<span></span>
			</div>
			
			<!-- <div>
				<label for="inputAge">Age</label>
				<input type="number" required="required" class="form-control" id="inputAge" name="age" placeholder="Age">
				<span></span>
			</div> -->
				<div class="form-group">
					<label for="inputGender">Gender</label>
					<select class="form-control" required="required" id="inputGender" name="gender" value="<?php echo $gender; ?>" >
						<option>Please Select</option>
						<option value="male" <?= $gender== 'male' ? 'selected' : '' ?> value="Male">Male</option>
						<option value="Female" <?= $gender== 'Female' ? 'selected' : '' ?> value="Female">Female</option>
					</select>
					<span></span>
        		</div>
    
			<div class="form-actions">
			<button type="update">update</button>

					
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>