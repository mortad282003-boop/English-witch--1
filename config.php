<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'yamabiko.proxy.rlwy.net';
$user = 'root';
$pass = 'FJMtllwHMAvVsWblAUTcMHoLdvTlnQPk'; 
$db   = 'railway';
$port = '28401';

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "تم الاتصال بنجاح!";
} catch (PDOException $e) {
    echo "خطأ في الاتصال بقاعدة البيانات: " . $e->getMessage();
}
?>
