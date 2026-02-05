<?php
$host = "127.0.0.1";   // ใช้แบบนี้ชัวร์กว่า localhost
$user = "root";        // หรือ user ที่คุณสร้าง
$pwd  = "Natcha12345";
$db   = "4145db";

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die("❌ เชื่อมต่อฐานข้อมูลไม่ได้ : " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
?>
