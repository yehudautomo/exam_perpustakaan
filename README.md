<h1 align="center">Perpustakaan</h1>

## Author
YEHUDA DANI UTOMO \
2402010086

## Fitur 

- Autentikasi Admin, Petugas dan Peminjam
- CRUD Kategori
- CRUD Buku
- CRUD Penerbit
- CRUD Rak
- Melakukan peminjaman buku
- Menampilkan chart
- Mengimplementasikan livewire
- Menggunakan admin LTE
- Menggunakan fakerphp
- Dan lain-lain

## User

**Admin**

- email: admin@gmail.com
- Password: 123123123

**Petuags**

- email: petugas@gmail.com
- Password: 123123123

**Peminjam**

- email: peminjam@gmail.com
- Password: 123123123

## Install

**Clone Repository**

```bash
git clone https://github.com/yehudautomo/exam_perpustakaan
```

## Install composer

```bash
composer install
```

## Copy .Env

```bash
copy .env.example to .env
```

## Open Web Server


## Buat database di localhost 

```bash
nama database : perpustakaan
```

## Setting database di .env

```bash
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=perpustakaan
DB_USERNAME=
DB_PASSWORD=
```

## Generate key

```bash
php artisan key:generate
```

## Jalankan migrate dan seeder

```bash
php artisan migrate --seed
```

## Buat Storage Link

```bash
php artisan storage:link
```

## Buat Folder buku di public dan copy asetnya


## Jalankan Serve

```bash
php artisan serve
```
