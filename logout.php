<?php
session_start();
session_unset();
session_destroy();
?>
<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>Logout</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<meta http-equiv="refresh" content="2;url=login.php">

<style>
body{
    background: linear-gradient(135deg, #ffb6c1, #ffe4e1);
    height: 100vh;
}
</style>
</head>

<body class="d-flex justify-content-center align-items-center">

<div class="card shadow-lg text-center p-4">
    <h4 class="text-danger mb-3">👋 ออกจากระบบเรียบร้อย</h4>
    <p class="text-muted">กำลังพาคุณกลับไปหน้าเข้าสู่ระบบ...</p>
    <div class="spinner-border text-danger" role="status"></div>
</div>

</body>
</html>
