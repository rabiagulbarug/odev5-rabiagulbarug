<?php

include "database.php";

if ( isset($_POST['name']) && isset($_POST['price']) && isset($_POST['color']) && isset($_POST['description']) && isset($_POST['category']) ) {
    $sql = "INSERT INTO products (uniqid, name , price, color, description, category) VALUES(:id, :name, :price, :color , :description , :category)";
    $stmt=$pdo->prepare($sql);
    $id = uniqid();


    $sql = "INSERT INTO products (uniqid, name , price, color, description, category) VALUES(?,?,?,?,?)";
    $pdo -> prepare($sql)->execute([$id, $_POST['name'], $_POST['price'],$_POST['color'],$_POST['description'],$_POST['category']]);

    header("Location: index.php");
}
