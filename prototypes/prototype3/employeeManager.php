<?php
class EmployeeManager{

    // - The code is trying to get all the employees from a database.
    // - It is using mysqli_query() and mysqli_fetch_all().
    // - The code will return all the employees in the database.
    function getAllEmployees($conn){
        $sqlGetData = 'SELECT id, first_name, last_name,  gender FROM employees';
        $result = mysqli_query($conn ,$sqlGetData);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }



    // - The code inserts a new employee into the database.
    // - The fname, lname and gender are all set to values that will be inserted into the table.
    // - Then it creates an insert query with those variables as placeholders for data to be inserted into them later on in the SQL statement.
    function insertEmployees($conn,$Employee){
        $firstName = $Employee->getfirstName();
        $lastName = $Employee->getlastName();
        $gender = $Employee->getgender();
        $sqlInsertQuery = "INSERT INTO employees(first_name, last_name,  gender) 
        VALUES('$firstName', '$lastName',  '$gender')";
                mysqli_query($conn, $sqlInsertQuery);



    }


    function deleteEmployees($conn,$id){
        
        $sqlDeleteQuery = "DELETE  FROM employees WHERE id= '$id'";
        mysqli_query($conn, $sqlDeleteQuery);

    }

    function editEmployees($conn,$id){
          $firstName = $Employee->getfirstName();
        $lastName = $Employee->getlastName();
        $gender = $Employee->getgender();
        $sqlEditQuery = "SELECT * FROM employees WHERE id=$id";
        mysqli_query($conn, $sqlEditQuery);
    }
}

?>