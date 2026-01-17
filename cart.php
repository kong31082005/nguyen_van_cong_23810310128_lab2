<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['cart'])) { $_SESSION['cart'] = []; }

if (isset($_GET['add'])) {
    $_SESSION['cart'][] = $_GET['add'];
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giỏ hàng</title>
</head>
<body>
    <?php include 'menu.php'; ?>

    <h2>Sản phẩm hiện có</h2>
    <a href="cart.php?add=Laptop">Thêm Laptop</a> | 
    <a href="cart.php?add=Iphone">Thêm Iphone</a>

    <h3>Giỏ hàng của bạn (<?php echo count($_SESSION['cart']); ?>)</h3>
    <ul>
        <?php foreach ($_SESSION['cart'] as $item): ?>
            <li><?php echo htmlspecialchars($item); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>