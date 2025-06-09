# Web Pengelola Buku

Aplikasi **Pengelola-Buku** adalah web sederhana berbasis Laravel untuk mengelola data buku. Fitur utama meliputi CRUD (Create, Read, Update, Delete) buku, pencarian buku, dan autentikasi user.

## Fitur

- Login & Logout user
- Tambah data buku
- Edit data buku
- Hapus data buku
- Cari buku berdasarkan judul atau penulis
- Tampilan responsif (bisa diakses dari HP & desktop)
- Navigasi mudah dengan navbar

## Instalasi

1. **Clone repository**
   ```
   git clone [alamat-repo-anda]
   cd perpustakaan
   ```

2. **Install dependency**
   ```
   composer install
   ```

3. **Copy file environment**
   ```
   cp .env.example .env
   ```

4. **Generate key**
   ```
   php artisan key:generate
   ```

5. **Atur koneksi database**  
   Edit file `.env` dan sesuaikan konfigurasi database Anda.

6. **Migrasi database**
   ```
   php artisan migrate
   ```

7. **Jalankan server**
   ```
   php artisan serve
   ```
   Akses di browser: [http://localhost:8000](http://localhost:8000)

## Penggunaan

- Login menggunakan akun yang sudah terdaftar.
- Tambahkan buku baru melalui menu "Tambah Buku".
- Edit atau hapus buku melalui tombol aksi di tabel.
- Gunakan kolom pencarian untuk mencari buku berdasarkan judul atau penulis.

## Kontribusi

Kontribusi sangat terbuka! Silakan fork repo ini dan ajukan pull request.

## Lisensi

Aplikasi ini menggunakan lisensi [MIT](https://opensource.org/licenses/MIT).

---

**Dibuat dengan Laravel.**