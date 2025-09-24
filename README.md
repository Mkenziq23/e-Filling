# 📂 E-Filing - Sistem Informasi Manajemen Dokumen

E-Filing adalah **Sistem Informasi Manajemen Dokumen** berbasis web yang dirancang untuk membantu instansi atau perusahaan dalam melakukan pengelolaan, penyimpanan, pencarian, dan pelacakan dokumen secara digital.  
Dengan sistem ini, alur administrasi menjadi lebih **efisien, aman, dan mudah diakses** kapan saja.

---

## 🚀 Fitur Utama
- ✅ Upload & unduh dokumen (PDF, DOCX, XLSX, dll.)
- ✅ Manajemen kategori dokumen
- ✅ Pencarian dokumen cepat (full-text search)
- ✅ Manajemen user dengan role (Admin, Petugas, Pengguna)
- ✅ Tracking status dokumen
- ✅ Laporan & riwayat aktivitas
- ✅ Notifikasi otomatis (opsional)
- ✅ Cetak laporan dokumen

---

Sistem **E-Filing** ini memiliki **4 role utama** dalam pengelolaan dokumen:
- 👨‍💼 **Admin** → bertanggung jawab penuh terhadap manajemen sistem, user, dan konfigurasi umum.  
- 🧑‍⚕️ **Kepala Rekam Medis** → mengawasi dan memverifikasi dokumen yang masuk, serta memonitor aktivitas petugas.  
- 📋 **Petugas Rekam Medis** → mengelola dokumen, melakukan input data, dan melayani permintaan dari perawat.  
- 👩‍⚕️ **Perawat** → dapat mengakses, mengajukan, dan melihat dokumen sesuai kebutuhan pelayanan medis.  

---

## 🛠️ Teknologi yang Digunakan
- **Backend**: Laravel 10
- **Frontend**: Blade + Bootstrap
- **Database**: MySQL
- **Authentication**: Laravel middleware
- **Lainnya**: Laravel Scheduler, Laravel Notification

---

## 📸 Dokumentasi Gambar

## 📸 Dokumentasi Gambar

Berikut adalah beberapa tampilan dari sistem **E-Filing** (total 14 gambar):

<table>
  <tr>
    <td align="center"><b>1. Login Page</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/login.png" width="400"></td>
    <td align="center"><b>2. Dashboard</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/dashboard.png" width="400"></td>
  </tr>
  <tr>
    <td align="center"><b>3. Permintaan Peminjaman Berkas</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/permintaan%20peminjaman%20berkas.png" width="400"></td>
    <td align="center"><b>4. Data Pengguna</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/data%20pengguna.png" width="400"></td>
  </tr>
  <tr>
    <td align="center"><b>5. Data Doktor</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/data%20dokter.png" width="400"></td>
    <td align="center"><b>6. Data Pasien</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/data%20pasien.png" width="400"></td>
  </tr>
  <tr>
    <td align="center"><b>7. Data Peminjaman</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/data%20peminjaman.png" width="400"></td>
    <td align="center"><b>8. Data Pengembalian</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/data%20pengembalian.png" width="400"></td>
  </tr>
  <tr>
    <td align="center"><b>9. Permintaan Peminjaman</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/permintaan%20peminjaman.png" width="400"></td>
    <td align="center"><b>10. Laporan Peminjaman</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/laporan%20peminjaman.png" width="400"></td>
  </tr>
  <tr>
    <td align="center"><b>11. Notifikasi</b><br><img src="docs/images/notification.png" width="400"></td>
    <td align="center"><b>12. Tracking Dokumen</b><br><img src="docs/images/tracking.png" width="400"></td>
  </tr>
  <tr>
    <td align="center"><b>13. Laporan Pengembalian</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/laporan%20pengembalian.png" width="400"></td>
    <td align="center"><b>14. Laporan Keterlambatan</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/laporan%20keterlambatan.png" width="400"></td>
  </tr>
  <tr>
    <td align="center"><b>13. Laporan Kelengkapan</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/laporan%20kelengkapan.png" width="400"></td>
    <td align="center"><b>14. Laporan Keterlambatan</b><br><img src="https://github.com/Mkenziq23/e-Filling/blob/main/public/img%20E-filling/logout.png" width="400"></td>
  </tr>
</table>


---

## ⚙️ Instalasi

1. Clone repository
   <pre>
   git clone https://github.com/username/e-filing.git
   cd e-filing
   </pre>

2. Install dependency Laravel
   <pre>
   composer install
   </pre>

3. Konfigurasi file `.env`
   <pre>
   APP_NAME=E-Filing
   APP_URL=http://localhost:8000
   DB_DATABASE=efiling_db
   DB_USERNAME=root
   DB_PASSWORD=
   </pre>

4. Jalankan migrasi & seeder
   <pre>
   php artisan migrate --seed
   </pre>

5. Jalankan aplikasi
   <pre>
   php artisan serve
   </pre>

---
