
<?php

    include('../includes/connect.php');
    // this function has the dynamic products displayed 
    include('../functions/common_function.php');
    session_start();

    if(!isset($_SESSION['pno'])){
        echo "<script> alert('Please login')</script>";
        echo "<script> window.open('../users_area/user_login.php','_self')</script>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font awesome link  -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>

<style>
    .pic{
    width: 100%;
  height: 400px;
  display: flex;
  flex-direction: column;
  background-image: url('https://images.unsplash.com/photo-1512389142860-9c449e58a543?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHNob3BwaW5nJTIwYmFja2dyb3VuZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=1000&q=60');
  background-size:     cover;            
  background-repeat:   no-repeat;
  background-position:center; 
  justify-content: start;
    }
</style>


<style>
        body {
            font-family: Arial, sans-serif;
        }
        .center-table {
            margin: 0 auto;
            max-width: 800px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>


<body>
 

<?php
global $con;

$pno=$_SESSION['pno'];

// find if the user is admin or not

$select_query = "SELECT * FROM `users` WHERE `pno`='$pno' ";
$result_query = mysqli_query($con, $select_query);
$row = mysqli_fetch_array($result_query);
$admin=$row['admin'];

if($admin!=1){
    echo "<script> window.open('../index.php','_self')</script>";
}

?>



    <!-- navbar  -->
    <div class="container-fluid p-0">
        <!-- navbar from bootstrap -->

        <!-- first child  -->
        


        <!-- second-child  -->
        <div class="bg-light">
            <h3 class="text-center p-3"><b>MANAGE &nbsp DETAILS</b></h3>
        </div>


        <!-- third-child  -->
        <!-- col should always sum upto 12  -->
        
        <div class="row ">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center pic">
 
                <div class="text-center m-3">

                    <a style='border-radius:50px' href="index.php?view_all1"  class='btn btn-secondary m-2'>View Page 1</a>

                    <a style='border-radius:50px' href="index.php?view_all2"  class='btn btn-secondary m-2'>View Page 2</a>

                    <a style='border-radius:50px' href="index.php?insert_1"  class='btn btn-secondary m-2'>Insert into page 1</a>

                    <a style='border-radius:50px' href="index.php?insert_2"  class='btn btn-secondary m-2'>Insert into page 2</a>



                    <form class="d-flex"  action="search_product.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data" style="border-radius:50px">
                <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                <input type="submit" value="Search" class="btn
                btn-dark btn " name="search_data_product" style="border-radius:50px">
            </form>


                
                    <?php

    if(!isset($_SESSION['pno'])){
        echo"
        <a style='color:white; font-size:24px;' class='nav-link' href='./users_area/user_login.php'>Login </a>
        ";
    }else{
        echo"
        <a class='nav-link m-5' style='color:black; font-size:24px;' href='../users_area/user_logout.php'>Logout </a>
        ";
    }

?>
                    <a style='border-radius:50px' href="index.php?edit1"  class='btn btn-secondary m-2'>Edit from page 1</a>
                    <a style='border-radius:50px' href="index.php?edit2"  class='btn btn-secondary m-2'>Edit from page 2</a>
                    <a style='border-radius:50px' href="index.php?tran1"  class='btn btn-secondary m-2'>transaction from page 1</a>
                    <a style='border-radius:50px' href="index.php?tran2"  class='btn btn-secondary m-2'>transaction from page 2</a>
                </div>


            </div>
        </div>


        <!-- fourth child  -->
        <div class="container my-3">
            <?php
            if(isset($_GET['view_all1'])){
                include('view1.php');
            }

            if(isset($_GET['view_all2'])){
                include('view2.php');
            }
            if(isset($_GET['insert_1'])){
                include('insert1.php');
            }
            if(isset($_GET['insert_2'])){
                include('insert2.php');
            }
            if(isset($_GET['edit1'])){
                include('edit1.php');
            }
            if(isset($_GET['edit2'])){
                include('edit2.php');
            }
           
            

    
           
            search_product();

            ?>

            
        </div>


         <!-- footer last child -->
        


    </div>


    <!-- bootstrap js link   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>