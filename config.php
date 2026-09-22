<?php
// إعدادات الاتصال بقاعدة البيانات (تدعم المحلي والسحابي أوتوماتيك)
$host = getenv('MYSQLHOST') ?: 'localhost';
$user = getenv('MYSQLUSER') ?: 'root';
$pass = getenv('MYSQLPASSWORD') ?: '';
$db   = getenv('MYSQLDATABASE') ?: 'english_witch_db';
$port = getenv('MYSQLPORT') ?: '3306';

// إنشاء الاتصال باستخدام MySQLi
$conn = new mysqli($host, $user, $pass, $db, $port);

// التحقق من سلامة الاتصال
if ($conn->connect_error) {
    die("<div style='font-family: Tahoma; text-align: center; margin-top: 50px; color: #e51b23;'><h3>❌ فشل الاتصال بقاعدة البيانات:</h3><p>" . $conn->connect_error . "</p></div>");
}

// ضبط الترميز لضمان دعم اللغة العربية بشكل كامل وبدون رموز
$conn->set_charset("utf8mb4");
?>
