<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputan Siswa</title>
    <style>
        body {
            background: #f4f8ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,64,0.08);
            padding: 32px;
        }
        fieldset {
            border: 1px solid #2196F3;
            border-radius: 8px;
            padding: 20px;
            background: #e3f0ff;
        }
        legend, h3, h4 {
            color: #1565c0;
        }
        label {
            font-weight: bold;
            color: #1565c0;
        }
        input[type="number"], input[type="text"] {
            padding: 6px 10px;
            border-radius: 4px;
            border: 1px solid #90caf9;
            margin-bottom: 8px;
            width: 90%;
        }
        input[type="submit"] {
            background: #2196F3;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 8px 18px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
            background: #fff;
        }
        th, td {
            border: 1px solid #90caf9;
            padding: 8px;
            text-align: left;
        }
        th {
            background: #2196F3;
            color: #fff;
        }
        tr:nth-child(even) {
            background: #e3f0ff;
        }
        ul {
            list-style: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post">
            <fieldset>
            <p>
                <h4><b>Masukan jumlah siswa yang ingin di list</b></h4>
            </p>
            <p>
                <label for="listjumlah">Jumlah</label>
                <input type="number" id="listjumlah" name="listjumlah" min="1" max="10" required>
            </p>
            <p>
                <input type="submit" value="Generate Table" name="generate">
            </p>
            </fieldset>
        </form>

        <div>
            
            <ul>
                <?php
                if (isset($_POST['listjumlah'])) {
                    $jumlah = $_POST['listjumlah'];

                    echo "<h3><b>Daftar Siswa</b></h3>";

                    echo "<form method='post'>";
                    echo "<table>";
                    echo "<tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    </tr>";

                    for ($i = 1; $i <= $jumlah; $i++) {
                        echo "<tr>
                                <td>$i</td>
                                <td><input type='text' name='nama[]' required></td>
                                <td><input type='number' name='umur[]' required></td>
                                <td><input type='text' name='alamat[]' required></td>
                              </tr>";
                    }
                    echo "</table>";
                    echo "<input type='hidden' name='jumlah' value='$jumlah'>";
                    echo "<p><input type='submit' value='Simpan' name='simpan'></p>";
                    echo "</form>";
                }

                if (isset($_POST['simpan'])) {
                    $jumlah = $_POST['jumlah'];
                    $nama = $_POST['nama'];
                    $umur = $_POST['umur'];
                    $alamat = $_POST['alamat'];

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

                    echo "<h3>Data Siswa:</h3>";
                    echo "<table>";
                    echo "<tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Alamat</th>
                          </tr>";

                    foreach ($data_siswa as $index => $siswa) {
                        echo "<tr>
                                <td>" . ($index + 1) . "</td>
                                <td>{$siswa['nama']}</td>
                                <td>{$siswa['umur']}</td>
                                <td>{$siswa['alamat']}</td>
                              </tr>";
                    }
                    echo "</table>";
                }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>