<?php
include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>Dashboard | Admin</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <span class="navbar-brand">Admin Dashboard</span>
    <div class="d-flex text-white">
      ยินดีต้อนรับ, <?php echo $_SESSION['aname']; ?>
    </div>
  </div>
</nav>

<div class="container mt-4">

  <div class="row g-4">

    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title">📦 สินค้า</h5>
          <p class="card-text">จัดการสินค้าในระบบ</p>
          <a href="products.php" class="btn btn-primary">จัดการสินค้า</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card shadow-sm">
        <div class="card-body text-center">
          <h5 class="car
