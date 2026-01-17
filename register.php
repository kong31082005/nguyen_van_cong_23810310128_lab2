<?php
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO students (email, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    
    if ($stmt->execute([$email, $hashed_password])) {
        echo "<p style='color:green;'>Đăng ký thành công! <a href='login.php'>Đăng nhập ngay tại đây</a></p>";
    }
}
?>

<form method="POST">
    <h2>Đăng ký tài khoản</h2>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Mật khẩu" required><br><br>
    <button type="submit">Đăng ký</button>
    <hr>
    <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
</form>