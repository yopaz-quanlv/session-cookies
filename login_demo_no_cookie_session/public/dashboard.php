<?php
$user = $_GET['user'] ?? null;

if (!$user) {
    header("Location: login.php?error=" . urlencode("Vui lòng đăng nhập trước."));
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - <?php echo htmlspecialchars($user); ?></title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Xin chào, <?php echo htmlspecialchars($user); ?>!</h2>
      <p><em>Đây là trang dashboard.</em></p>

      <hr style="margin: 20px 0;">

      <h3>🧭 Các trang phụ (giữ trạng thái user bằng URL)</h3>
      <a href="page1.php?user=<?php echo urlencode($user); ?>"><button>Trang 1 (giữ user)</button></a>
      <div style="margin-top: 10px;">
        <a href="page2.php?user=<?php echo urlencode($user); ?>"><button>Trang 2 (giữ user)</button></a>
      </div>

      <h3 style="margin-top: 25px;">⚠️ Mất trạng thái khi không giữ URL</h3>
      <a href="page3.php"><button style="background-color: #e53e3e;">Trang 3 (mất user)</button></a>

      <div style="margin-top: 30px;">
        <a href="index.php"><button>Trang chủ</button></a>
        <a href="logout.php"><button style="margin-top: 10px;">Đăng xuất</button></a>
      </div>
    </div>
  </div>
</body>
</html>
