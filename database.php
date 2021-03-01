<?php

$host = "localhost";
$user = "root";
$pass = "mysql";
$dbName = "flower";

try {
    $pdo = new PDO("mysql:host=".$host.";dbname=".$dbName, $user, $pass);
    $encryptedPassword = password_hash('deneme', PASSWORD_ARGON2I);

} catch (PDOException $e) {
    echo "Bağlantı Hatası!";
    exit;
}
