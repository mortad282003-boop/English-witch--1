<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$port = getenv('DB_PORT');

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "تم الاتصال بنجاح!";
} catch (PDOException $e) {
    echo "خطأ في الاتصال بقاعدة البيانات: " . $e->getMessage();
}
?>
