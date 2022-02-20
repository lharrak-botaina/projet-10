<?php

    include 'config.php';
    include 'employee.php';
	include 'employeeManager.php';

    if(!empty($_POST)){


        // - The code starts by creating a new employee object.
        // - The code then creates an EmployeeManager object and sets the fname, lname, gender of the employee to be inserted into the database.
        // - The code then inserts the newly created employees into the database using their first and last names as well as their gender.
        // - The code is meant to insert a new employee into the database.
         $Employee = new employee();
         $employeeManager = new EmployeeManager();

         $Employee ->setfirstName($_POST['fname']);
         $Employee ->setlastName($_POST['lname']);
         $Employee ->setgender($_POST['gender']);
		 
         
         
         $employeeManager->insertEmployees($connectDB, $Employee);
         header("Location: index.php");

      

    }
?>
<!-- -----------------------html----------------------------------------------------------------------------------------------------------------------------------- -->


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
			<div>
				<label for="inputFName">First Name</label>
				<input type="text" required="required" id="inputFName" name="fname" placeholder="First Name">
				<span></span>
			</div>
			
			<div>
				<label for="inputLName">Last Name</label>
				<input type="text" required="required" id="inputLName" name="lname" placeholder="Last Name">
        		<span></span>
			</div>
			
			<!-- <div>
				<label for="inputAge">Age</label>
				<input type="number" required="required" class="form-control" id="inputAge" name="age" placeholder="Age">
				<span></span>
			</div> -->
				<div class="form-group">
					<label for="inputGender">Gender</label>
					<select class="form-control" required="required" id="inputGender" name="gender" >
						<option>Please Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					<span></span>
        		</div>
    
			<div class="form-actions">
					<button type="submit">Create</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>