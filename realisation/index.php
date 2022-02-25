<?php
    include 'config.php';
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();
    $data = $employeeManager->getAllEmployees();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body >
<div >
    
<header >
        <!-- <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> -->
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div class="nav_list"> <a href="index.php" class="nav_link active"> <i class="fa fa-home"></i><span class="nav_name">Dashboard</span>
             </a> <a href="insert.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">add</span> </a> 
             <!-- <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a> <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> </div> -->
            </div> <a href="log.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    



    
</div>
<div id="h1">
<h1>Employees Manager</h1>
</div>
           

<table class="table" >
    <thead>
    <button id="insert"><a  href="insert.php">insert</a></button>
        <tr>

            <th scope="col">Registration number</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Date of birth</th>
            <th scope="col">Function</th>
            <th scope="col">Salary</th>
            <th scope="col">Departement</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>



        </tr>
    </thead>
    <tbody>


    <?php
                    foreach($data as $employee){
            ?>

            <tr>
                <td><?= $employee->getRegistrationNumber()?></td>
                <td><?= $employee->getFirstName()?></td>
                <td><?= $employee->getLastName()?></td>
                <td><?= $employee->getDateNaissance()?></td>
                <td><?= $employee->getFunctionEmployee()?></td>
                <td><?= $employee->getSalary()?></td>
                <td><?= $employee->getDepartement()?></td>
                <td><?= $employee->getPhoto()?></td>

              
                <td>
                    <button class="btn btn-secondary " ><a class="text-decoration-none " id="edit-delete" href="edit.php?id=<?php echo $employee->getId() ?>">Edit</a></button>
                    <button class="btn btn-danger"> <a class="text-decoration-none " id="edit-delete" href="delete.php?id=<?php echo $employee->getId() ?>">delete</a></button>
                </td>
            </tr>
            <?php }?>


        <!-- <tr>
            <th scope="row">Terms and Conditions</th>
            <td>v3</td>
            <td>Ja</td>
            <td><button type="button" class="btn btn-primary">Edit</button></td>
        </tr>
        <tr>
            <th scope="row">Imprint</th>
            <td>v1</td>
            <td>Ja</td>
            <td><button type="button" class="btn btn-primary">Edit</button></td>
        </tr>
        <tr>
            <th scope="row">Secret Document</th>
            <td>v30</td>
            <td>Nein</td>
            <td><button type="button" class="btn btn-primary">Edit</button></td>
        </tr> -->
    </tbody>
</table>
</body>
</html>