    <?php 
    require("./db-connect.php");
    

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $dsg = $_POST['dsg'];
        $salary = $_POST['salary'];
        $city = $_POST['city'];
        $state = $_POST['state'];

        $q = "insert into employee(name,email,phone,dsg,salary,city,state) 
              values('$name','$email','$phone','$dsg','$salary','$city','$state')";
        $result = mysqli_query($conn, $q);
        if($result){
            header("location:index.php");
            die();
        }    
        else
        echo("Something Went Wrong!!!");  
    }
    ?>



    <?php require("partials/header.php")?>


    <title>CRUD | Home</title>

    <?php require("partials/navbar.php")?>

    <div class="container-fluid mid-section">
        <h5 class="bg-primary text-center text-light my-2 p-2">Create Employee Record</h5>

        <form action="" method="post">
            <div class="mb-3">
                <label>Name <span class="text-danger">*</span></label>
                <input type="text" name="name" required placeholder="Full Name" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="text" name="email" required placeholder="Email Address" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Phone <span class="text-danger">*</span></label>
                    <input type="text" name="phone" required placeholder="Phone Number" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Designation <span class="text-danger">*</span></label>
                    <input type="text" name="dsg" required placeholder="Designation" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>Salary <span class="text-danger">*</span></label>
                    <input type="number" name="salary" required placeholder="Salary" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>City</label>
                    <input type="text" name="city" placeholder="City Name" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label>State</label>
                    <input type="text" name="state" placeholder="State Name" class="form-control">
                </div>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
            
        </form>

    </div>

    <?php require("partials/footer.php")?>