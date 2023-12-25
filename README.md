# Lab13Web

Nama : Anggita Risqi Nur Clarita

NIM : 312210450

Kelas : TI.22.A.4

## DAFTAR ISI <br>

| No  | Description               | Link                                                                                 |
| --- | ------------------------- | ------------------------------------------------------------------------------------ |
| 1   | Modul Praktikum 12        | [Click Here](https://drive.google.com/file/d/1sKv4BHZ5no82IKXpHE1KTrW4oxJ21Tns/view) |
| 2   | Modul Praktikum 13        | [Click Here](https://drive.google.com/file/d/1sP_Zde-MAbXM_nYj1VfUP_P4fotXhcas/view) |
| 3   | Instruksi Praktikum       | [Click Here](#instruksi-praktikum)                                                   |
| 4   | Framework CodeIgniter 4   | [Click Here](#instalasi-dan-penggunaan-codeigniter-4)                                |
| 5   | Praktikum 12 (Search)     | [Click Here](#membuat-pencarian-data-praktikum-12)                                   |
| 6   | Praktikum 13 (Pagination) | [Click Here](#membuat-pagination-praktikum-13)                                       |

## Praktikum

> ### Instruksi Praktikum
>
> 1. Persiapkan text editor misalnya **VSCode**.
>
> 2. Buat folder baru dengan nama **_nama folder bebas_** pada docroot webserver **(htdocs)**
>
> 3. Ikuti langkah-langkah praktikum yang akan dijelaskan berikutnya 😉.

## Instalasi dan Penggunaan CodeIgniter 4

Untuk melakukan instalasi **Codeigniter 4** dapat dilakukan dengan dua cara, yaitu cara _manual_ dan menggunakan _composer_. Pada praktikum ini kita menggunakan cara **manual** _(tapi kalau mau pakai composer juga boleh kok)_ 😸.

- Unduh Codeigniter dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/_(folder kalian)_.
- Ubah nama direktory **framework-4.x.xx** menjadi **ci4** _(agar lebih ringkas saja sih, hehe)_ 😖.

1. **Aktifkan Extension di XAMPP Control Panel**

   Untuk mengaktifkan extension tersebut, melalui **XAMPP Control Panel**, pada bagian apache klik **_config_**

   ![1](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/3d7b9a69-6b30-4e52-b542-5a9795cbbf67)

   Setelah itu lanjut dengan mengklik **PHP (php.ini)**

   ![2](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/b29be979-87b6-4a74-af3b-7f485083d3d6)

   Pada bagian extension, hilangkan tanda **; _(titik koma)_** pada ekstensi yang akan diaktifkan. Kemudian save atau simpan kembali filenya dan restart **Apache web server**.

   Extension yang perlu diaktifkan :

   - **php-json** extension untuk bekerja dengan JSON.

   - **php-mysqlnd** native driver extension untuk MySQL.

   - **php-xml** extension untuk bekerja dengan XML.

   - **php-intl** extension untuk membuat aplikasi multibahasa.

   - **libcurl** (opsional), jika ingin pakai Curl.

   ![3](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/1b7f53c1-f5af-4ad0-b80d-426a9fad6e76)

2. **Menjalankan CLI _(Command Line Interface)_**

   Setelah melakukan restart **Apache web server**, silahkan nyalakan kembali Apache dan MySQL _(pastikan tidak ada yang error!)_ 😸.

   ![4](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/4732ff0d-d5f9-44b7-9154-f70800a23837)

   Kalian dapat membuka browser dengan alamat http://localhost/nama_folder_kalian/ci4/public

   ![5](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/5f355346-4409-458c-9f5a-16f788dbf412)

   Kemudian kalian dapat membuka atau menjalankan **CLI _(Command Line Interface)_**, Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk mengakses CLI buka _terminal/command prompt_ yang telah disediakan **XAMPP**.

   Selanjutnya arahkan lokasi directory sesuai dengan directory project yang kalian buat **(xampp/htdocs/nama_folder_kalian/ci4)**

   Kemudian jalankan perintah untuk memanggil CLI Codeigniter dengan script ini :

   ```cs
   php spark
   ```

   ![6](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/77c0d804-d5f0-4b68-8d2f-30d75e94002f)

3. **Mengaktifkan Mode Debugging**

   Codeigniter 4 menyediakan fitur **debugging** untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.

   Untuk memudahkan mengetahui jenis errornya, maka perlu mengaktifkan mode debugging dengan cara mengubah nilai konfigurasi pada environment variable **CI_ENVIRONMENT** menjadi **development**.

   ![7](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/001d2d81-2629-4631-b7a1-387d9509433b)

4. **Membuat Routes Baru**

   Kalian dapat menambahkan script ini ke dalam file Routes :

   ![8](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/81353c6c-1cf9-4c5b-9701-884f582238e7)

   Untuk mengetahui routes yang ditambahkan sudah benar, buka **CLI _(Command Line Interface)_** dan jalankan perintah berikut :

   ```cs
   php spark routes
   ```

   ![9](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/885b0bca-aadd-42f5-80c6-9d413a7214a8)

   Selanjutnya coba kalian akses routes yang telah dibuat dengan mengakses alamat http://localhost/nama_folder_kalian/ci4/public/about pasti hasilnya seperti ini :

   ![10](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/c41bae93-5406-440a-a70d-ad330bd92a62)

   Ketika kita akses dan muncul tampilan **_error 404 file not found_**, itu artinya file/page tersebut tidak ada 😔. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page 😀.

5. **Membuat Controller**

   Selanjutnya adalah membuat **Controller Page**. Buat file baru dengan nama **page.php** pada direktori Controller, kemudian isi scriptnya seperti berikut.

   ![11](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/a18d6544-50d0-4545-82ff-ce67c69e4faa)

   Kemudian coba kalian akses kembali routes yang telah dibuat dengan mengakses alamat http://localhost/nama_folder_kalian/ci4/public/about pasti hasilnya akan tampil seperti ini 😼 :

   ![12](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/83d3799c-cfcf-4ceb-a2ed-47ddeb589d4f)

6. **Membuat View**

   Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama **about.php** pada direktori view **(app/view/about.php)** kemudian kalian isi scriptnya seperti berikut :

   ![13](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/84818fca-de69-4d7a-977b-0e8ebb7b3362)

   Kemudian jangan lupa ubah juga **method about** pada class **Controller Page** menjadi seperti berikut:

   ```php
   public function about()
   {
       return view('about', [
           'title' => 'Halaman About',
           'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi halaman ini.'
       ]);
   }
   ```

   Kemudian coba kalian refresh routes http://localhost/nama_folder_kalian/ci4/public/about pasti hasilnya akan tampil seperti ini 🙀 :

   ![14](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/6561678e-7066-4051-b810-cc0647869ccb)

   Yippie! Kalian sudah tahu caranya dan sekarang kalian bisa menggunakan framework Codeigniter 4 untuk project kalian! 🥳

## Membuat Pencarian Data (Praktikum 12)

1. **Hasil Output Login :**

   ![15](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/ee18846e-1324-454d-b2cf-cc53ea52967f)

2. **Hasil Output Home :**

   ![16](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/451773e0-db23-4648-85e9-bebebc3d2f71)

3. **Hasil Output Tambah Barang:**

   ![17](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/e454bf9c-c108-4c6c-8954-cc6d27c32c92)

4. **Hasil Output Ubah Barang :**

   ![18](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/7981da08-2ace-4a36-a989-f3524831bc54)

5. **Hasil Output Contact:**

   ![19](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/e7569606-d2d1-411d-839f-c4364f0acfeb)

## Membuat Pagination (Praktikum 13)

1. **Hasil Output Home Page 1:**

   ![20](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/8dad432b-0a65-4db3-ad43-b769bc125fbd)

2. **Hasil Output Home Page 2:**

   ![21](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/46f47660-1886-4769-8bd6-0f135d4509b5)

3. **Hasil Output Tambah Barang:**

   ![22](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/facd8d7f-ee3b-4bc1-99d5-58dd5d5c8ae6)

4. **Hasil Output Ubah Barang:**

   ![23](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/3aee881d-d5e7-4dd1-acf9-dc9eda1382b1)

5. **Hasil Output Contact:**

   ![24](https://github.com/AnggitaRisqiNC/Lab13Web/assets/115614419/34a72df6-ae2f-4079-b61b-dad7d52d3c33)

## Finish 👻
