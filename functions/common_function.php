<!-- for armory ,item total a b c d e f g h are replaced with

विवरण

जनपद के भार पर

लेनदेन में

आरमरी में

मैगजीन में

थाना जात में

स्थायी गार्द में

अस्थायी गार्द में

मुकदमाती पुराना

गुम पुराना

-->

<!-- for page 2

विवरण

जनपद के भार पर

लेनदेन में

आरमरी में

आरमरी खोखा

मैगजीन में कारतूस सर्विस 


मैगजीन में कारतूस ड्रैक्टिस

 मैगजीन में खोखा 

 थाना जात पर

स्थाई गार्ड में

अस्थाई गार्ड में

मुकदमाती पुराना

गुम पुराना

कैश, ड्रोपर्टी से सम्बन्धित पुराना



-->










<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../style.css">
</head>

<style>
*{
    font-family: 'Lucida Console';
}
</style>




<?php

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  






function getproducts(){
    global $con;
    //only if category and brand variable is not set, display the data
    $select_query = "SELECT * FROM `armoury` ORDER BY `item` ";
$result_query = mysqli_query($con, $select_query);

echo "  <a class='nav-link text-center' href='#'>Page 1</a>";
// Display the dynamic table
echo "<table border='1'>";
echo "<thead><tr>";
echo "<th>विवरण</th>";
echo "<th>जनपद के भार पर</th>";
echo "<th>लेनदेन में</th>";
echo "<th>
आरमरी में</th>";
echo "<th>मैगजीन में
</th>";
echo "<th>थाना जात में
</th>";
echo "<th>स्थायी गार्द में
</th>";
echo "<th>अस्थायी गार्द में
</th>";
echo "<th>मुकदमाती पुराना
</th>";
echo "<th>गुम पुराना
</th>";
echo "</tr></thead><tbody>";

while ($row = mysqli_fetch_assoc($result_query)) {
    // Access the column values
    $item = $row['item'];
    $total = $row['total'];
    $A = $row['A'];
    $B = $row['B'];
    $C = $row['C'];
    $D = $row['D'];
    $E = $row['E'];
    $F = $row['F'];
    $G = $row['G'];
    $H = $row['H'];
                        

// Display table rows for each item in the armory
echo "<tr>";
echo "<td>" . $item . "</td>";
echo "<td>" . $total . "</td>";
echo "<td>" . $A . "</td>";
echo "<td>" . $B . "</td>";
echo "<td>" . $C . "</td>";
echo "<td>" . $D . "</td>";
echo "<td>" . $E . "</td>";
echo "<td>" . $F . "</td>";
echo "<td>" . $G . "</td>";
echo "<td>" . $H . "</td>";
echo "</tr>";
}

echo "</tbody></table>";



echo "<br><br>";





}


// search function

// function search_product(){

//     global $con;
// if(isset($_GET['search_data_product'])){
//     $search_data_value=$_GET['search_data'];
//         $seach_query="Select * from `armoury` where item like '%$search_data_value%'";
//         $result_query=mysqli_query($con,$seach_query);

//                     while($row=mysqli_fetch_assoc($result_query)){

//                        // Display the dynamic table
// echo "<table border='1'>";
// echo "<thead><tr>";
// echo "<th>Item</th>";
// echo "<th>Total</th>";
// echo "<th>A</th>";
// echo "<th>B</th>";
// echo "<th>C</th>";
// echo "<th>D</th>";
// echo "<th>E</th>";
// echo "<th>F</th>";
// echo "<th>G</th>";
// echo "<th>H</th>";
// echo "</tr></thead><tbody>";

// while ($row = mysqli_fetch_assoc($result_query)) {
//     // Access the column values
//     $item = $row['item'];
//     $total = $row['total'];
//     $A = $row['A'];
//     $B = $row['B'];
//     $C = $row['C'];
//     $D = $row['D'];
//     $E = $row['E'];
//     $F = $row['F'];
//     $G = $row['G'];
//     $H = $row['H'];
                        

// // Display table rows for each item in the armory
// echo "<tr>";
// echo "<td>" . $item . "</td>";
// echo "<td>" . $total . "</td>";
// echo "<td>" . $A . "</td>";
// echo "<td>" . $B . "</td>";
// echo "<td>" . $C . "</td>";
// echo "<td>" . $D . "</td>";
// echo "<td>" . $E . "</td>";
// echo "<td>" . $F . "</td>";
// echo "<td>" . $G . "</td>";
// echo "<td>" . $H . "</td>";
// echo "</tr>";
// }

// echo "</tbody></table>";
                    
//         }
//     }
//     else{
//         echo "no data found";
//     }



// }





function search_product() {
    global $con;

    if (isset($_GET['search_data_product'])) {
        $search_data_value = $_GET['search_data'];
        $search_query = "SELECT * FROM `armoury` WHERE item LIKE '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);

        if (mysqli_num_rows($result_query) > 0) {
            // Display the dynamic table
            echo "<table border='1'>";
            echo "<thead><tr>";
            echo "<th>विवरण</th>";
echo "<th>जनपद के भार पर</th>";
echo "<th>लेनदेन में</th>";
echo "<th>
आरमरी में</th>";
echo "<th>मैगजीन में
</th>";
echo "<th>थाना जात में
</th>";
echo "<th>स्थायी गार्द में
</th>";
echo "<th>अस्थायी गार्द में
</th>";
echo "<th>मुकदमाती पुराना
</th>";
echo "<th>गुम पुराना
</th>";
            echo "</tr></thead><tbody>";

            while ($row = mysqli_fetch_assoc($result_query)) {
                // Access the column values
                $item = $row['item'];
                $total = $row['total'];
                $A = $row['A'];
                $B = $row['B'];
                $C = $row['C'];
                $D = $row['D'];
                $E = $row['E'];
                $F = $row['F'];
                $G = $row['G'];
                $H = $row['H'];

                // Display table rows for each item in the armory
                echo "<tr>";
                echo "<td>" . $item . "</td>";
                echo "<td>" . $total . "</td>";
                echo "<td>" . $A . "</td>";
                echo "<td>" . $B . "</td>";
                echo "<td>" . $C . "</td>";
                echo "<td>" . $D . "</td>";
                echo "<td>" . $E . "</td>";
                echo "<td>" . $F . "</td>";
                echo "<td>" . $G . "</td>";
                echo "<td>" . $H . "</td>";
                echo "</tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "No data found in page 1";
        }

echo "<br><br>";

$search_data_value = $_GET['search_data'];
        $search_query = "SELECT * FROM `armoury2` WHERE item LIKE '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);


       

        if (mysqli_num_rows($result_query) > 0) {
            // Display the dynamic table
            echo "<table border='1'>";
            echo "<thead><tr>";
            echo "<th>विवरण
            </th>";
            echo "<th>जनपद के भार पर
            </th>";
            echo "<th>लेनदेन में
            </th>";
            echo "<th>आरमरी में
            </th>";
            echo "<th>आरमरी खोखा
            </th>";
            echo "<th>मैगजीन में कारतूस सर्विस 
            </th>";
            echo "<th>मैगजीन में कारतूस ड्रैक्टिस
            </th>";
            echo "<th> मैगजीन में खोखा 
            </th>";
            echo "<th> थाना जात पर
            </th>";
            echo "<th>स्थाई गार्ड में
            </th>";
            echo "<th>अस्थाई गार्ड में
            </th>";
            echo "<th>मुकदमाती पुराना
            </th>";
            echo "<th>गुम पुराना
            </th>";
            echo "<th>कैश, ड्रोपर्टी से सम्बन्धित पुराना
            </th>";

            echo "</tr></thead><tbody>";

            while ($row = mysqli_fetch_assoc($result_query)) {
                // Access the column values
                $item = $row['item'];
                $total = $row['total'];
                $A = $row['A'];
                $B = $row['B'];
                $C = $row['C'];
                $D = $row['D'];
                $E = $row['E'];
                $F = $row['F'];
                $G = $row['G'];
                $H = $row['H'];
                $I = $row['I'];
                $J = $row['J'];
                $K = $row['K'];
                $L = $row['L'];


                // Display table rows for each item in the armory
                echo "<tr>";
                echo "<td>" . $item . "</td>";
                echo "<td>" . $total . "</td>";
                echo "<td>" . $A . "</td>";
                echo "<td>" . $B . "</td>";
                echo "<td>" . $C . "</td>";
                echo "<td>" . $D . "</td>";
                echo "<td>" . $E . "</td>";
                echo "<td>" . $F . "</td>";
                echo "<td>" . $G . "</td>";
                echo "<td>" . $H . "</td>";
                echo "<td>" . $I . "</td>";
                echo "<td>" . $J . "</td>";
                echo "<td>" . $K . "</td>";
                echo "<td>" . $L . "</td>";
                echo "</tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "No data found in page 2";
        }

    }
}






function getproducts2(){
    global $con;
    //only if category and brand variable is not set, display the data
    $select_query = "SELECT * FROM `armoury2` ORDER BY `item` ";
$result_query = mysqli_query($con, $select_query);

echo "  <a class='nav-link text-center' href='#'>Page 2</a>";
// Display the dynamic table
echo "<table border='1'>";
echo "<thead><tr>";
echo "<th>विवरण
            </th>";
            echo "<th>जनपद के भार पर
            </th>";
            echo "<th>लेनदेन में
            </th>";
            echo "<th>आरमरी में
            </th>";
            echo "<th>आरमरी खोखा
            </th>";
            echo "<th>मैगजीन में कारतूस सर्विस 
            </th>";
            echo "<th>मैगजीन में कारतूस ड्रैक्टिस
            </th>";
            echo "<th> मैगजीन में खोखा 
            </th>";
            echo "<th> थाना जात पर
            </th>";
            echo "<th>स्थाई गार्ड में
            </th>";
            echo "<th>अस्थाई गार्ड में
            </th>";
            echo "<th>मुकदमाती पुराना
            </th>";
            echo "<th>गुम पुराना
            </th>";
            echo "<th>कैश, ड्रोपर्टी से सम्बन्धित पुराना
            </th>";
echo "</tr></thead><tbody>";

while ($row = mysqli_fetch_assoc($result_query)) {
    // Access the column values
    $item = $row['item'];
    $total = $row['total'];
    $A = $row['A'];
    $B = $row['B'];
    $C = $row['C'];
    $D = $row['D'];
    $E = $row['E'];
    $F = $row['F'];
    $G = $row['G'];
    $H = $row['H'];
    $I = $row['I'];
    $J = $row['J'];
    $K = $row['K'];
    $L = $row['L'];
                        

// Display table rows for each item in the armory
echo "<tr>";
echo "<td>" . $item . "</td>";
echo "<td>" . $total . "</td>";
echo "<td>" . $A . "</td>";
echo "<td>" . $B . "</td>";
echo "<td>" . $C . "</td>";
echo "<td>" . $D . "</td>";
echo "<td>" . $E . "</td>";
echo "<td>" . $F . "</td>";
echo "<td>" . $G . "</td>";
echo "<td>" . $H . "</td>";
echo "<td>" . $I . "</td>";
echo "<td>" . $J . "</td>";
echo "<td>" . $K . "</td>";
echo "<td>" . $L . "</td>";
echo "</tr>";
}

echo "</tbody></table>";




echo "<br><br>";




}


function show_transactions(){
    global $con;
    $select_query = "SELECT * FROM `transactions` ";
$result_query = mysqli_query($con, $select_query);


// Display the dynamic table

echo "<h1 class='text-center p-5'>transactions for page 1</h1>";

echo "<table border='1'>";
echo "<thead><tr>";
echo "<th>tran_id</th>";
echo "<th>item</th>";
echo "<th>quantity</th>";
echo "<th>source</th>";
echo "<th>destination</th>";
echo "<th>date</th>";
echo "<th>time</th>";
echo "<th>reason</th>";
echo "<th>who</th>";
echo "</tr></thead><tbody>";

while ($row = mysqli_fetch_assoc($result_query)) {
    // Access the column values
    $tran_id = $row['tran_id'];
    $item = $row['item'];
    $quantity = $row['quantity'];
    $source = $row['source'];
    $destination = $row['destination'];
    $date = $row['date'];
    $time = $row['time'];
    $reason = $row['reason'];
    $who = $row['who'];

// Display table rows for each item in the armory
echo "<tr>";
echo "<td>" . $tran_id . "</td>";
echo "<td>" . $item . "</td>";
echo "<td>" . $quantity . "</td>";
echo "<td>" . $source . "</td>";
echo "<td>" . $destination . "</td>";
echo "<td>" . $date . "</td>";
echo "<td>" . $time . "</td>";
echo "<td>" . $reason . "</td>";
echo "<td>" . $who . "</td>";
echo "</tr>";
}

echo "</tbody></table>";

echo "<br><br>";
}


function show_transactions2(){
    global $con;
    $select_query = "SELECT * FROM `transactions2` ";
$result_query = mysqli_query($con, $select_query);


// Display the dynamic table

echo "<h1 class='text-center p-5'>transactions for page 1</h1>";

echo "<table border='1'>";
echo "<thead><tr>";
echo "<th>tran_id</th>";
echo "<th>item</th>";
echo "<th>quantity</th>";
echo "<th>source</th>";
echo "<th>destination</th>";
echo "<th>date</th>";
echo "<th>time</th>";
echo "<th>reason</th>";
echo "<th>who</th>";
echo "</tr></thead><tbody>";

while ($row = mysqli_fetch_assoc($result_query)) {
    // Access the column values
    $tran_id = $row['tran_id'];
    $item = $row['item'];
    $quantity = $row['quantity'];
    $source = $row['source'];
    $destination = $row['destination'];
    $date = $row['date'];
    $time = $row['time'];
    $reason = $row['reason'];
    $who = $row['who'];

// Display table rows for each item in the armory
echo "<tr>";
echo "<td>" . $tran_id . "</td>";
echo "<td>" . $item . "</td>";
echo "<td>" . $quantity . "</td>";
echo "<td>" . $source . "</td>";
echo "<td>" . $destination . "</td>";
echo "<td>" . $date . "</td>";
echo "<td>" . $time . "</td>";
echo "<td>" . $reason . "</td>";
echo "<td>" . $who . "</td>";
echo "</tr>";
}

echo "</tbody></table>";

echo "<br><br>";
}






