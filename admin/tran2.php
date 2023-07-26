<h1 class="text-center p-5">Transaction page 2</h1>

<form action="" method="post">
    <!-- item -->
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
    <!-- ... (existing form fields) ... -->

    <!-- Source Column -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="source_column" class="form-label">कहाँ से</label>
        <select name="source_column" id="source_column" class="form-select" required>


<!-- लेनदेन में

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

कैश, ड्रोपर्टी से सम्बन्धित पुराना -->


            <option value="">कहाँ से</option>
            <option value="A">लेनदेन में</option>
            <option value="B">आरमरी में</option>
            <option value="C">आरमरी खोखा</option>
            <option value="D">मैगजीन में कारतूस सर्विस</option>
            <option value="E">मैगजीन में कारतूस ड्रैक्टिस</option>
            <option value="F">मैगजीन में खोखा</option>
            <option value="G">थाना जात पर</option>
            <option value="H">स्थाई गार्ड में</option>
            <option value="I">अस्थाई गार्ड में</option>
            <option value="J">मुकदमाती पुराना</option>
            <option value="K">गुम पुराना</option>
            <option value="L">कैश, ड्रोपर्टी से सम्बन्धित पुराना</option>

           
            <!-- Add more options based on your columns -->
        </select>
    </div>

    <!-- Destination Column -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="destination_column" class="form-label">कहाँ जाये</label>
        <select name="destination_column" id="destination_column" class="form-select" required>
            <option value="">कहाँ जाये</option>
            <option value="A">लेनदेन में</option>
            <option value="B">आरमरी में</option>
            <option value="C">आरमरी खोखा</option>
            <option value="D">मैगजीन में कारतूस सर्विस</option>
            <option value="E">मैगजीन में कारतूस ड्रैक्टिस</option>
            <option value="F">मैगजीन में खोखा</option>
            <option value="G">थाना जात पर</option>
            <option value="H">स्थाई गार्ड में</option>
            <option value="I">अस्थाई गार्ड में</option>
            <option value="J">मुकदमाती पुराना</option>
            <option value="K">गुम पुराना</option>
            <option value="L">कैश, ड्रोपर्टी से सम्बन्धित पुराना</option>

            <!-- Add more options based on your columns -->
        </select>
    </div>





    <!-- quantity -->
     <!-- quantity -->
     <div class="form-outline mb-4 w-50 m-auto">
        <label for="quantity" class="form-label">
मात्रा</label>
        <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Enter Quantity" required>
    </div>
    <!-- ... (existing form field) ... -->

    <!-- rest of the form fields ... -->
    <div class="form-outline mb-4 w-50 m-auto">
        <label for="reason" class="form-label">कारण</label>
        <input type="text" name="reason" id="reason" class="form-control" placeholder="Enter Reason" required>
    </div>

    <!-- Submit -->
    <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_data" class="btn btn-secondary m-2" style="border-radius: 50px" value="Transfer Items">
        <a href="index.php" class="btn btn-secondary m-2" style="border-radius: 50px">Return to Home</a>
    </div>


    
</form>


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



<?php
        if (isset($_POST['insert_data'])) {
            // Your database connection code (include('../includes/connect.php')) should be here...

            // ... (existing code to retrieve other form fields) ...

            // Source and Destination Columns
            $item = $_POST['item'];
            $before = $_POST['source_column'];
            $before1 = $_POST['source_column'];
            $after = $_POST['destination_column'];
            $after1 = $_POST['destination_column'];
            $reason = $_POST['reason'];
            $who = $_SESSION['pno'];

            // Check if source and destination columns are different
            if ($before === $after) {
                echo "<script>alert('Error: Source and destination columns cannot be the same. Please choose different columns.')</script>";
            } else {
                // Get the current date and time
                $currentDate = date('Y-m-d');
                $currentTime = date('H:i:s');
                

                // Fetch the current quantities of the source and destination columns
                $fetch_query = "SELECT $before, $after FROM `armoury2` WHERE item = '$item'";
                $result = mysqli_query($con, $fetch_query);
                $row = mysqli_fetch_assoc($result);
                $sourceQuantity = intval($row[$before]);
                $destinationQuantity = intval($row[$after]);

                // Check if there are enough items in the source column for the transaction
                $quantityToTransfer = intval($_POST['quantity']);
                if ($sourceQuantity >= $quantityToTransfer) {
                    // Perform the transaction
                    $sourceQuantity -= $quantityToTransfer;
                    $destinationQuantity += $quantityToTransfer;

                    // Update the database with the new quantities
                    $update_query = "UPDATE armoury2 SET $before = $sourceQuantity, $after = $destinationQuantity WHERE item = '$item'";
                    $result = mysqli_query($con, $update_query);

                    if ($result) {
                        echo "<script>alert('Items transferred successfully.')</script>";

                        // Transaction Code - Insert transaction details into the "transactions" table
                        $insert_query = "INSERT INTO `transactions2` (item, quantity, source, destination, date, time, reason, who) 
                                         VALUES ('$item', '$quantityToTransfer', '$before1', '$after1', '$currentDate', '$currentTime', '$reason', '$who')";
                        $result_transaction = mysqli_query($con, $insert_query);

                        if ($result_transaction) {
                            echo "<script>alert('Transaction details stored successfully in the transactions table.')</script>";
                        } else {
                            echo "<script>alert('Error: Failed to store transaction details in the transactions table.')</script>";
                        }
                    } else {
                        echo "<script>alert('Error: Failed to transfer items. Please try again.')</script>";
                    }
                } else {
                    echo "<script>alert('Error: Insufficient items in the source column.')</script>";
                }
            }
        }
        ?>


<?php

getproducts2();

?>
