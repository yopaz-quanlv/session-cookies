# PHP Login Demo: So sánh Cookie vs Session

## 🚀 Cách chạy từng demo

### 1. Demo **không dùng Cookie/Session**

```bash
php -S localhost:8000 - t login_demo_no_cookie_session/public
```
Truy cập: http://localhost:8000

Dữ liệu login không được lưu sau khi chuyển trang. Mỗi trang phải truyền thủ công thông tin người dùng.

### 2. Demo có dùng Cookie

```bash
php -S localhost:8000 -t login_demo_with_cookie_session/public
```
Truy cập: http://localhost:8000


### 💡 Mục tiêu
So sánh ứng dụng thực tế của Cookie và Session

Giải thích cách duy trì trạng thái đăng nhập

Làm rõ vai trò của từng phương pháp trong lập trình web bằng PHP

### 🧠 Ghi chú
Không cần cài đặt web server phức tạp (dùng php -S là đủ)

### 📜 Tài liệu kèm theo
File trình chiếu LaTeX: session_cookies_presentation.tex và bản PDF tương ứng