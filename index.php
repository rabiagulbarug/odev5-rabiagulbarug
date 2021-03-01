<?php
require "database.php";

$products = $pdo->query("SELECT * FROM products", PDO::FETCH_OBJ);

$categories = $pdo->query("SELECT * FROM categories", PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
<head>
    <title>index</title>
</head>
<body>
    <div style="background:cadetblue" >
        <ul >
            <li class="item ">
                <a class="link" href="#">Anasayfa</a>
            </li>
            <li class="item">
                <a class="link" href="category.php">Kategoriler</a>
            </li>
            <li class="item">
                <a class="link" href="ImportView.php">Ice Aktar</a>
            </li>
            <li class="item"><a href="export.php">Dışarı Aktar</a></li>
        </ul>
    </div>
<div style="background-color:khaki">
    <div class="col">
        <div class="row">
            <h1 style="color: brown;">ÜRÜNLER</h1>
            <a href="products.php" class="btn btn-success" style="margin-left: 50px;height: 40px"> Yeni Ürün Ekle</a>
            <table border="1" class="table">
                <thead>
                <tr>
                    <th scope="cln">ID</th>
                    <th scope="cln">Name</th>
                    <th scope="cln">Price</th>
                    <th scope="cln">Color</th>
                    <th scope="cln">Description</th>
                    <th scope="cln">Category</th>
                    <th scope="cln" colspan="2" > Operation</th>
                </tr>
                </thead>
                <tbody>
                <?php

                while($product = $products->fetch()):
     
                    ?>
                <tr>
                    <th scope="row"><?= $product->uniqid; ?></th>
                    <td><?= $product->name; ?></td>
                    <td><?= $product->price; ?></td>
                    <td><?= $product->color; ?></td>
                    <td><?= $product->description; ?></td>
                    <td><?= $product->category; ?></td>

                    <td>
                        <a href='delete.php?uniqid=2' class="btn btn-button btn-danger">Sil</a>
                    </td>
                    <td>
                        <a href='update.php?uniqid=2' class="btn btn-button btn-warning">Güncelle</a>
                    </td>  
                 </tr>
                <?php endwhile; ?>



                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>