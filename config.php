<?php
// جلب بيانات الاتصال من متغيرات البيئة في Railway
$host = getenv('MYSQLHOST') ?: 'mysql.railway.internal';
$user = getenv('MYSQLUSER') ?: 'root';
$pass = getenv('MYSQLPASSWORD') ?: 'CoVSqEjqNkjsPSbVrqkVqVgdWdPsgzab';
$db   = getenv('MYSQLDATABASE') ?: 'railway';
$port = getenv('MYSQLPORT') ?: '3306';

// الاتصال بقاعدة البيانات عبر MySQLi
$conn = new mysqli($host, $user, $pass, $db, $port);

// التحقق من صحة الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// ضبط الترميز ليدعم اللغة العربية بشكل كامل
$conn->set_charset("utf8mb4");
?>
