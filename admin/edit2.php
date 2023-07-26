


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font awesome link  -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body class="bg-light" style="background:rgb(200,200,200">
    <div class="container mt-5" >
     


        <!-- enctype for images  -->
        <?php

include('../includes/connect.php');

if (isset($_POST['insert_data'])) {
    $item = $_POST['item'];
    $A = intval($_POST['A']);
    $B = intval($_POST['B']);
    $C = intval($_POST['C']);
    $D = intval($_POST['D']);
    $E = intval($_POST['E']);
    $F = intval($_POST['F']);
    $G = intval($_POST['G']);
    $H = intval($_POST['H']);
    $I = intval($_POST['I']);
    $J = intval($_POST['J']);
    $K = intval($_POST['K']);
    $L = intval($_POST['L']);
    $total = intval($_POST['total']);

    // Calculate total
    $total2 = $A + $B + $C + $D + $E + $F + $G + $H + $I + $J + $K + $L;

    // Check if the total is calculated correctly
    if ($total != $total2) {
        echo "<script>alert('Error: Total is not calculated correctly. Please ensure all values are provided.')</script>";
    } else {
        // Check for duplicate entry
        $check_duplicate_query = "SELECT COUNT(*) as count FROM `armoury2` WHERE item = '$item'";
        $result = mysqli_query($con, $check_duplicate_query);
        $row = mysqli_fetch_assoc($result);
        $count = intval($row['count']);
            // Insert data into the 'armoury' table
            $update_query = "UPDATE `armoury2` SET A='$A', B='$B', C='$C', D='$D', E='$E', F='$F', G='$G', H='$H', I='$I', J='$J', K='$K', L='$L' WHERE item='$item'";
    $result = mysqli_query($con, $update_query);

            if ($result_query) {
                echo "<script>alert('Successfully edited data into the Armoury 2.')</script>";
            } else {
                echo "<script>alert('Error: Failed to insert data. Please try again.')</script>";
            }
        
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit  Data to Armoury 2</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Font Awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
<body class="bg-light" style="background:rgb(200,200,200)">
    <div class="container mt-5" >
        <h1 class="text-center p-5">Edit Data in Armoury 2</h1>

        <!-- enctype for images  -->
        <form action="" method="post">
            <!-- item -->
            <!-- <div class="form-outline mb-4 w-50 m-auto">
                <label for="item" class="form-label">विवरण</label>
                <input type="text" name="item" id="item" class="form-control" placeholder="Enter Item" autocomplete="off" required="required">
            </div> -->


            

            <div class="form-outline mb-4 w-50 m-auto">
                <select name="item" id="" class="form-select">
                    <option value=""> विवरण</option>
                    <?php
                        $select_row="Select * from `armoury2`";
                        $result_row=mysqli_query($con,$select_row);
                        while($row_data=mysqli_fetch_assoc($result_row)){
                            $cat_id=$row_data['item'];
                            echo "<option value='$cat_id'>$cat_id</option>";
                        }
                    ?>

                    <!-- <option value=''>CA</option>
                    <option value="">CB</option>
                    <option value="">CC</option>  -->

                </select>
            </div>







            <!-- total -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="total" class="form-label">जनपद के भार पर</label>
                <input type="number" name="total" id="total" class="form-control" placeholder="Enter Total" >
            </div>

            <!-- A -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="A" class="form-label">लेनदेन में</label>
                <input type="number" name="A" id="A" class="form-control" placeholder="Enter A" >
            </div>

            <!-- B -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="B" class="form-label">आरमरी में
</label>
                <input type="number" name="B" id="B" class="form-control" placeholder="Enter B" >
            </div>

            <!-- C -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="C" class="form-label">मैगजीन में
</label>
                <input type="number" name="C" id="C" class="form-control" placeholder="Enter C" >
            </div>

            <!-- D -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="D" class="form-label">थाना जात में
</label>
                <input type="number" name="D" id="D" class="form-control" placeholder="Enter D" >
            </div>

            <!-- E -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="E" class="form-label">स्थायी गार्द में
</label>
                <input type="number" name="E" id="E" class="form-control" placeholder="Enter E" >
            </div>

            <!-- F -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="F" class="form-label">अस्थायी गार्द में
</label>
                <input type="number" name="F" id="F" class="form-control" placeholder="Enter F" >
            </div>

            <!-- G -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="G" class="form-label">मुकदमाती पुराना
</label>
                <input type="number" name="G" id="G" class="form-control" placeholder="Enter G" >
            </div>

            <!-- H -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="H" class="form-label"> गुम पुराना
</label>
                <input type="number" name="H" id="H" class="form-control" placeholder="Enter H" >
            </div>

<!-- I -->
<div class="form-outline mb-4 w-50 m-auto">
                <label for="I" class="form-label">अस्थाई गार्ड में
</label>
                <input type="number" name="I" id="I" class="form-control" placeholder="Enter I" >
            </div>

            <!-- J -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="J" class="form-label">मुकदमाती पुराना
</label>
                <input type="number" name="J" id="J" class="form-control" placeholder="Enter J" >
            </div>

            <!-- K -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="K" class="form-label">गुम पुराना
</label>
                <input type="number" name="K" id="K" class="form-control" placeholder="Enter K" >
            </div>

            <!-- L -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="L" class="form-label">कैश, ड्रोपर्टी से सम्बन्धित पुराना</label>
                <input type="number" name="L" id="L" class="form-control" placeholder="Enter L" >
            </div>




            <!-- Submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_data" class='btn btn-secondary m-2' style='border-radius:50px' value="Insert Data">
                <a href="index.php" class='btn btn-secondary m-2' style='border-radius:50px'>Return to Home</a>
            </div>
        </form>
    </div>
</body>
</html>






    </div>

    
</body>
</html>

