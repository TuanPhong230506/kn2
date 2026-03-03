<!DOCTYPE html>
<html lang="vi">
<head>
 <meta charset="UTF-8">
 <title>Cửa hàng trực tuyến</title>
 <link rel="stylesheet" type="text/css" href="css/BT6.css"  />
</head>
<body>
 <!-- Menu điều hướng -->
 <nav>
 <a href="register.php">Đăng ký</a> |
 <a href="login.php">Đăng nhập</a> |
 <a href="index.php">Sản phẩm</a> |
 <a href="admin.php">Quản trị</a>
 </nav>
 <hr>
 <h2 style="text-align: center;">SẢN PHẨM NỔI BẬT</h2>
 <?php
 // 1. TẠO DỮ LIỆU SẢN PHẨM (Mảng đa chiều)
 // Giả lập dữ liệu từ Database
 // Lưu ý: Link ảnh dùng ảnh placeholder online để demo
 $products = [
 [
 'name' => 'iPhone 15 Pro Max',
 'price' => 29990000,
 'img' => 'image/15prm.jpg'
 ],
 [
 'name' => 'Samsung Galaxy S24',
 'price' => 25000000,
 'img' => 'image/S24.jpg'
 ],
 [
 'name' => 'Xiaomi 14 Ultra',
 'price' => 19000000,
 'img' => 'image/Xiaomi.jpg'
 ],
 [
 'name' => 'MacBook Air M3',
 'price' => 27500000,
 'img' => 'image/Macbook.jpg'
 ],
 [
 'name' => 'Sony PlayStation 5',
 'price' => 12500000,
 'img' => 'image/PS5.jpg'
 ],
 ];
 ?>
 <!-- 2. HIỂN THỊ DẠNG LƯỚI (GRID) -->
 <div class="container">
 <?php foreach ($products as $p): ?>
 <div class="card">
 <!-- Hiển thị ảnh -->
 <img src="<?php echo $p['img']; ?>" alt="<?php echo
$p['name']; ?>">

 <!-- Hiển thị tên -->
 <h3><?php echo $p['name']; ?></h3>

 <!-- Hiển thị giá (Format tiền tệ) -->
 <div class="price">
 <?php echo number_format($p['price'], 0, ',', '.'); ?> đ
 </div>

 <!-- Nút mua -->
 <button class="btn-buy" onclick="alert('Đã thêm <?php echo
$p['name']; ?> vào giỏ!')">
 Đặt Mua
 </button>
 </div>
 <?php endforeach; ?>
 </div>
</body>
</html>