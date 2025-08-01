<?php
$user = $_GET['user'] ?? null;

if (!$user) {
    die("Bạn chưa đăng nhập. <a href='login.php'>Đăng nhập lại</a>");
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Trang 1</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Trang 1</h2>
      <p>Xin chào <strong><?php echo htmlspecialchars($user); ?></strong>, đây là nội dung trang 1.</p>
      <a href="dashboard.php?user=<?php echo urlencode($user); ?>"><button>Quay về Dashboard</button></a>
    </div>
  </div>
</body>
</html>
