# **Analisis Sistem Pengelolaan Data Guru**

---

## **Tujuan Analisis**
Analisis ini bertujuan untuk memastikan bahwa sistem pengelolaan data guru yang dirancang sesuai dengan kebutuhan bisnis (BRD) dan memberikan solusi yang efisien untuk pengelolaan data guru. Analisis meliputi identifikasi kebutuhan, solusi yang diterapkan, dan evaluasi terhadap desain sistem.

---

## **Identifikasi Kebutuhan**

### **Fungsionalitas Utama**
1. **Login Sistem**: Mencegah akses yang tidak sah.
2. **Manajemen Data Guru**:
   - Menambah, memperbarui, menghapus, dan menampilkan data guru.
3. **Pencarian dan Laporan**:
   - Pencarian data berdasarkan nama, NIP, atau mata pelajaran.
   - Penyajian data dalam bentuk laporan untuk evaluasi.

### **Kebutuhan Non-Fungsional**
1. **Keamanan**:
   - Data NIP harus unik untuk menghindari duplikasi.
   - Sistem hanya dapat diakses oleh pengguna yang sudah login.
2. **Kinerja**:
   - Sistem harus mampu menangani hingga 1.000 data guru dengan performa yang stabil.
3. **Kemudahan Penggunaan**:
   - Sistem harus memiliki antarmuka yang sederhana dan intuitif.
4. **Reliabilitas**:
   - Data harus tersimpan dengan aman dan dapat diakses kapan saja.

---

## **Solusi yang Diterapkan**

### **1. Database**
- **Desain Tabel**:
  Tabel `gurus` mencakup atribut berikut:
  - `nama`: Menyimpan nama lengkap guru.
  - `nip`: Nomor unik untuk setiap guru.
  - `mata_pelajaran`: Mata pelajaran yang diajarkan.
  - `alamat`: Alamat tempat tinggal guru.
  - `nomor_telepon`: Informasi kontak.

### **2. Model**
- Model `Guru` dirancang dengan fitur `fillable`, memungkinkan proses mass assignment untuk mempermudah manipulasi data.

### **3. Seeder**
- Seeder mengisi data awal yang relevan, seperti contoh guru dan atributnya, untuk pengujian sistem.

### **4. Validasi**
- Validasi dilakukan untuk memastikan data yang dimasukkan sesuai dengan aturan bisnis, seperti keunikan NIP dan format nomor telepon.

### **5. Fitur Keamanan**
- Sistem login dengan autentikasi untuk memastikan hanya admin yang memiliki akses ke fungsi manajemen data guru.

---

## **Evaluasi dan Potensi Perbaikan**

### **1. Keunggulan**
- Sistem telah memenuhi semua persyaratan fungsional.
- Desain database mendukung pengelolaan data secara efisien.
- Data awal dari seeder mempermudah pengujian sistem sebelum implementasi.

### **2. Potensi Perbaikan**
- **Laporan Lebih Detail**: Sistem dapat ditingkatkan untuk menghasilkan laporan lengkap dengan grafik atau analisis statistik.
- **Notifikasi Kesalahan**: Tambahkan notifikasi kesalahan yang lebih informatif (misalnya, jika NIP sudah digunakan).
- **Manajemen Pengguna**: Tambahkan fitur untuk mengelola akun admin, seperti reset password atau pengaturan peran.

---
