<?php
    include 'employee.php';

    class EmployeeManager {

        private $Connection = null;

        private function getConnection(){
            if(is_null($this->Connection)){
                $this->Connection = mysqli_connect('localhost', 'boutaina', 'test123', 'employees_db');

                if(!$this->Connection){
                    $message = 'Connection Error: ' .mysqli_connect_error();
                    throw new Exception($message);
                }
            }
            return $this->Connection;
        }

        public function getAllEmployees(){
            $sqlGetData = 'SELECT id,registNumber, first_name, last_name, date_naissance, functionEmployee ,salary,departement,photo  FROM employees ';
            $result = mysqli_query($this->getConnection() ,$sqlGetData);
            $employeesList = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $employees = array();
            foreach($employeesList as $employee_list){
                $employee = new Employee();
                $employee->setId($employee_list['id']);
                $employee->setregistrationNumber($employee_list['registNumber']);
                $employee->setFirstName($employee_list['first_name']);
                $employee->setLastName($employee_list['last_name']);
                $employee->setDateNaissance($employee_list['date_naissance']);
                $employee->setFunctionEmployee($employee_list['functionEmployee']);
                $employee->setSalary($employee_list['salary']);
                $employee->setDepartement($employee_list['departement']);
                $employee->setPhoto($employee_list['photo']);

                array_push($employees, $employee);
            }

            return $employees;
        }


        public function insertEmployee($employee){
            $registrationNumber = $employee->getRegistrationNumber();
            $firstName = $employee->getFirstName();
            $lastName = $employee->getLastName();
            $dateNaissance = $employee->getDateNaissance();
            $functionEmployee= $employee->getFunctionEmployee();
            $salary=$employee->getSalary();
            $departement = $employee->getDepartement();
            $photo = $employee->getPhoto();
            
           

                 // sql insert query
        $sqlInsertQuery = "INSERT INTO employees (
                                    registNumber,
                                    first_name, 
                                    last_name, 
                                    date_naissance ,
                                    functionEmployee ,
                                    salary,
                                    departement,
                                    photo) 
                            VALUES(
                                    '$registrationNumber', 
                                    '$firstName',
                                    '$lastName',
                                    '$dateNaissance',
                                    '$functionEmployee',
                                    '$salary',
                                    '$departement',
                                    '$photo'
                                    )";

                                   
        mysqli_query($this->getConnection(), $sqlInsertQuery);
        }


        public function deleteEmployee($id){
            $sqlDeleteQuery = "DELETE FROM employees WHERE id= '$id'";

            mysqli_query($this->getConnection(), $sqlDeleteQuery);
        }


        public function editEmployee($id, $first_name, $last_name, $dateNaissance){
     
            // Update query
            $sqlUpdateQuery = "UPDATE employees SET 
                         first_name='$first_name', 
                         last_name='$last_name', 
                         date_naissance='$dateNaissance' 
                         
                         WHERE id=$id";
     
             // Make query 
             mysqli_query($this->getConnection(), $sqlUpdateQuery);

             if(mysqli_error($this->getConnection())){
                 $msg = 'Erreur' . mysqli_errno($this->getConnection());
                 throw new Exception($msg);
             }
       
        }

        public function getEmployee($id){
            $sqlGetQuery = "SELECT * FROM employees WHERE id= $id";
        
            // get result
            $result = mysqli_query($this->getConnection(), $sqlGetQuery);
        
            // fetch to array
            $employee_data = mysqli_fetch_assoc($result);

            $employee = new Employee();
            $employee->setId($employee_data['id']);
            $employee->setFirstName($employee_data['first_name']);
            $employee->setLastName($employee_data['last_name']);
            $employee->setDateNaissance($employee_data['date_naissance']);
           
            
            return $employee;
        }
    }


    
?>