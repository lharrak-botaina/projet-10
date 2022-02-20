<?php
    include "config.php";
    include 'employee.php';
	include 'employeeManager.php';
    
        if(isset($_GET['id'])){
            $id = $_GET['id'];
           
         $employeeManager = new EmployeeManager();

         $employeeManager->deleteEmployees($connectDB, $id);

            header('Location: index.php');
            
        
    }
?>