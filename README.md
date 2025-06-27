![Repo Size](https://img.shields.io/github/repo-size/itsdivyanshuno/allen)
![Top Language](https://img.shields.io/github/languages/top/itsdivyanshuno/allen)
![Last Commit](https://img.shields.io/github/last-commit/itsdivyanshuno/allen)

# 📚 Allen Study Material Dashboard

A clean and simple PHP-based web dashboard to upload and view categorized PDF study materials like Foundation, Exercise, Race, and TIM files — organized by subject (Physics, Chemistry, Biology, etc.).

---

## 🚀 Features

- 📁 Upload PDF files to different categories and subjects
- 📋 View uploaded files based on filters
- 💡 Responsive Bootstrap UI
- ⚙ AJAX-based file uploads with jQuery
- 🧾 Organized folder structure and modular code

---

## 🖼️ Screenshots

### 🏠 Homepage
![Homepage](https://raw.githubusercontent.com/itsdivyanshuno/allen/master/screenshorts/homePage.png)

### 🔐 Password Box
![Password Box](https://raw.githubusercontent.com/itsdivyanshuno/allen/master/screenshorts/password-box.png)

### 📋 Table View
![Table Content View](https://raw.githubusercontent.com/itsdivyanshuno/allen/master/screenshorts/table-content-view.png)

### ✅ Upload Success Message
![Upload Message](https://raw.githubusercontent.com/itsdivyanshuno/allen/master/screenshorts/uploaded-msg.png)

---

## 🧑‍💻 Technologies Used

- **Frontend**: HTML5, CSS3, Bootstrap 5, jQuery
- **Backend**: PHP 7+
- **Database**: MySQL
- **Other**: AJAX

---

## 🗂 Folder Structure

allen/
├── css/
├── js/
├── mysql/
├── screenshots/
├── uploaded/
├── home.php
├── upload.php
├── load.php
├── table_view.php

---

## ⚙ Setup Instructions

1. Clone or download this repo:
   ```bash
   git clone https://github.com/itsdivyanshuno/allen.git
Place the folder in your htdocs/ if using XAMPP.

Import the MySQL database using mysql/table_sql.txt.

Optionally load mysql/dummy_data_sql.txt for sample entries.

Start Apache & MySQL in XAMPP.

🛡 Security Suggestions
Sanitize file inputs in upload.php

Restrict uploads to .pdf only

Use SQL prepared statements to avoid injection

Add authentication to protect upload access

💡 Future Features (Ideas)
🔎 PDF preview using PDF.js

🔐 Admin login panel

🔍 Search/filter files by name/date

🗃 Download logs or counters

📅 Upload timestamps

🙌 Author
Made with ❤️ by Divyansh Shukla
GitHub: @itsdivyanshuno
