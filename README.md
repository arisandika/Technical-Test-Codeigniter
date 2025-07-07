# Technical Test Submission - BRICK Ari Sandika

## Deskripsi Proyek

Proyek ini merupakan hasil pengerjaan dari *Study Case Test* untuk posisi Intern di **Bocorocco**.

Proyek ini dibangun menggunakan **CodeIgniter 4 dan Tailwind 4**, sebuah pilihan yang diambil untuk memanfaatkan fitur-fitur modern, arsitektur yang solid, dan implementasi OOP yang kuat, sejalan dengan prinsip-prinsip yang ditekankan dalam soal. Styling diimplementasikan menggunakan **Tailwind CSS** untuk menghasilkan desain yang rapi dan responsif.

## Halaman yang Telah Diimplementasikan

Berikut adalah daftar 7 halaman yang telah berhasil di-*slicing* dari desain Figma, beserta route untuk mengaksesnya:

1.  **Halaman Home/List Product**
    -   Route: `https://technicaltest.arihub.my.id/`
2.  **Halaman Detail Produk**
    -   Route: `https://technicaltest.arihub.my.id/product/detail`
3.  **Halaman Search**
    -   Route: `https://technicaltest.arihub.my.id/search`
4.  **Halaman Checkout**
    -   Route: `https://technicaltest.arihub.my.id/checkout`
5.  **Halaman Edit Profile**
    -   Route: `https://technicaltest.arihub.my.id/profile/edit`
6.  **Halaman Edit Password**
    -   Route: `https://technicaltest.arihub.my.id/profile/password`
7.  **Halaman Edit Ahli Waris**
    -   Route: `https://technicaltest.arihub.my.id/profile/ahli-waris`

## Panduan Instalasi dan Menjalankan Proyek

Untuk menjalankan proyek ini di lingkungan lokal, silakan ikuti langkah-langkah berikut:

1.  **Clone Repository**
    ```bash
    git clone https://github.com/arisandika/Technical-Test-Codeigniter.git
    cd TECH-TEST
    ```

2.  **Install Dependencies**
    Pastikan Anda memiliki [Composer](https://getcomposer.org/). Jalankan perintah berikut di root proyek:
    ```bash
    composer install
    ```

3.  **Setup Environment**
    Salin file `env` menjadi `.env`. File ini berisi konfigurasi dasar untuk proyek.
    ```bash
    cp env .env
    ```
    Buka file `.env` dan pastikan `app.baseURL` sudah sesuai (biasanya `http://localhost:8080/`).

4.  **Jalankan Server Development**
    Gunakan server development bawaan CodeIgniter 4:
    ```bash
    php spark serve
    ```
    Proyek akan berjalan dan dapat diakses melalui `http://localhost:8080`.

---

### Soal 3: Query Database MySQL

**Tercapai.** Berikut adalah query MySQL untuk menampilkan nama kota dan jumlah penduduk dari semua kota di Indonesia dengan populasi lebih dari 5 juta, diurutkan dari yang terbesar.

```sql
SELECT 
    NAME, 
    POPULATION 
FROM 
    city 
WHERE 
    COUNTRYCODE = 'INA' 
    AND POPULATION > 5000000 
ORDER BY 
    POPULATION DESC;
```

---

Terima kasih atas kesempatan yang telah diberikan untuk mengerjakan *technical test* ini.
