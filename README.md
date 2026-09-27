Velocity Child Theme Paket Toko Online Toko 24
=================
[toko24.velocitydeveloper.com](https://toko24.velocitydeveloper.com/)

Child Theme for the Velocity System WordPress theme.

### Required
Theme Velocity versi 2.7.0 keatas, [Download](https://github.com/VelocityDeveloper/velocity/releases)

### Required Plugins
**VD Store**, [Download](https://github.com/Velocity-Developer/vd-store/releases) — produk `store_product`,
kategori `store_product_cat`, merek `brand`. Sejak 1.1.0 tema tidak lagi memakai plugin Velocity Toko
maupun Kirki.

Integrasi VD Store ada di `inc/vd-store.php`, `css/vd-store.css`, dan template override di folder
`vd-store/` (arsip, kategori, merek, detail produk). Pencarian mencari produk.

### Beranda
Beranda = `index.php` (Settings > Reading: tulisan terbaru): slider, judul situs, 12 produk 3 kolom (Detail + keranjang),
tombol "Produk lainnya" ke arsip produk, 2 artikel terbaru.

### Header
Bar putih atas: jam operasional (Customizer > Jam Operasional), kontak VD Store, ikon Profil Saya. Di bawahnya logo
(Site Identity), kotak cari produk dan keranjang, lalu menu **Primary** berlatar warna utama.

### Widget
Shortcode untuk widget Teks (susunan demo, dibaca installer lewat `velocity_tema_widget_sidebar()` dan
`velocity_tema_widget_footer()`):

- Sidebar (kanan): `[toko24_cari_produk]`, `[toko24_bank]`, `[toko24_ekspedisi]`, `[toko24_sosmed facebook="…" twitter="…" instagram="…" youtube="…"]`
- Footer 4 kolom: `[toko24_kategori]`, `[toko24_testimoni jumlah="5"]` (ulasan produk VD Store), `[toko24_produk_terbaru jumlah="5"]`, `[toko24_kontak]`
- Lainnya: `[toko24_best_seller jumlah="5"]`, `[toko24_info_terbaru]`

### Halaman
Arsip produk (`/produk/`, kategori, merek, pencarian produk): kolom kanan berisi daftar kategori + Filter & Urutkan VD Store.
Template **Velocity Toko Pricelist** (`page-pricelist.php`): tabel semua produk + tombol Cetak.
Halaman Katalog & Profil Saya VD Store (`page_catalog`/`page_profile`, `[wp_store_catalog]`/`[wp_store_profile]`) selalu tanpa sidebar.

### Customizer
Appearance > Customize > **Velocity Toko 24**: Warna (utama, sekunder), Popup Sambutan (aktif/nonaktif +
isi HTML, tampil sekali sehari per pengunjung), Font (judul & teks), Slider Home (5 slot gambar), Jam Operasional.
Latar website: Background tema induk. Warna teks/link: Theme Colors tema induk.

### Usage
Simply download the zip and upload the zip (velocity-toko24.zip) under your WordPress dashboard at Appearance > Themes. Or extract and upload via FTP at wp-content/themes/.
