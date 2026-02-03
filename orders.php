<?php
include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>หน้าหลักแอดมิน - Dashboard</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

            <h1 class="mb-3">หน้าหลักแอดมิน - Dashboard</h1>

            <p class="fs-5">
                ยินดีต้อนรับ, 
                <strong class="text-primary">
                    <?php echo $_SESSION['aname']; ?>
                </strong>
            </p>

            <hr>

            <div class="list-group">
                <a href="products.php" class="list-group-item list-group-item-action">
                    📦 จัดการสินค้า
                </a>
                <a href="orders.php" class="list-group-item list-group-item-action">
                    🧾 จัดการออเดอร์
                </a>
                <a href="customers.php" class="list-group-item list-group-item-action">
                    👥 จัดการลูกค้า
                </a>
                <a href="logout.php" class="list-group-item list-group-item-action text-danger">
                    🚪 ออกจากระบบ
                </a>
            </div>

        </div>
    </div>
</div>

</body>
</html>
