<?php
$users = require __DIR__ . '/../data/users.php';
$user_id = $_COOKIE['user_id'] ?? null;

if ($user_id && isset($users['by_id'][$user_id])) {
    header('Location: dashboard.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <form class="login-form" method="POST" action="process_login.php">
      <h2>Đăng nhập</h2>
      <?php if (!empty($_GET['error'])): ?>
        <div class="error"><?php echo htmlspecialchars($_GET['error']); ?></div>
      <?php endif; ?>
      <label for="username">Tên đăng nhập</label>
      <input type="text" id="username" name="username" required placeholder="admin">

      <label for="password">Mật khẩu</label>
      <input type="password" id="password" name="password" required placeholder="••••••••">

      <button type="submit">Đăng nhập</button>
    </form>
  </div>
</body>
</html>
