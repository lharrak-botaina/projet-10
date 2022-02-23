<?php
include 'employee.php';


class EmployeeManager{
    function getAllEmployees(){
        $file = file_get_contents('employees.json');
        $listOfEmployees= json_decode($file);
        $workers=array();
        foreach($listOfEmployees as $listWorkers){
            $employee = new Employe();
            $employee->setId($listWorkers->id);
            $employee->setFirstName($listWorkers->first_name);
            $employee->setLastName($listWorkers->last_name);
            $employee->setGender($listWorkers->gender);
            $employee->setDateOfBirth($listWorkers->dateOfBirth);
            array_push($workers,$employee);

        }
        return $workers;


    }


    function insertEmployee($employee){
        $employee->setId(uniqid(false));
        $file = file_get_contents('employees.json');
        $data = json_decode($file);
        $employeeToList = array(
            'id'=>$employee->getId(),
            'first_name'=>$employee->getFirstName(),
            'last_name'=>$employee->getLastName(),
            'gender'=>$employee->getGender(),
            'dateOfBirth'=>$employee->getDateOfBirth()
        );
        array_push($data, $employeeToList);
        file_put_contents('employees.json',json_encode($data));

    }

    function deleteEmployee($id){
        $data = json_decode(file_get_contents('employees.json'));
        for($i=0; $i<count($data) ; ++$i){
            if($data[$i]->id==$id){
                unset($data[$i]);
                $data =array_values($data);
                file_put_contents("employees.json",json_encode($data));
                break;

            }
        }

    }

    function editEmployee($id,$first_name, $last_name, $gender, $dateOfBirth){
        $file = file_get_contents('employees.json');
        $data = json_decode($file);
        $employeeToList = array(
                        'id'=> $id,
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'gender' => $gender,
                        'dateOfBirth' => $dateOfBirth
                        );
                        for($i = 0; $i < count($data); $i++){
                            if($data[$i]->id== $id){
                                $data[$i] = $employeeToList;
                                break;
                            }
                           }
                            file_put_contents('employees.json', json_encode($data));             



    }


    public function getEmployee($id){
        $file = file_get_contents("employees.json");
        $data = json_decode($file);
        $employee = new Employe();

        foreach($data as $employee_data){
            if($employee_data->id== $id){
                $employee->setId($employee_data->id);
                $employee->setFirstName($employee_data->first_name);
                $employee->setLastName($employee_data->last_name);
                $employee->setGender($employee_data->gender);
                $employee->setDateOfBirth($employee_data->dateOfBirth);
                break;
            }
        }
        return $employee;
    }


}

?>