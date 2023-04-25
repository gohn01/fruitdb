<?php 
    require "connection.php";
   if (isset($_POST['submit'])){
        $fruit_name = $_POST['fruit_name'];
        $quantity = $_POST['quantity'];
        $unit_id = $_POST['unit_id'];

        $sql = "INSERT INTO fruits set fruit_name = '$fruit_name', quantity = '$quantity', unit_of_measure_id = '$unit_id'";
        $result = mysqli_query($connection,$sql) or trigger_error("Failed SQL". mysqli_error($connection),E_USER_ERROR);
        echo "<script>alert('Successfully Created')</script>";
        echo "<script>window.location.href = 'register.php'</script>";
   }else { 
        echo "<script>window.location.href = 'register.php'</script>";
    }
?>