<?php  
include 'config.php';


    $firstName = '';
    $lastName='';
    $gender = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $sqlEditQuery = "SELECT * FROM employees WHERE id=$id";
        //mysqli_query = send query to database
        $result = mysqli_query($conn, $sqlEditQuery);
        //mysqli_fetch_assoc = convert result of one item to array
        $row = mysqli_fetch_assoc($result);
        
            
            
            $firstName = $row['first_name'];
            $lastName = $row['last_name'];
            $gender = $row['gender'];
             
            
       
    }

    if(!empty($_POST)){
        
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $gender = $_POST['gender'];

        $sqlUpdateQuery ="UPDATE employees SET 
        first_name='$firstName',last_name='$lastName',gender='$gender' WHERE id=$id ";

        $result = mysqli_query($conn, $sqlUpdateQuery);
        header('location: index.php');
        
    };
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>


        <div class="container"><div class=" text-center mt-5 ">
        <h1>CRUD</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form method="POST" action="" id="contact-form" role="form">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="inputFName">Firstname *</label> <input id="inputFName" type="text" name="first_name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required." value="<?php echo $firstName; ?>" > </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="inputLName">Lastname *</label> <input id="inputLName" name="last_name" type="text"  class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required." value="<?php echo $lastName;?>"> </div>
                                    </div>
                                </div>
                                <div class="row">
                                   
                                    <div class="col-md-6">
                                        <div class="form-group"> <label  for="inputGender">Gender</label>
                                         <select id="inputGender" name="gender"  class="form-control" required="required" data-error="Please specify your need.">
                                                <option value="" selected disabled>--Select Your gender--</option>
                                                <option value="male" <?= $gender== 'male' ? 'selected' : '' ?>>Male</option>
                                                <option value="Female" <?= $gender== 'Female' ? 'selected' : '' ?>>Female</option>
                                                
                                            </select> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-12"> <button type="update" class="btn btn-success btn-send pt-2 btn-block " >update </button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>



</div>
</body>
</html>