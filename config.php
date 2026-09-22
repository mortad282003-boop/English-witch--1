<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'mysql.railway.internal';
$user = 'root';
$pass = 'FJMtllwHMAvVsWblAUTcMHoLdvTlnQPk'; 
$db   = 'railway';
$port = '3306';

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "تم الاتصال بنجاح!";
} catch (PDOException $e) {
    echo "خطأ في الاتصال بقاعدة البيانات: " . $e->getMessage();
}
?>
