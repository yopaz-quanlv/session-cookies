<?php
$user = $_GET['user'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Trang 3</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Trang 3</h2>
      <?php if ($user): ?>
        <p>Chào bạn <strong><?php echo htmlspecialchars($user); ?></strong>, nhưng URL của bạn không còn chứa thông tin user!</p>
      <?php else: ?>
        <p style="color: red;"><strong>Không thể nhận biết người dùng!</strong></p>
        <p>Bạn đã truy cập trang này mà không có thông tin đăng nhập.</p>
      <?php endif; ?>

      <div style="margin-top: 20px;">
        <a href="login.php"><button>Đăng nhập lại</button></a>
      </div>
      <div style="margin-top: 10px;">
        <a href="dashboard.php<?php echo $user ? '?user=' . urlencode($user) : ''; ?>"><button>Về Dashboard</button></a>
      </div>
    </div>
  </div>
</body>
</html>
