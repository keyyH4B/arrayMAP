
# 📚 Proyek Daftar Siswa (PHP Array Map)

[![GitHub stars](https://img.shields.io/github/stars/keyyH4B/arrayMAP.svg?style=social&label=Star)](https://github.com/keyyH4B/arrayMAP/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/keyyH4B/arrayMAP.svg?style=social&label=Fork)](https://github.com/keyyH4B/arrayMAP/network/members)
![GitHub commit activity](https://img.shields.io/github/commit-activity/m/keyyH4B/arrayMAP)

Repositori ini adalah implementasi sederhana dari **tugas sekolah** yang menunjukkan penggunaan fungsi `array_map` dalam PHP.  
Aplikasi web ini memungkinkan pengguna untuk **secara dinamis membuat daftar siswa**, mengisinya, lalu menampilkan data dalam tabel yang terstruktur.

---

## ✨ Fitur Utama
- **Input Dinamis**: Menentukan jumlah siswa yang akan didata (1–10).
- **Generate Form Otomatis**: Sistem membuat formulir untuk input **Nama**, **Umur**, dan **Alamat** sesuai jumlah yang ditentukan.
- **Pengolahan Data Efisien**: Memanfaatkan `array_map` untuk menggabungkan beberapa array menjadi satu array asosiatif.
- **Keamanan Dasar**: Menggunakan `htmlspecialchars` untuk mencegah serangan **XSS sederhana**.
- **Tampilan Bersih**: UI sederhana yang mudah dipahami.

---

## 🚀 Cara Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek di server lokal Anda:

### 1. Clone Repositori
```bash
git clone https://github.com/keyyH4B/arrayMAP.git
````

### 2. Pindahkan ke Direktori Web Server

Salin folder `arrayMAP` ke dalam **root server lokal**:

* **XAMPP:** `htdocs`
* **WAMP:** `www`

### 3. Jalankan Server

Pastikan **Apache** dan **PHP** sudah aktif.

### 4. Buka di Browser

Akses URL berikut:

```
http://localhost/arrayMAP/listsiswa.php
```

### 5. Gunakan Aplikasi

* Masukkan **jumlah siswa**, lalu klik **"Generate Table"**.
* Isi **Nama**, **Umur**, dan **Alamat** pada formulir yang muncul.
* Klik **"Simpan"** untuk melihat hasil data dalam tabel.

---

## 🔧 Penjelasan Kode Inti: `array_map`

Bagian inti proyek ini adalah pengolahan data dengan `array_map`:

```php
$data_siswa = array_map(
    function($n, $u, $a) {
        return [
            'nama'   => htmlspecialchars($n),
            'umur'   => htmlspecialchars($u),
            'alamat' => htmlspecialchars($a)
        ];
    },
    $nama,
    $umur,
    $alamat
);
```

### Cara Kerjanya:

1. **Input Formulir:** Saat tombol **Simpan** ditekan, PHP menerima tiga array:

   * `$_POST['nama']`
   * `$_POST['umur']`
   * `$_POST['alamat']`
2. **Fungsi `array_map`:** Memanggil fungsi callback dan melakukan iterasi **paralel** pada ketiga array.
3. **Transformasi Data:**

   * Setiap elemen digabung menjadi satu array asosiatif.
   * `htmlspecialchars` diterapkan agar data aman.
4. **Output Akhir:** Menghasilkan array `$data_siswa` yang siap ditampilkan dalam tabel HTML.

---

## 📸 Tampilan Aplikasi

| Input Jumlah Siswa                           | Formulir Pengisian                         | Hasil Tabel Data                             |
| -------------------------------------------- | ------------------------------------------ | -------------------------------------------- |
| ![Input](https://i.ibb.co/L5Szkb3/input.png) | ![Form](https://i.ibb.co/V9VdJmX/form.png) | ![Hasil](https://i.ibb.co/bF9FzC1/hasil.png) |

---

## 🤝 Berkontribusi

1. Fork repositori ini
2. Buat branch baru:

   ```bash
   git checkout -b feature/FiturKeren
   ```
3. Commit perubahan Anda:

   ```bash
   git commit -m "Menambahkan FiturKeren"
   ```
4. Push ke branch:

   ```bash
   git push origin feature/FiturKeren
   ```
5. Buat **Pull Request** baru.

---

## 📝 Lisensi

Proyek ini menggunakan **MIT License**.
Lihat file [LICENSE](LICENSE) untuk informasi lebih lengkap.

---

## 🔥 Tunjukkan Dukungan Anda!

Jika Anda menyukai proyek ini, jangan lupa berikan **bintang ⭐** di GitHub!

![GitHub Streak](https://streak-stats.demolab.com/?user=keyyH4B\&theme=dark\&border_radius=5)
