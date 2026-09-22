<?php
$host = "127.0.0.1";
$user = "root";
$pass = "root";
$db = "lms_db";

// إنشاء الاتصال
$conn = new mysqli($host, $user, $pass, $db);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

// ضبط الترميز لدعم اللغة العربية
$conn->set_charset("utf8mb4");
?>
