<!DOCTYPE html>
<html lang="vi">
<head>
 <meta charset="UTF-8">
 <title>Trang Quản trị</title>
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
 <h2>DANH SÁCH THÀNH VIÊN</h2>
 <?php
 // 1. TẠO DỮ LIỆU GIẢ LẬP (Mảng đa chiều)
 // Trong thực tế, dữ liệu này sẽ được lấy từ Database (MySQL)
 $users = [
 ['id' => 1, 'name' => 'Nguyễn Văn A', 'email' =>
'nguyenvana@gmail.com', 'role' => 'Admin'],
 ['id' => 2, 'name' => 'Trần Thị B', 'email' => 'tranthib@gmail.com',
'role' => 'User'],
 ['id' => 3, 'name' => 'Lê Văn C', 'email' => 'levanc@yahoo.com',
'role' => 'User'],
 ['id' => 4, 'name' => 'Phạm Thị D', 'email' => 'phamthid@gmail.com',
'role' => 'Editor'],
 ['id' => 5, 'name' => 'Hoàng Văn E', 'email' =>
'hoangvane@gmail.com', 'role' => 'User'],
 ];
 ?>
 <!-- 2. HIỂN THỊ DẠNG BẢNG -->
 <table border="1" width="100%" cellpadding="10" cellspacing="0">
 <thead>
 <tr style="background-color: #f2f2f2; text-align: left;">
 <th>ID</th>
 <th>Họ và Tên</th>
 <th>Email</th>
 <th>Vai trò (Role)</th>
 </tr>
 </thead>
 <tbody>
 <?php
 // 3. DUYỆT MẢNG VÀ HIỂN THỊ
 foreach ($users as $u) {
 // Logic làm nổi bật: Nếu là Admin thì in đậm và tô màu đỏ
 $style_role = "";
 $name_display = $u['name'];
 if ($u['role'] == 'Admin') {
 $style_role = "color: red; font-weight: bold;";
 $name_display = "<b>" . $u['name'] . " (VIP)</b>";
 }
 ?>
 <tr>
 <td><?php echo $u['id']; ?></td>
<td><?php echo $name_display; ?></td>
 <td><?php echo $u['email']; ?></td>
 <td style="<?php echo $style_role; ?>">
 <?php echo $u['role']; ?>
 </td>
 </tr>
 <?php
 } // Kết thúc vòng lặp
 ?>
 </tbody>
 </table>
 <p>Tổng số thành viên: <b><?php echo count($users); ?></b></p>
</body>
</html>