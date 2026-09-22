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

    // كود لإنشاء الجدول تلقائياً لو ما موجود عشان نمنع ظهور الخطأ
    $conn->exec("CREATE TABLE IF NOT EXISTS payment_requests (
        id INT AUTO_INCREMENT PRIMARY KEY,
        user_id INT DEFAULT NULL,
        amount DECIMAL(10,2) DEFAULT NULL,
        status VARCHAR(50) DEFAULT 'pending',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

} catch (PDOException $e) {
    echo "خطأ في الاتصال بقاعدة البيانات: " . $e->getMessage();
}
?>
