WildanAdmin Setup Guide

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek WildanAdmin di mesin lokal Anda.

Prerequisites
-------------
1. *XAMPP*: Unduh dari https://www.apachefriends.org/index.html
2. *Composer*: Unduh dari https://getcomposer.org/download/
3. *Git Bash*: Unduh dari
https://git-scm.com/downloads

Setup Steps
------------

1. Masuk ke Directory XAMPP
```bash
C:\xampp\htdocs
```
<br>

2. Klon Repositori dengan Git Bash
```bash
git clone https://github.com/Kachirikilu/wildanadmin.git
```
<br>

3. Masuk ke Direktori Proyek
```bash
cd wildanadmin
```
<br>

4. Aktifkan Extension di XAMPP
   - Buka file "php.ini" di config Apache, atau melalui directory "C:\xampp\php\php.ini".
   - Lalu cari extension berikut:
```bash
;extension=intl
;extension=zip
```
   - Lalu hapus tanpa titik-koma (;) untuk mengaktifkan extension, menjadi:
```bash
extension=intl
extension=zip
```

<br>

5. Instal Dependensi
```bash
composer install
```
<br>

6. Konfigurasi Database
   - Buat database "wildan_ci4" di MySQL.
   - Atur konfigurasi database di file .env.

<br>

7. Jalankan Migrasi
```bash
php spark migrate
```
<br>

8. Jalankan Server Pengembangan
```bash
php spark serve
```
<br>

9. Akses Aplikasi di Browser
```bash
http://localhost:8080
```

<br>

10. Akses Penuh Website
    - Akses halaman Home Page.
    - Pergi ke halaman Login Form, dan klik "New account."
    - Pada halaman Registration Form, klik tombol "+ More" untuk menampilkan lebih banyak input.
    - Pada input "Admin ID" masukkan:
```bash
Owner123
```
Atau
```bash
Admin123
```

<br><br>

# CodeIgniter 4 Framework

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds the distributable version of the framework,
including the user guide. It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).


## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Contributing

We welcome contributions from the community.

Please read the [*Contributing to CodeIgniter*](https://github.com/codeigniter4/CodeIgniter4/blob/develop/CONTRIBUTING.md) section in the development repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
