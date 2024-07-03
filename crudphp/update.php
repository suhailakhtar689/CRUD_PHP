    <?php 
    require("./db-connect.php");

    

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dsg = $_POST['dsg'];
        $salary = $_POST['salary'];
        $city = $_POST['city'];
        $state = $_POST['state'];

        $q = "update employee set name = '$name',email = '$email',phone = '$phone',dsg = '$dsg',salary = '$salary',city = '$city',state = '$state' where id= '$id'"; 
        $result = mysqli_query($conn, $q);
        if($result){
            header("location:index.php");
            die();
        }    
        else
        echo("Something Went Wrong!!!");  
    }


    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = "select * from employee where id = '$id'";
        $result = mysqli_query($conn,$q);
        if(mysqli_num_rows($result)){
            $row = $result->fetch_assoc();

        }
        else{
            header("location:index.php");
            die();
        }
        
    }
    
    ?>



    <?php require("partials/header.php")?>


    <title>CRUD | Home</title>

    <?php require("partials/navbar.php")?>

    <div class="container-fluid mid-section">
        <h5 class="bg-primary text-center text-light my-2 p-2">Update Employee Record</h5>
        <form action="" method="post">
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" required placeholder="Full Name" class="form-control"
                    value="<?php echo $row['name']?>">
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="text" name="email" required placeholder="Email Address" class="form-control"
                        value="<?php echo $row['email']?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Phone <span class="text-danger">*</span></label>
                    <input type="text" name="phone" required placeholder="Phone Number" class="form-control"
                        value="<?php echo $row['phone']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Designation <span class="text-danger">*</span></label>
                    <input type="text" name="dsg" required placeholder="Designation" class="form-control"
                        value="<?php echo $row['dsg']?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Salary <span class="text-danger">*</span></label>
                    <input type="number" name="salary" required placeholder="Salary" class="form-control"
                        value="<?php echo $row['salary']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>City</label>
                    <input type="text" name="city" placeholder="City Name" class="form-control"
                        value="<?php echo $row['city']?>">
                </div>

                <div class="col-md-6 mb-3">
                    <label>State</label>
                    <input type="text" name="state" placeholder="State Name" class="form-control"
                        value="<?php echo $row['state']?>">
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
        </form>

    </div>

    <?php require("partials/footer.php")?>