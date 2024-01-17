# Web CoblosBerita

Web BimaBola adalah aplikasi admin untuk mengelola dan menampilkan berita Bola terkait Liga Indonesia dan Tim Nasional. Dikembangkan dengan PHP NATIVE, menggunakan teknologi PHP 7.4.27, Bootstrap 4.6, Bootstrap 5, dan MySQLi.

## Instalasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan proyek ini:

### Persyaratan

- PHP 7.4.27 atau versi yang lebih tinggi
- MySQL/MariaDB
- Web server (contoh: Apache, Nginx)

### Langkah-langkah

1. Clone repositori ini ke dalam direktori web server Anda:

    ```bash
    git clone https://github.com/Creath444/WEB-BIMABOLA.git
    ```

2. Buat database baru di MySQL/MariaDB.

3. Salin berkas `config-sample.php` menjadi `config.php` dan sesuaikan konfigurasi database:

    ```php
    <?php
    $DB_HOST = 'localhost';
    $DB_USER = 'nama_pengguna';
    $DB_PASS = 'kata_sandi';
    $DB_NAME = 'nama_database';
    ```

4. Impor skema database dari berkas `web-bimabola.sql` ke dalam database yang baru dibuat.

5. Akses aplikasi melalui web browser:

    ```
    http://localhost/WEB-BIMABOLA/
    ```

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).
