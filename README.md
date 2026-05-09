# 📰 News Website Project (Dự án Web Tin Tức)

Đây là một ứng dụng web tin tức đầy đủ tính năng, cho phép người dùng đọc tin tức, tìm kiếm, xem tin theo danh mục và quản trị viên có thể quản lý bài viết.

## 🚀 Tính năng chính

### Người dùng (Frontend)
- **Trang chủ:** Hiển thị danh sách các bài viết mới nhất và nổi bật.
- **Danh mục:** Lọc tin tức theo các chủ đề (Thế giới, Công nghệ, Đời sống, v.v.).
- **Chi tiết bài viết:** Đọc nội dung chi tiết của tin tức.
- **Tìm kiếm:** Tìm kiếm bài viết theo tiêu đề hoặc nội dung (Sử dụng toán tử `LIKE` trong SQL).
- **Tin liên quan:** Gợi ý các bài viết cùng danh mục ở cuối mỗi trang chi tiết.

## 🛠 Công nghệ sử dụng

- **Frontend:** HTML5, CSS3, JavaScript, Bootstrap 5.
- **Backend:** PHP (Sử dụng MySQLi).
- **Database:** MySQL.
- **Kiến trúc:** Mô hình MVC (Model-View-Controller) cơ bản.

## 📋 Cấu trúc Database

Dự án bao gồm các bảng chính:
- `categories`: Quản lý danh mục (id, name, slug, parent_id).
- `users`: Quản lý tài khoản admin (id, username, password, role).
- `posts`: Quản lý bài viết (id, title, content, image, category_id, created_at...).

## ⚙️ Hướng dẫn cài đặt

Để chạy dự án này trên môi trường local (XAMPP/WAMP), hãy làm theo các bước sau:

1. **Clone dự án:**
   ```bash
   git clone [https://github.com/username/ten-du-an.git](https://github.com/phuongthao2145/news-demo.git)](https://github.com/phuongthao2145/news-demo.git)
