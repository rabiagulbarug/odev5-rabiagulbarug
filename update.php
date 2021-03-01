<?php

require  "database.php";

$sql = "UPDATE products SET name=?, price=?, color=?, description=?, category=? WHERE uniqid=?";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Güncelle</title>
    <script src=""></script>
   </head>
<body style="width:200px ;height:200px" background="background.jpg" >
<h2>Güncelleme</h2>
<h6>Guncelleme yaparken ıd kullanılmaz</h2>
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
</form>
<input type="submit" name="submit" class="btn btn-success btn-lg btn-block">
</body>
</html>

<?php

$update=$pdo->prepare("UPDATE products SET name=:name , price=:price, description=:description, color=:color, category=:category, WHERE uniqid=id ");
        $update->execute([
            'product'=>$product,
            'price'=>$price,
            'description'=>$description,
            'color'=>$color,
            'category'=>$category,
            'id'=>$id,
        ]);
        header("Location:index.php");