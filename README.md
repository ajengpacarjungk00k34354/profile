##  Web Company Profile PDAM

Website company profil yang di develop untuk test case UJIKOM 

## Fitur Yang Tersedia

- Halaman Awal (Landing Page)
    -   Halaman Beranda
    -   About
    -   Services
    -   Blog
    -   Contact
- Authentication
    -   Login
- Halaman Admin
    -   Halaman Kelola Pesan
    -   Halaman Kelola Blog/Artikel
    -   Halaman Kelola Konten About
    -   Halaman Kelola Services
    -   Halaman Kelola Banner
    -   Halaman kelola Users
 
## Akun Default Untuk Pengujian

-   Admin
    -   Email : admin@pdam.com
    -   Password : 1234
 
## ERD & Relasi antar tabel
![profile uml](https://github.com/user-attachments/assets/9f79c93a-a8a8-4747-99cc-c6546adde4b0)


## UML Diagram Use Case
![use case](https://github.com/user-attachments/assets/1fb103cf-1d3e-49da-9ae6-940629351d17)


## Teknologi Yang Digunakan

-   <a href="https://laravel.com/">Laravel 11x</a>
-   <a href="https://getbootstrap.com/">Bootstrap v5.3.3</a>

## Persyaratan Untuk Melakukan Instalasi

-   PHP 8.1.0 & Web Server (Apache)
-   Database (MySQL)
-   Web Browser (Chrome, Safari, atau Edge)

## Instalasi 

1. Clone Repositori

```bash
git clone https://github.com/ajengpacarjungk00k34354/profile.git
composer install
cp .env.example .env
```

2. Konfigurasi Database pada file `.env`

```conf
APP_DEBUG=true
DB_DATABASE=database-anda
DB_USERNAME=nama-pengguna-anda
DB_PASSWORD=kata-sandi-anda
```

3. Melakukan Migrasi dan menyambungkan storage

```bash
php artisan key:generate
php artisan storage:link
php artisan migrate --seed
```

4. Mulai Situs Web

```bash
php artisan serve
```


<p><b>Website Company Profile PDAM ini dibuat oleh Ajeng Pratiwi</b></p>
