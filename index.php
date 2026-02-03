<?php
session_start();
include_once("connectdb.php");

$error = "";

if (isset($_POST['Submit'])) {

    $username = $_POST['auser'];
    $password = $_POST['apwd'];

    $sql = "SELECT * FROM admin WHERE a_username='$username' LIMIT 1";
    $rs  = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($rs)) {
        if (password_verify($password, $row['a_password'])) {

            session_regenerate_id(true);
            $_SESSION['aid']   = $row['a_id'];
            $_SESSION['aname'] = $row['a_name'];

            header("Location: index2.php");
            exit;
        }
    }
    $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
}
?>

<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>Login Admin</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg, #ffb6c1, #ffe4e1);
    height: 100vh;
}
.login-card{
    max-width: 420px;
    border-radius: 20px;
}
.btn-pink{
    background-color: #ff69b4;
    border: none;
}
.btn-pink:hover{
    background-color: #ff1493;
}
</style>
</head>

<body class="d-flex align-items-center justify-content-center">

<div class="card shadow-lg login-card">
    <div class="card-body p-4">
        <h3 class="text-center text-pink mb-3">💗 Admin Login</h3>
        <p class="text-center text-muted">เข้าสู่ระบบหลังบ้าน</p>

        <?php if ($error): ?>
            <div class="alert alert-danger text-center">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="auser" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="apwd" class="form-control" required>
            </div>

            <div class="d-grid">
                <button type="submit" name="Submit" class="btn btn-pink text-white">
                    เข้าสู่ระบบ
                </button>
            </div>
        </form>
    </div>
</div>

</body>
</html>
