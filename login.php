<?php
session_start();
require 'db.php'; // file kết nối database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Tìm user trong DB
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // ✅ Đăng nhập thành công
        $_SESSION['user_id'] = $user['id'];

        // Ghi cookie nếu cần (VD ghi nhớ đăng nhập 1 tuần)
        if (!empty($_POST['remember'])) {
            setcookie('user_id', $user['id'], time() + (7 * 24 * 60 * 60), "/");
        }

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Sai tài khoản hoặc mật khẩu!";
    }
}
?>

<form method="post">
    <input name="username" placeholder="Tên đăng nhập" required />
    <input name="password" type="password" placeholder="Mật khẩu" required />
    <label><input type="checkbox" name="remember"> Ghi nhớ đăng nhập</label>
    <button type="submit">Đăng nhập</button>
</form>
<?php if (!empty($error)) echo "<p>$error</p>"; ?>
