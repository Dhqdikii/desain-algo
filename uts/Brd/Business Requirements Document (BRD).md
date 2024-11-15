# **Business Requirements Document (BRD)**  
## **Judul**: Sistem Pengelolaan Data Guru  
## **Versi**: 1.1  
## **Tanggal**: [Tulis Tanggal Dokumen]  

---

## **Pendahuluan**  
Sistem Pengelolaan Data Guru dirancang untuk membantu institusi pendidikan dalam mengelola data guru secara terstruktur dan efisien. Sistem ini akan mencatat informasi guru, seperti nama, NIP, mata pelajaran, alamat, dan nomor telepon, yang dapat ditambahkan, diperbarui, dihapus, serta ditampilkan dalam laporan.

---

## **Tujuan Proyek**  
- Memberikan solusi digital untuk pengelolaan data guru.  
- Mengurangi risiko kesalahan input data dengan validasi otomatis.  
- Mempermudah akses data guru untuk administrasi dan manajemen sekolah.  

---

## **Ruang Lingkup**  
### **Fitur Utama**  
1. **Manajemen Data Guru**:  
   - Menambah data guru baru.  
   - Memperbarui data guru yang sudah ada.  
   - Menghapus data guru yang tidak lagi aktif.  
   - Menampilkan data guru dalam format tabel dan laporan.  
2. **Autentikasi**:  
   - Sistem login untuk memastikan hanya pengguna berwenang (admin) yang dapat mengelola data.  
3. **Laporan dan Pencarian**:  
   - Pencarian data guru berdasarkan nama, NIP, atau mata pelajaran.  
   - Menyediakan laporan data guru untuk keperluan evaluasi.  

---

## **Persyaratan Fungsional**  
1. **Input Data Guru**:  
   - Sistem harus memungkinkan admin untuk menambahkan data baru dengan atribut berikut:  
     - Nama Guru.  
     - NIP (harus unik).  
     - Mata Pelajaran.  
     - Alamat.  
     - Nomor Telepon.  
2. **Pembaruan Data Guru**:  
   - Admin dapat memperbarui informasi seperti nama, mata pelajaran, atau nomor telepon guru yang sudah ada.  
3. **Penghapusan Data Guru**:  
   - Admin dapat menghapus data guru yang tidak lagi aktif.  
4. **Peninjauan dan Pencarian**:  
   - Sistem dapat menampilkan semua data guru dan memungkinkan pencarian berdasarkan kriteria tertentu.  
5. **Login Sistem**:  
   - Pengguna harus login untuk mengakses dan mengelola data guru.  

---

## **Persyaratan Non-Fungsional**  
1. **Keamanan**:  
   - Data NIP harus unik, dan akses ke sistem dilindungi dengan autentikasi username dan password.  
2. **Kinerja**:  
   - Sistem harus dapat memproses setidaknya 1.000 data guru tanpa penurunan kinerja.  
3. **Ketersediaan**:  
   - Sistem tersedia selama jam kerja (08.00–17.00).  
4. **Usability**:  
   - Antarmuka sistem harus sederhana dan mudah digunakan oleh admin.  

---

## **Pemangku Kepentingan**  
1. **Admin Sekolah**: Bertugas untuk mengelola data guru.  
2. **Manajemen Sekolah**: Menggunakan data guru untuk evaluasi dan perencanaan.  

---

## **Risiko**  
1. **Kesalahan Input Data**:  
   **Mitigasi**: Tambahkan validasi input pada form untuk memastikan kelengkapan dan format data yang benar.  
2. **Ketergantungan pada Sistem**:  
   **Mitigasi**: Lakukan backup data otomatis dan manual secara rutin.  

---

## **Timeline**  
| Tahapan                | Waktu           |  
|------------------------|-----------------|  
| Analisis Kebutuhan     | 1 Minggu        |  
| Desain Sistem          | 2 Minggu        |  
| Pengembangan           | 3 Minggu        |  
| Pengujian              | 2 Minggu        |  
| Implementasi           | 1 Minggu        |  

---

## **Contoh Data Guru**  
| Nama         | NIP        | Mata Pelajaran     | Alamat              | Nomor Telepon  |  
|--------------|------------|--------------------|---------------------|----------------|  
| Ahmad Fauzi  | 123456789  | Matematika         | Jl. Merdeka No.1    | 08123456789    |  

---
