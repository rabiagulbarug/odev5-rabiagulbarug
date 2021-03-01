<?php
session_start();
require "database.php";

//$products = $pdo->query("SELECT * FROM products ", PDO::FETCH_OBJ);
$categories = $pdo->query("SELECT * FROM categories", PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src=""></script>
   </head>
<body style="width:200px ;height:200px" background="background.jpg" >

<form method="POST" action="function.php">
    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input  class="form-control" name="name" >
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input  class="form-control" name="price" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Color</label>
        <input  class="form-control" name="color" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Description</label>
        <input  class="form-control" name="description" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Categories</label>
        <select class="form-control"  name="category">
            <?php while($category = $categories->fetch()):?>
                <option value="<?=$category->id?>"><?=$category->name?></option> 
            <?php endwhile; ?>
        </select>

    </div>
    <br> 
    <button type="submit" style="color:blueviolet" >Kaydet</button>
</form>
</body>
</html>