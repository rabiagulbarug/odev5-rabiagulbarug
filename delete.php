<?php
include "database.php";

$id=$_GET['uniqid'];

$dlt=$pdo->prepare("DELETE FROM products WHERE uniqid=?");
$dlt->execute([$id]);

header("Location:index.php");