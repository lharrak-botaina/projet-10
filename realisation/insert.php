
<?php
	include 'employeeManager.php';

    if(!empty($_POST)){
		$employee = new Employee();	
		$employeeManager = new EmployeeManager();

        $employee->setFirstName($_POST['fname']);
        $employee->setLastName($_POST['lname']);
        $employee->setDateNaissance($_POST['date_naissance']);
        $employee->setRegistrationNumber($_POST['registNumber']);
        $employee->setfunctionEmployee($_POST['functionEmployee']);
        $employee->setSalary($_POST['salary']);
        $employee->setDepartement($_POST['departement']);
        $employee->setPhoto($_POST['photo']);

        

       
       

		$employeeManager->insertEmployee($employee);
     
        header("Location: index.php");

    }
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

    <body >

      <div class="container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="top">
                        <h4>Contact Information</h4>
                        <p>Fill up the form and our Team will get back to you within 24 hours.</p>
                    </div>
                    <div class="medium"> <i class="fa fa-phone"></i>
                        <p>+0123 456 78910</p> <i class="fa fa-envelope-o"></i>
                        <p>hello@flowbase.com</p> <i class="fa fa-map-marker"></i>
                        <p>102 street 2714 Don</p>
                    </div>
                    <div class="last"> <span><i class="fa fa-facebook-f"></i></span> <span> <i class="fa fa-twitter"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                </div>
                <div class="right-side">
                    <div class="card-details">
                      <div class="input-group">
                    <form method="POST" action="">
                        <div class="input"> <input type="text" maxlength = "4" name="registNumber" required="required"> <span>registration Number</span> </div>

                    </div>
                        <div class="input-group">

                            <div class="input"> <input type="text" id="inputFName" name="fname" required="required"> <span>First Name</span> </div>
                            <div class="input"> <input type="text" id="inputLName" name="lname" required="required"> <span>Last Name</span> </div>
                        </div>
                        <div class="input-group">
                            <div class="input"> 
                                <!-- <input  type="text" required="required"> <span>Function</span> -->
                                <label for="country">Function</label>
                                <select id="country" name="functionEmployee">
                                    <option value="">choose...</option>
                                    <option value="">function 1</option>
                                    <option value="">function 1</option>
                                    <option value="">function 2</option>
                                    <option value="">function 3</option>
                                </select>
                             </div>

                            <div class="input"> <input  type="text" name="salary" required="required" > <span>salary MAD</span> </div>

                        </div>
                       
                        <div class="input-group">
                            <span>date</span>
                            <div class="input"> <input id="inputAge" name="date_naissance" type="date" required="required">  </div>

                        </div>
                        <h6>Department</h6>
                        <div class="centered" >
                            <select name="departement" id="">
                                    <option value="">choose...</option>
                                    <option value="RH">RH</option>
                                    <option value="LABO">Labo</option>
                                    <option value="COMP">comptable</option>

                            </select>
                            <!-- <div> <input type="radio" name="RH" id="r1"> <label for="r1">RH</label> </div>
                            <div> <input type="radio" name="labo" id="r2"> <label for="r2">Laboratoire</label> </div>
                            <div> <input type="radio" name="compta" id="r3"> <label for="r3">comptable</label> </div> -->
                        </div>
                        <div class="input-group option">
                          <span>photo</span>
                          <div class="input"> <input type="file" name="photo"  required="required">  </div>

                      </div>


                      

                    </div>
                    <div class="below-content">
                        <button type="submit">Create</button>
                        <a href="index.php">Back</a>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
              
            
      
          

</html>












