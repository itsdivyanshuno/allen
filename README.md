# 📚 Allen Study Material Dashboard

A simple PHP-based web dashboard to upload and view categorized PDF study materials like Foundation, Exercise, Race, and TIM files — organized by subject (Physics, Chemistry, Biology, etc.).

---

## 🚀 Features

- 📁 Upload PDF files to different categories and subjects
- 📋 View uploaded files based on filters
- 💡 Clean Bootstrap UI for responsiveness
- ⚙ AJAX-based file upload with jQuery
- 🧾 Organized folder structure and modular PHP code

---

## 🖼️ Screenshots

![Upload Page](https://via.placeholder.com/600x300?text=Upload+Page)
![View Table](https://via.placeholder.com/600x300?text=Table+View)

---

## 🧑‍💻 Technologies Used

- HTML5 / CSS3 / Bootstrap 5
- JavaScript / jQuery 3.6
- PHP 7+
- MySQL
- AJAX for async upload

---

## 🗂 Folder Structure

allen/
├── css/
├── js/
├── mysql/
├── uploaded/
├── upload.php
├── home.php
├── table_view.php
├── load.php

---

## ⚙ Setup Instructions

1. Clone or download this repo.
2. Import the database from `mysql/table_sql.txt` and optionally run `dummy_data_sql.txt`.
3. Make sure the `uploaded/` directory is writable.
4. Run XAMPP or WAMP, and place the folder in your `htdocs/`.
5. Open `http://localhost/allen/home.php` in your browser.

---

## 🛡 Security Recommendations

- Sanitize all input and file uploads in `upload.php`.
- Restrict file types to PDF only.
- Use prepared statements in database queries.
- Consider adding login/authentication for uploading files.

---

## 🧠 Future Improvements

- PDF preview using PDF.js
- Search and filter functionality
- Admin login system
- File size and type restrictions
- Download tracking

---

## 🙌 Author

Made with ❤️ by **Divyansh Shukla**

---
