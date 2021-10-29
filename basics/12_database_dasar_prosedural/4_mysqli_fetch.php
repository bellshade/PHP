<?php

echo '<pre>';

/**
 * Memanggil file koneksi ke database dan
 * agar dapat menggunakan variabel `$connect` didalamnya
 */
require_once('2_connect.php');

$tabel = '12_database_dasar_prosedural_buku';


/**
 * mysqli_fetch_row
 * --------------------------
 * mengambil data keluaran SQL dan menerjemahkannya menjadi
 * array asosiatif yang kolomnya direpresentasikan sebagai angka index
 */

echo '<h2 id="mysqli-fetch-row">Demonstrasi mysqli_fetch_row()</h2>', PHP_EOL;

# Menyiapkan string berisi kode SQL
$queryString = "SELECT * FROM $tabel";

echo 'Kode SQL yang dijalankan: <strong>' . $queryString . '</strong>', PHP_EOL;

# Eksekusi query SQL
$query = mysqli_query($connect, $queryString);
$row = mysqli_fetch_row($query);

echo PHP_EOL;
echo 'Hasil print_r(): ', PHP_EOL;
print_r($row);
echo PHP_EOL;

# Menampilkan setiap kolom secara individual
echo "Kolom 1 (id)\t\t: " . $row[0], PHP_EOL;
echo "Kolom 2 (judul)\t\t: " . $row[1], PHP_EOL;
echo "Kolom 3 (deskripsi)\t: " . $row[2], PHP_EOL;
echo "Kolom 4 (penulis)\t: " . $row[3], PHP_EOL;
echo "Kolom 5 (penerbit)\t: " . $row[4], PHP_EOL;

/**
 * mysqli_fetch_assoc
 * --------------------------
 * mengambil data keluaran SQL dan menerjemahkannya menjadi
 * array asosiatif yang kolomnya direpresentasikan sebagai nama kolom sebenarnya
 */

echo '<h2 id="mysqli-fetch-assoc">Demonstrasi mysqli_fetch_assoc()</h2>', PHP_EOL;

# Menyiapkan string berisi kode SQL
$queryString = "SELECT * FROM $tabel";

echo 'Kode SQL yang dijalankan: <strong>' . $queryString . '</strong>', PHP_EOL;

# Eksekusi query SQL
$query = mysqli_query($connect, $queryString);
$row = mysqli_fetch_assoc($query);

echo PHP_EOL;
echo 'Hasil <strong>print_r($row):</strong> ', PHP_EOL;
print_r($row);
echo PHP_EOL;

# Menampilkan setiap kolom secara individual
echo "Kolom 1 (id)\t\t: " . $row['id'], PHP_EOL;
echo "Kolom 2 (judul)\t\t: " . $row['judul'], PHP_EOL;
echo "Kolom 3 (deskripsi)\t: " . $row['deskripsi'], PHP_EOL;
echo "Kolom 4 (penulis)\t: " . $row['penulis'], PHP_EOL;
echo "Kolom 5 (penerbit)\t: " . $row['penerbit'], PHP_EOL;

/**
 * mysqli_fetch_array
 * --------------------------
 * mengambil data keluaran SQL dan menerjemahkannya menjadi
 * array asosiatif yang kolomnya direpresentasikan sebagai nama kolom sebenarnya
 */

echo '<h2 id="mysqli-fetch-array">Demonstrasi mysqli_fetch_array()</h2>', PHP_EOL;

# Menyiapkan string berisi kode SQL
$queryString = "SELECT * FROM $tabel";

echo 'Kode SQL yang dijalankan: <strong>' . $queryString . '</strong>', PHP_EOL;

# Eksekusi query SQL
$query = mysqli_query($connect, $queryString);
$row = mysqli_fetch_array($query);

echo PHP_EOL;
echo 'Hasil <strong>print_r($row):</strong> ', PHP_EOL;
print_r($row);
echo PHP_EOL;

# Menampilkan setiap kolom secara individual
echo "Kolom 1 (id)\t\t: " . $row['id'], PHP_EOL;
echo "Kolom 2 (judul)\t\t: " . $row[1], PHP_EOL;
echo "Kolom 3 (deskripsi)\t: " . $row[2], PHP_EOL;
echo "Kolom 4 (penulis)\t: " . $row['penulis'], PHP_EOL;
echo "Kolom 5 (penerbit)\t: " . $row['penerbit'], PHP_EOL;

/**
 * mysqli_fetch_object
 * --------------------------
 * mengambil data keluaran SQL dan menerjemahkannya menjadi
 * sebuah object yang atributnya memiliki nama kolom dengan data sebenarnya didalam
 */

echo '<h2 id="mysqli-fetch-object">Demonstrasi mysqli_fetch_object()</h2>', PHP_EOL;

# Menyiapkan string berisi kode SQL
$queryString = "SELECT * FROM $tabel";

echo 'Kode SQL yang dijalankan: <strong>' . $queryString . '</strong>', PHP_EOL;

# Eksekusi query SQL
$query = mysqli_query($connect, $queryString);
$row = mysqli_fetch_object($query);

echo PHP_EOL;
echo 'Hasil <strong>print_r($row):</strong> ', PHP_EOL;
print_r($row);
echo PHP_EOL;

# Menampilkan setiap kolom secara individual
echo "Kolom 1 (id)\t\t: " . $row->id, PHP_EOL;
echo "Kolom 2 (judul)\t\t: " . $row->judul, PHP_EOL;
echo "Kolom 3 (deskripsi)\t: " . $row->deskripsi, PHP_EOL;
echo "Kolom 4 (penulis)\t: " . $row->penulis, PHP_EOL;
echo "Kolom 5 (penerbit)\t: " . $row->penerbit, PHP_EOL;


echo '</pre>';


/**
 * Menampilkan banyak data sekaligus
 * --------------------------
 * Untuk menampilkan data, perlu dilakukan perulangan
 * yang dapat menjalankan kembali `mysqli_fetch` selama
 * ada baris data yang tersisa
 */
echo '<h2 id="table">Menampilkan seluruh isi tabel buku ke tabel</h2>', PHP_EOL;

$query = mysqli_query($connect, "SELECT * FROM $tabel");

echo "<table border=1 style='border-collapse: collapse'>";

echo "<tr>";
echo "<td>ID</td>";
echo "<td>JUDUL</td>";
echo "<td>DESKRIPSI</td>";
echo "<td>PENULIS</td>";
echo "<td>PENERBIT</td>";
echo "</tr>";

while ($row = mysqli_fetch_array($query)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['judul'] . "</td>";
    echo "<td>" . $row['deskripsi'] . "</td>";
    echo "<td>" . $row['penulis'] . "</td>";
    echo "<td>" . $row['penerbit'] . "</td>";
    echo "<tr/>";
}

echo '</table>';
