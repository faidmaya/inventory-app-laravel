# 📦 Investory App  
Final Project Laravel – Sanbercode Batch 70

---

## 📌 Deskripsi Proyek
**Investory App** adalah aplikasi manajemen inventori berbasis web yang dibangun menggunakan **Laravel**.  
Aplikasi ini mendukung pengelolaan **produk, kategori, transaksi**, serta sistem **autentikasi dan role management** (Admin, Staff, User).

Proyek ini dibuat untuk memenuhi **Final Project Bootcamp Laravel Sanbercode Batch 70**.

---

## 🛠️ Teknologi yang Digunakan
- Laravel  
- PHP  
- MySQL  
- Blade Template  
- Bootstrap (Template: Seodash – Themewagon)  
- Laravel Authentication & Middleware  
- File Upload (Image Product)  

---

## 🔐 Autentikasi & Role
Aplikasi memiliki 3 role utama:

### 1️⃣ Admin
- Login, Register, Logout  
- Dashboard  
- CRUD Category  
- CRUD Product (dengan upload image)    
- Akses semua endpoint  

### 2️⃣ Staff
- Login & Logout  
- Dashboard  
- Melihat daftar product  
- Melihat detail product  
- **Tidak dapat** menambah, mengedit, atau menghapus product & category  

### 3️⃣ User
- Login & Logout  
- Edit Profile (Age & Biodata)  
- Melihat product  
- Melakukan transaction (in / out)  
- Melihat list transaction milik sendiri  

---

## 📂 Fitur Utama

### ✅ CRUD Product (30 Point)
- Menampilkan harga, stok, dan gambar product  
- Upload image product  
- Detail product  
- Edit & Delete product  
- Relasi dengan category  

### ✅ CRUD Category
- List category (id, nama, action: detail, edit, delete)  
- Relasi category dengan product  

### ✅ Authentication (10 Point)
- Login  
- Register  
- Logout  

### ✅ Middleware & Role Access (10 Point)
- Middleware Admin  
- Middleware Staff  
- Middleware User  

---

## 🔄 Transaction Feature (15 Point)
- Input transaction product **masuk (IN)** dan **keluar (OUT)**  
- Otomatis update stok product  
- Tabel transaction:
  - ID  
  - User  
  - Product  
  - Type (IN / OUT)  
  - Amount  
  - Notes  

---

## 👤 User Profile Feature
- Create & Update Profile  
- Field:
  - Age  
  - Biodata  
- Hanya tersedia untuk role **User**

---

## 🗂️ Relasi Database
- User ↔ Profile (One to One)  
- Category ↔ Product (One to Many)  
- Product ↔ Transaction (One to Many)  
- User ↔ Transaction (One to Many)  

Semua relasi diterapkan di masing-masing **Model Laravel** sesuai ERD.

---

## 🎨 Template UI
- Template diambil dari:  
  👉 https://themewagon.com/themes/seodash/
