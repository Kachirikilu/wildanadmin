WildanAdmin Setup Guide

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek WildanAdmin di mesin lokal Anda.

Prerequisites
-------------
1. *XAMPP*: Unduh dari https://www.apachefriends.org/index.html
2. *Composer*: Unduh dari https://getcomposer.org/download/

Setup Steps
------------

1. Klon Repositori
```bash
git clone https://github.com/Kachirikilu/wildanadmin.git

2. Masuk ke Direktori Proyek
```bash
cd wildanadmin

3. Instal Dependensi
```bash
composer install

4. Konfigurasi Database
- Buat database "wildan_ci4" di MySQL.
- Atur konfigurasi database di file .env.

5. Jalankan Migrasi
```bash
php spark migrate

6. Jalankan Server Pengembangan
```bash
php spark serve

7. Akses Aplikasi
- Buka browser dan akses: http://localhost:8080