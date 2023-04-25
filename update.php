<?php
require "connection.php";

if (isset($_POST['update'])) {
    $fruit_id = $_POST['fruit_id'];
    $sql = "SELECT * FROM fruits left join unit_of_measure on fruits.unit_of_measure_id = unit_of_measure.unit_id 
        WHERE fruit_id='$fruit_id' ";
    $result = mysqli_query($connection, $sql) or trigger_error("Failed SQL" . mysqli_error($connection), E_USER_ERROR);
    $row = mysqli_fetch_assoc($result);
}
if (isset($_POST['updateBtn'])) {
    $fruit_id = $_POST['fruit_id'];
    $fruit_name = $_POST['fruit_name'];
    $quantity = $_POST['quantity'];
    $unit_id = $_POST['unit_id'];
    $sql = "UPDATE fruits set fruit_name = '$fruit_name', quantity = '$quantity', unit_of_measure_id ='$unit_id'
        WHERE fruit_id = '$fruit_id'";
    $result = mysqli_query($connection, $sql) or trigger_error("Failed SQL" . mysqli_error($connection), E_USER_ERROR);
    echo "<script>alert('Account successfully updated'); window.location.href='register.php'</script>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>Fruits Table</h1>
    <form action="update.php" method="POST">
        <input type="text" name="fruit_id" value="<?php echo $row['fruit_id']?>">
        <label for="">Enter Fruit Name: </label>
        <input type="text" name="fruit_name" id="fruit_name" value="<?php echo $row['fruit_name'] ?>" required>
        <label for="">Quantity: </label>
        <input type="number" name="quantity" id="quantity" value="<?php echo $row['quantity'] ?>" required>
        <select name="unit_id" id="unit_id" class="form-control">
            <option value="">Select Unit of measure</option>
            <option value="1" <?php echo $row['unit_id'] === 'Pieces' ? 'selected' : '' ?>>Pieces</option>
            <option value="2" <?php echo $row['unit_id'] === 'Kilos' ? 'selected' : '' ?>>Kilos</option>
            <option value="3" <?php echo $row['unit_id'] === 'Grams' ? 'selected' : '' ?>>Grams</option>
            <option value="4" <?php echo $row['unit_id'] === 'Packs' ? 'selected' : '' ?>>Packs</option>
        </select>
        <input type="submit" name="updateBtn" id="updateBtn" value="Update" class="btn btn-primary">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>