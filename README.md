# ArrayMAP

> **Tugas Pak Fajar — Project Array Map (PHP)**

Selamat datang di repo **ArrayMAP**!  
Project ini merupakan tugas sekolah yang mengimplementasikan berbagai operasi array dengan menggunakan konsep **Map** pada bahasa pemrograman PHP. Dengan dokumentasi ini, Anda akan memahami fitur, tujuan, serta penjelasan kode yang digunakan dalam project ini.

---

## 📝 Daftar Isi

- [Deskripsi Project](#deskripsi-project)
- [Fitur](#fitur)
- [Struktur File](#struktur-file)
- [Penjelasan Kode](#penjelasan-kode)
- [Cara Menjalankan](#cara-menjalankan)
- [Contoh Output](#contoh-output)
- [Kontribusi](#kontribusi)
- [Lisensi](#lisensi)

---

## Deskripsi Project

Project ini dibuat untuk memenuhi tugas sekolah pada mata pelajaran Pemrograman, khususnya materi tentang **Array dan Map di PHP**. Program ini memberikan contoh nyata bagaimana array dapat dimanipulasi menggunakan fungsi-fungsi PHP, seperti `array_map`, `array_filter`, dan lainnya.

---

## Fitur

- 🚀 Implementasi berbagai operasi pada array menggunakan PHP.
- 📚 Penjelasan kode secara detail, mudah dipahami untuk pelajar.
- 🧑‍💻 Contoh penggunaan fungsi `array_map` untuk memodifikasi isi array.
- 🔎 Fitur filter, pengurutan, dan pengolahan data array.

---

## Struktur File

```
arrayMAP/
├── src/
│   └── array_map_example.php
├── README.md
```

---

## Penjelasan Kode

Di bawah ini merupakan contoh kode utama yang terdapat pada project ini beserta penjelasannya:

```php
<?php
// Membuat array awal
$angka = [1, 2, 3, 4, 5];

// Menggunakan array_map untuk mengkuadratkan setiap elemen array
$kuadrat = array_map(function($n) {
    return $n * $n;
}, $angka);

print_r($kuadrat);
// Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )

// Menggunakan array_filter untuk mengambil angka genap saja
$genap = array_filter($angka, function($n) {
    return $n % 2 == 0;
});

print_r($genap);
// Output: Array ( [1] => 2 [3] => 4 )

// Menggunakan array_reduce untuk menjumlahkan semua elemen
$total = array_reduce($angka, function($carry, $item) {
    return $carry + $item;
});

echo "Total: $total\n";
// Output: Total: 15
?>
```

**Penjelasan:**
- `array_map`: Menerapkan fungsi pada setiap elemen array. Contoh di atas mengkuadratkan setiap angka.
- `array_filter`: Menyaring array sesuai kondisi. Pada contoh di atas, hanya angka genap yang diambil.
- `array_reduce`: Mengakumulasi/merangkum nilai array. Pada contoh di atas, seluruh elemen dijumlahkan.

---

## Cara Menjalankan

1. **Clone Repo:**
   ```bash
   git clone https://github.com/keyyH4B/arrayMAP.git
   cd arrayMAP/src
   ```

2. **Jalankan program:**
   ```bash
   php array_map_example.php
   ```

---

## Contoh Output

```
Array
(
    [0] => 1
    [1] => 4
    [2] => 9
    [3] => 16
    [4] => 25
)
Array
(
    [1] => 2
    [3] => 4
)
Total: 15
```

---

## Kontribusi

Kontribusi sangat terbuka!  
Silakan fork, buat branch dengan fitur/ide baru, lalu buat Pull Request ke repo ini.

---

## Lisensi

Project ini dibuat untuk pembelajaran dan sepenuhnya open-source.

---

> _Dibuat dengan semangat belajar oleh [keyyH4B](https://github.com/keyyH4B)_
