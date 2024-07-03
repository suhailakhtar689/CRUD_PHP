    <?php 
     require("partials/header.php");
     require("./db-connect.php");


     if(isset($_GET['type'])=='delete'){
          $id = $_GET['id'];
          $q = "delete from employee where id = '$id' ";
         mysqli_query($conn,$q);
         header("location:index.php");
         die();
     }
     
     else if(isset($_GET['search'])){
        $search = $_GET['search'];
        $q = "select * from employee where name like '%$search%' or email like '%$search%' or phone like '%$search%' or dsg like '%$search%' or city like '%$search%' or state like '%$search%' order by id desc";
        $result = mysqli_query($conn,$q);
   }

   else{
    $q = "select * from employee order by id desc";
    $result = mysqli_query($conn,$q);
   }
    ?>

    <title>CRUD | Home</title>

    <?php require("partials/navbar.php")?>

    <div class="container-fluid mid-section">
        <h5 class="bg-primary text-center text-light my-1 p-2">Employee Data</h5>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Designation</th>
                <th>Salary</th>
                <th>City</th>
                <th>State</th>
                <th></th>
                <th></th>
            </tr>
            
            <?php while($row=$result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td><?php echo $row['dsg'] ?></td>
                <td><?php echo $row['salary'] ?></td>
                <td><?php echo $row['city'] ?></td>
                <td><?php echo $row['state'] ?></td>
                <td><a href="update.php?id=<?php echo $row['id'] ?>"><span
                            class="material-symbols-outlined">edit</span></a></td>
                <td><a href="index.php?type=delete&id=<?php echo $row['id'] ?>"><span
                            class="material-symbols-outlined text-danger">delete_forever</span></a></td>

            </tr>
            <?php } ?>

        </table>

    </div>

    <?php require("partials/footer.php")?>