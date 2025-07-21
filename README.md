# Sistem Layanan Kesehatan Desa

Sistem Layanan Kesehatan Desa adalah aplikasi web berbasis Laravel yang memudahkan pengelolaan layanan kesehatan di tingkat desa. Sistem ini dibangun menggunakan Tall Stack (Tailwind CSS, Alpine.js, Laravel, Livewire) untuk pengalaman pengguna yang modern dan responsif.

## Fitur Utama

-   Manajemen data pasien
-   Jadwal kegiatan kesehatan desa
-   Riwayat pemeriksaan pasien
-   Notifikasi dan alert interaktif
-   Autentikasi dan otorisasi pengguna
-   Dashboard admin dan user

## Teknologi yang Digunakan

-   **Laravel**: Framework backend PHP
-   **Livewire**: Komponen interaktif tanpa perlu JavaScript khusus
-   **Alpine.js**: Interaksi frontend ringan
-   **Tailwind CSS**: Utility-first CSS framework
-   **Filament**: Admin panel dan resource management

## Instalasi

1. Clone repository:
    ```bash
    git clone https://github.com/Brynnnn12/sistem-layanan-kesehatan-desa.git
    cd sistem-layanan-kesehatan-desa
    ```
2. Install dependencies:
    ```bash
    composer install
    npm install
    ```
3. Copy file environment dan konfigurasi:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4. Migrasi dan seeder database:
    ```bash
    php artisan migrate --seed
    ```
5. Build assets:
    ```bash
    npm run build
    ```
6. Jalankan server:
    ```bash
    php artisan serve
    ```

## Struktur Folder

-   `app/` - Logic aplikasi (Models, Controllers, Livewire, Filament)
-   `resources/views/` - Blade templates
-   `database/` - Migrations, seeders, factories
-   `public/` - Assets publik
-   `routes/` - Routing aplikasi

## Kontribusi

Kontribusi sangat terbuka! Silakan buat pull request atau issue untuk perbaikan dan penambahan fitur.

## Lisensi

Proyek ini menggunakan lisensi MIT.
