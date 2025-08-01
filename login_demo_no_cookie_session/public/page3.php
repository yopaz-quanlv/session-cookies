<?php
$user_id = $_GET['user_id'] ?? null;
$users = require __DIR__ . '/../data/users.php';
$users_by_id = $users['by_id'];
$username = $user_id && isset($users_by_id[$user_id]) ? $users_by_id[$user_id] : null;
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
      <?php if ($username): ?>
        <p>Chào bạn <strong><?php echo htmlspecialchars($username); ?></strong>, nhưng URL không còn chứa thông tin hợp lệ!</p>
      <?php else: ?>
        <p style="color: red;"><strong>Không thể nhận biết người dùng!</strong></p>
        <p>Bạn đã truy cập trang này mà không có thông tin đăng nhập.</p>
      <?php endif; ?>

      <div style="margin-top: 20px;">
        <a href="login.php"><button>Đăng nhập lại</button></a>
      </div>
      <div style="margin-top: 10px;">
        <a href="dashboard.php<?php echo $user_id ? '?user_id=' . urlencode($user_id) : ''; ?>"><button>Về Dashboard</button></a>
      </div>
    </div>
  </div>
</body>
</html>
