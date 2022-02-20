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
        <form method="POST" action="" >
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











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

    <body class="align">

        <div class="grid">
      
          <form action="" method="POST" class="form login">
      
            <div class="form__field">
              <label for="login__username"><svg class="icon">
                  <use xlink:href="#icon-user"></use>
                </svg><span class="hidden">First Name</span></label>
              <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="First Name" required>
            </div>
            <div class="form__field">
                <label for="login__username"><svg class="icon">
                    <use xlink:href="#icon-user"></use>
                  </svg><span class="hidden">Last Name</span></label>
                <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
              </div>
              <div class="form__field">
                <label for="login__username"><svg class="icon">
                    <use xlink:href="#icon-user"></use>
                  </svg><span class="hidden">Date of Birth</span></label>
                <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Last Name" required>
              </div>
              <div class="form__field">
                <label for="login__username"><svg class="icon">
                    <use xlink:href="#icon-user"></use>
                  </svg><span class="hidden">Department </span></label>
                <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Department" required>
              </div>
             
             
      
            <div class="form__field">
              <label for="login__password"><svg class="icon">
                  <use xlink:href="#icon-lock"></use>
                </svg><span class="hidden">Photo</span></label>
              <input id="login__password" type="text" name="password" class="form__input" placeholder="Photo" required>
            </div>
      
            
                <div class="wrapper"> 
                    <button>Submit</button>
                </div>

                
              
            
      
          </form>
      
          <p class="text--center"> <a href="test.html">Back</a>
             <svg class="icon">
                 <a href="test.html"> <use xlink:href="#icon-arrow-right"></use></a>
             
            </svg></p>
      
        </div>
      
        <svg xmlns="http://www.w3.org/2000/svg" class="icons">
          <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
            <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
          </symbol>
          
        </svg>
      
      </body>

</html>