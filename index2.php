<?php
session_start();
if (!isset($_SESSION['aname'])) {
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>Dashboard | Admin</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background-color: #fff0f5;
}
.sidebar{
    min-height: 100vh;
    background: linear-gradient(180deg, #ff69b4, #ffb6c1);
}
.sidebar a{
    color: #fff;
    text-decoration: none;
}
.sidebar a:hover{
    background: rgba(255,255,255,0.25);
    border-radius: 8px;
}
.card-pink{
    border-left: 5px solid #ff69b4;
}
</style>
</head>

<body>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 sidebar p-3">
            <h4 class="text-white text-center mb-4">💗 Admin Panel</h4>
            <ul class="nav flex-column gap-2">
                <li class="nav-item">
                    <a class="nav-link text-white" href="index2.php">🏠 หน้าหลักแอดมิน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="products.php">📦 จัดการสินค้า</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="orders.php">🧾 จัดการออเดอร์</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="customers.php">👥 จัดการลูกค้า</a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link text-white fw-bold" href="logout.php">🚪 ออกจากระบบ</a>
                </li>
            </ul>
        </div>

        <!-- Content -->
        <div class="col-md-9 col-lg-10 p-4">
            <h2 class="mb-1">Dashboard</h2>
            <p class="text-muted">
                ยินดีต้อนรับ, <strong><?php echo $_SESSION['aname']; ?></strong>
            </p>

            <div class="row g-3 mt-3">
                <div class="col-md-4">
                    <div class="card shadow card-pink">
                        <div class="card-body">
                            <h5>📦 สินค้า</h5>
                            <p class="text-muted">จัดการสินค้าในระบบ</p>
                            <a href="products.php" class="btn btn-sm btn-outline-danger">ไปที่สินค้า</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow card-pink">
                        <div class="card-body">
                            <h5>🧾 ออเดอร์</h5>
                            <p class="text-muted">ตรวจสอบคำสั่งซื้อ</p>
                            <a href="orders.php" class="btn btn-sm btn-outline-danger">ไปที่ออเดอร์</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow card-pink">
                        <div class="card-body">
                            <h5>👥 ลูกค้า</h5>
                            <p class="text-muted">ข้อมูลลูกค้า</p>
                            <a href="customers.php" class="btn btn-sm btn-outline-danger">ไปที่ลูกค้า</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>
