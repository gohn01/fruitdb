<?php 
    require "connection.php";
    // echo "Result: " . $_POST['email'];
    if(isset($_POST['delete'])){
        $fruit_id = $_POST['fruit_id'];
        $sql = "SELECT * FROM fruits WHERE fruit_id = '$fruit_id'";
        $result = mysqli_query($connection,$sql) or trigger_error("Failed SQL:" . mysqli_error($connection),E_USER_ERROR);
        $row = mysqli_fetch_array($result);
    }
    // var_dump( $row);
    if(isset($_POST['delete'])){
      
        $fruit_id = $_POST['fruit_id'];

        $sql = "DELETE FROM fruits WHERE fruit_id = '$fruit_id'";
        $result = mysqli_query($connection,$sql) or trigger_error("Failed SQL:" . mysqli_error($connection),E_USER_ERROR);
        echo "<script>
        alert('Deleted Successfully ');
        window.location.href = 'register.php';
        </script>";


    }
?>
