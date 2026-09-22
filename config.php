<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = 'mysql.railway.internal';
$user = 'root';
$pass = 'CoVSqEjqNkjsPSbVrqkVqVgdWdPsgzab';
$db   = 'railway';
$port = 3306;

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>
