<?php

include 'employeeManager.php';

$EmployeeManager = new  EmployeeManager();
$data =$EmployeeManager->getAllEmployees();

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
        <a href="insert.php">insert Data</a>


        <table>
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
            </tr>

            <?php foreach($data as $employee) {
            ?>

            <tr>
                <td><?php echo $employee->getFirstName(); ?></td>
                <td><?php echo $employee->getLastName(); ?></td>
                <td><?php echo $employee->getGender(); ?></td>
                <td><?php echo $employee->getDateOfBirth(); ?></td> 
                <td>
                    <a href="edit.php?id=<?php echo $employee->getId();?>">Edit</a>
                    <a href="delete.php?id=<?php echo $employee->getId();?>">delete</a>

                </td>
                
            </tr>
            <?php }?>

        </table>

    </div>


</body>
</html>