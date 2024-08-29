# Fishery Control App

## How to install and Configure

Untuk melakukan instalasi dari repositori berikut. Silahkan clone / zip repositori berikut, dan kemudian ekstrak `extract here` di lokasi yang anda inginkan. Selanjutnya, ikuti tahap-tahap berikut:

1. Buka Terminal / CMD di folder tersebut.

    -   Windows: Klik kanan mouse, dan `open in terminal`

2. Setelah CMD terbuka, lakukan command `composer install` dan tekan enter. Proses ini akan memakan beberapa waktu.

3. Hidupkan MySQL melalui XAMPP atau sejenisnya. Kemudian masuk kedalam `phpmyadmin` dan buat database dengan nama `db_fishery`.

4. Setelah database dibuat, pilih opsi `import` dan pilih file dengan nama `db_fishery.sql` yang telah dikirimkan.

5. Jika berhasil, silahkan buka lagi terminal dan ketik perintah `php artisan optimize:clear` untuk tes apakah ada error atau kendala.

6. Terakhir apabila langkah 5 berhasil, silahkan lakukan `php artisan serve --host=0.0.0.0`.

## Getting the URL

Untuk mendapatkan URL dan Endpoint ke alat secara Local Network, silahkan ikuti langkah-langkah berikut.

1. Buka Terminal / CMD dan ketik perintah `ipconfig`.

2. Cek Jaringan yang anda gunakan.

    -   WIFI: Cari driver bernama Wireless LAN Adapter Wi-Fi dan copy IPv4 Address tersebut.
    -   LAN: Cari driver bernama Ethernet Adapter Ethernet atau sejenisnya dan copy IPv4 Address tersebut.

3. Dari IP address tersebut. Ikuti format berikut `http://{IPv4 Address}/api`

## Type of API

API pada repository berikut terdiri dari 2 API, yaitu API POST.

1. POST Insert Data Endpoint: `http://{IPv4 Address}/api/environment/data/store`

    Header yang diperlukan ada 2 yaitu:

    ```json
    {
        "Accept": "application/json",
        "Authorization": "Bearer {YourAPIToken}"
    }
    ```
   
    Dengan format body

    ```json
    {
        "water_ph": null,
        "water_temp": null,
        "water_humid": null,
        "device_id": null
    }
    ```

