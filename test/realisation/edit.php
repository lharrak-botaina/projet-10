<?php

include "employeeManager.php";
$employeeManager = new EmployeeManager();

if(isset($_GET['id'])){
    $employe = $employeeManager->getEmployee($_GET['id']);
}

if(isset($_POST['Update'])){
    $id = $_POST['id'];
    $registrationNumber=$_POST['registNumber'];
    $firstName=$_POST['fname'];
    $lastName=$_POST['lname'];
    $birthDate=$_POST['birth_date'];
    $functionEmployee=$_POST['functionEmployee'];
    $salary=$_POST['salary'];
    $departement=$_POST['departement'];
    $photo=$_POST['photo'];


    
    $employeeManager->editEmployee($id,
                                $registrationNumber,
                                $firstName,
                                $lastName,
                                $birthDate,
                                $functionEmployee,
                                $salary,
                                $departement,
                                $photo);
    header('Location: index.php');
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
                    <div class="medium"> 
                        <p>+0123 456 78910</p> <a href="index.php"> <i  class="fa fa-home"></i> </a> 
                        <p>hello@flowbase.com</p> <i class="fa fa-map-marker"></i>
                        <p>102 street 2714 Don</p>
                    </div>
                    <div class="last"> <span><i class="fa fa-facebook-f"></i></span> <span> <i class="fa fa-twitter"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                </div>
                <div class="right-side">
                    <div class="card-details">
                      <div class="input-group">
                    <form method="POST" action="">
                        <div><input name="id" value="<?php echo $employe->getId()?>" type="hidden"></div>
                        <div class="input"> <input type="text" maxlength = "4" name="registNumber" required="required" value="<?php echo $employe->getRegistrationNumber()?>"> <span>registration Number</span> </div>

                    </div>
                        <div class="input-group">

                            <div class="input"> <input type="text" id="inputFName" name="fname" required="required" value="<?php echo $employe->getFirstName()?>"> <span>First Name</span> </div>
                            <div class="input"> <input type="text" id="inputLName" name="lname" required="required" value="<?php echo $employe->getLastName()?>"> <span>Last Name</span> </div>
                        </div>
                        <div class="input-group">
                            <div class="input"> 
                                <label for="country">Function</label>
                                <select id="country" name="functionEmployee">
                                    <option value="">choose...</option>
                                    <option value="function 1" <?= $employe->getFunctionEmployee()== 'function 1' ? 'selected' : '' ?>>function 1</option>
                                    <option value="function 2" <?= $employe->getFunctionEmployee()== 'function 2' ? 'selected' : '' ?> >function 2</option>
                                    <option value="function 3"<?= $employe->getFunctionEmployee()== 'function 3' ? 'selected' : '' ?>>function 3</option>
                                    <option value="function 4" <?= $employe->getFunctionEmployee()== 'function 4' ? 'selected' : '' ?>>function 4</option>
                                </select>
                             </div>

                            <div class="input"> <input  type="text" name="salary" required="required" value="<?php echo $employe->getSalary()?>" > <span>salary MAD</span> </div>

                        </div>
                       
                        <div class="input-group">
                            <span>date</span>
                            <div class="input"> <input id="inputAge" name="birth_date" type="date" required="required" value="<?php echo $employe->getBirthDate()?>">  </div>

                        </div>
                        <h6>Department</h6>
                        <div class="centered" >


                                <select id="country" name="departement">
                                    <option value="">choose...</option>
                                    <option value="RH" <?= $employe->getDepartement()== 'RH' ? 'selected' : '' ?>>RH</option>
                                    <option value="labo" <?= $employe->getDepartement()== 'labo' ? 'selected' : '' ?> >labo</option>
                                    <option value="comptable"<?= $employe->getDepartement()== 'comptable' ? 'selected' : '' ?>>comptable</option>
                                </select>

                        
                           
                        </div>
                        <div class="input-group option">
                          <span>photo</span>
                          <div class="input"> <input type="file" name="photo" value="<?php echo $employe->getPhoto()?>"></div>

                      </div>


                      

                    </div>
                    <div class="below-content">
                        <button name="Update" type="submit">Update</button>
                        <a href="index.php">Back</a>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
              
            
      
          

</html>

