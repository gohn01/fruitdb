<?php 
    require "retrieve.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">

        <h1>Fruits Table</h1>
        <form action="create.php" method="POST">
            <label for="">Enter Fruit Name: </label>
            <input type="text" name="fruit_name" id="fruit_name" class="form-control" required>
            <label for="">Quantity: </label>
            <input type="number" name="quantity" id="quantity" class="form-control" required>
            <br>
       <div class="custom-select" style="width:220px;">
           <select name="unit_id" id="unit_id" >
               <option value="">Select Unit Of Measure</option>
               <option value="1">Pieces</option>
               <option value="2">Kilos</option>
               <option value="3">Grams</option>
               <option value="4">Packs</option>
           </select>
       </div>

            <input type="submit" name="submit" id="submit" value="Create" class="btn btn-primary my-3">
        </form>
    
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Quantity</th>
                    <th>Unit Of Measure</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($row = mysqli_fetch_array($result)) 
                {  ?> 
                    <tr>
                        <td><?php echo $row['fruit_id']?></td>
                        <td><?php echo $row['fruit_name']?></td>
                        <td><?php echo $row['quantity']?></td>
                        <td><?php echo $row['unit_of_measure_id']?></td>
                
                        <td class="d-flex gap-2">
                        <form action="update.php" method="POST">
                                <input type="submit" name="update" id="update" value="Update" class="btn btn-primary">
                                <input type="hidden" name="fruit_id" id="fruit_id" value="<?php echo $row['fruit_id']?>">
                            </form>
                  
                            <form action="delete.php" method="POST">
                                <input type="hidden" name="fruit_id" id="fruit_id" value="<?php echo $row['fruit_id']?>">
                                <input type="submit" name="delete" id="delete" value="Delete" onclick="return confirm('DELETE?')" class="btn btn-danger">
                            </form>            
                        </td>
                    
                    </tr>
               <?php };
            ?>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>