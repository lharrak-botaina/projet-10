<?php
class EmployeeManager{



    // --------------get all data --------------------------------------------------------------------------------------------------------------------------------------------



    // - The code is trying to get all the employees from a database.
    // - It is using mysqli_query() and mysqli_fetch_all() To apply the query.
    // - The code will return all the employees in the database.
    function getAllEmployees($connectDB){
        $GetData = 'SELECT id, first_name, last_name,  gender FROM employees';
        
        $result = mysqli_query($connectDB ,$GetData);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }




// --------------------insert new employees -----------------------------------------------------------------------------------------------------------------------------------




    // - The code inserts a new employee into the database.
    // - The fname, lname and gender are all set to values that will be inserted into the table.
    // - Then it creates an insert query with those variables as placeholders for data to be inserted into them later on in the SQL statement.
    function insertEmployees($connectDB,$Employee){
        $firstName = $Employee->getfirstName();
        $lastName = $Employee->getlastName();
        $gender = $Employee->getgender();
        $sqlInsertQuery = "INSERT INTO employees(first_name, last_name,  gender) 
        VALUES('$firstName', '$lastName',  '$gender')";
         mysqli_query($connectDB, $sqlInsertQuery);



    }








    // -----------------update the row-----------------------------------------------------------------------------------------------------------------------------------





    //-this code is to select a row and display it in input
     function SelectRowEdit($connectDB, $id){
        $sqlGetRowQuery = " SELECT * FROM employees WHERE id= $id ";


        // get result ,To apply the query
        $result = mysqli_query($connectDB, $sqlGetRowQuery);

        // fetch, returns data -> array
        $data = mysqli_fetch_assoc($result);
        return $data;
        }



   
       // -this code is to update the row and put it back to the table 
     function editEmployee($connectDB, $employee, $id){
        $firstName = $employee->getfirstName();
        $lastName = $employee->getlastName();
        $gender = $employee->getgender();
        
 
        
        $sqlUpdateQuery = "UPDATE employees SET 
                     first_name='$firstName', last_name='$lastName',  gender='$gender'
                     WHERE id=$id";
 
         // To apply the query
         mysqli_query($connectDB, $sqlUpdateQuery);
   
    }

   

    // ----------------------delete the row----------------------------------------------------------------------------------------------------------------------------------




    function deleteEmployees($connectDB,$id){
        
        $sqlDeleteQuery = "DELETE  FROM employees WHERE id= '$id'";
        // To apply the query
        mysqli_query($connectDB, $sqlDeleteQuery);

    }






}

     
           
        
    


?>