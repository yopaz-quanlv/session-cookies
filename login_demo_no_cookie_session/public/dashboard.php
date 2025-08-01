<?php
$user_id = $_GET['user_id'] ?? null;
$users = require __DIR__ . '/../data/users.php';
$users_by_id = $users['by_id'];

if (!$user_id || !isset($users_by_id[$user_id])) {
    header("Location: login.php?error=" . urlencode("Vui lòng đăng nhập lại."));
    exit;
}

$username = $users_by_id[$user_id];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard - <?php echo htmlspecialchars($username); ?></title>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
  <div class="container">
    <div class="login-form">
      <h2>Xin chào, <?php echo htmlspecialchars($username); ?>!</h2>
      <p><em>Đây là trang dashboard.</em></p>

      <hr style="margin: 20px 0;">

      <div style="display: flex; flex-direction: column; gap: 10px;">
        <a href="page1.php?user_id=<?php echo urlencode($user_id); ?>"><button style="background-color: orange;">Trang 1</button></a>
        <a href="page2.php?user_id=<?php echo urlencode($user_id); ?>"><button style="background-color: orange;">Trang 2</button></a>
        <a href="page3.php"><button style="background-color: orange;">Trang 3</button></a>
      </div>

      <div style="margin-top: 30px;">
        <a href="index.php"><button>Trang chủ</button></a>
        <a href="logout.php"><button style="margin-top: 10px;">Đăng xuất</button></a>
      </div>
    </div>
  </div>
</body>
</html>
