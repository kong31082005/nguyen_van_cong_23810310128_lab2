<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <h1>Chào mừng bạn quay trở lại!</h1>
    <p>Đây là nội dung bảo mật chỉ dành cho thành viên.</p>
</body>
</html>