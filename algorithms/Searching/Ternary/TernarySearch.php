<?php

namespace Searching\Ternary;

class TernarySearch
{
    protected $array;
    protected $value;
    protected $keyAwal;
    protected $keyAkhir;

    public function __construct(int $val = null, array $array = null, int $keyAwal = 0, int $keyAkhir = null)
    {
        $this->array = $array;
        $this->value = $val;
        $this->keyAwal = ($keyAwal);
        $this->keyAkhir = ($keyAkhir) ?? 0;
    }

    /**
     * Set Array
     *
     * Set Data dimana nilai yang akan dicari terdapat
     * @param array $array
     */
    public function setArray($array)
    {
        $this->array = $array;
    }

    /**
     * Set Key
     *
     * Set nilai yang akan di cari
     * @param mixed $key nilai yang akan dicari
     */
    public function setKey($key)
    {
        $this->value = $key;
    }

    /**
     * SetBatas
     *
     * Set Batas index pencarian
     * @param int $atas batas index tertinggi
     * @param int $bawah batas index terendah
     */
    public function setBatas($atas, $bawah = 0)
    {
        $this->keyAkhir = $atas;
        $this->keyAwal = $bawah;
    }

    /**
     * Validate
     *
     * Melakukan terhadap validasi terhadap property
     */
    protected function validated()
    {
        // Cek kumpulan data harus berupa array
        if (!is_array($this->array)) {
            return "Data Bukan Array";
        }

        // Cek kumpulan data berupa array numerik
        if (count($this->array) != count(array_filter($this->array, 'is_numeric'))) {
            return "Data Bukan Array Numeric";
        }

        // Cek apakah array sudah diurutkan
        $cek = function () {
            $nilaiCek = $this->array[0];
            foreach ($this->array as $val) {
                if ($nilaiCek > $val) {
                    return false;
                    break;
                }
                $nilaiCek = $val;
            }
            return true;
        };

        if (!$cek()) {
            return "Array tidak terurut, disarankan menggunakan linear search";
        }

        // Cek nilai yang di cari tidak null
        if (empty($this->value)) {
            return "Key pencarian tidak boleh null";
        }

        // Cek nilai di cari berada dalam range nilai array
        if ($this->value < min($this->array) || max($this->array) < $this->value) {
            return "Data tidak ditemukan, Nilai dicari di luar range dari nilai array";
        }

        // Jika Property sesuai
        return true;
    }

    /**
     * Fungsi Cari
     *
     * Melakukan Pencarian nilai array secara Ternary
     * @return int|null mengembalikan nilai index array atau null bila tidak ditemukan
     */
    public function cari()
    {
        // Lakukan validasi terhadap data
        $cek = $this->validated();

        // Jika validasi gagal
        if (!is_bool($cek)) {
            return $cek;
        }

        $this->keyAkhir = count($this->array) - 1;

        while ($this->keyAwal <= $this->keyAkhir) {
            //Cari nilai tengah dari cursor atas dan bawah
            $curBawah = (int)($this->keyAwal + ($this->keyAkhir - $this->keyAwal) / 3);
            $curAtas = (int)($this->keyAkhir - ($this->keyAkhir - $this->keyAwal) / 3);

            //Bandingkan nilai cursor Atas dan Bawah dengan nilai dicari
            if ($this->array[$curBawah] == $this->value) {
                return $curBawah;
            }

            if ($this->array[$curAtas] == $this->value) {
                return $curAtas;
            }

            switch ($this->value) {
                    // jika nilai berada pada bagian bawah
                case $this->value < $this->array[$curBawah]:
                    $this->keyAkhir = $curBawah - 1;
                    break;

                    // jika nilai berada pada bagian atas
                case $this->value > $this->array[$curAtas]:
                    $this->keyAwal = $curAtas + 1;
                    break;

                    // jika nilai berada pada bagian tengah
                default:
                    $this->keyAwal = $curBawah + 1;
                    $this->keyAkhir = $curAtas - 1;
                    break;
            }
        }
        // jika nilai tidak ditemukan
        return null;
    }

    /**
     * Fungsi Log
     *
     * ABAIKAN METHOD INI
     * Melakukan pencatatan log dari proses pencarian
     * @return string nilai dari log
     */
    public function log(): string
    {
        $log = "";
        $log .= "Data Array : [" . $this->array[0];
        for ($index = 1; $index < count($this->array); $index++) {
            $log .= ", " . $this->array[$index];
        }
        $log .= "]" . PHP_EOL;
        $log .= "Data dicari : " . $this->value . PHP_EOL;
        $log .= "-----------------------------------------" . PHP_EOL;
        $log .= "Lakukan Validasi Data : ";
        $cek = $this->validated();

        // Jika validasi gagal
        if (!is_bool($cek)) {
            $log .= "<b>Validasi gagal</b>, " . $cek;
            return $log;
        }

        $log .= "<b>Berhasil</b>" . PHP_EOL;

        $Awal = 0;
        $Akhir = count($this->array) - 1;

        $log .= "Index Bawah : " . $Awal . " ";
        $log .= "Index Atas : " . $Akhir . PHP_EOL;
        $log .= PHP_EOL .  "============ Mulai Pencarian ============" . PHP_EOL . PHP_EOL;

        while ($this->keyAwal <= $this->keyAkhir) {
            //Cari nilai tengah dari cursor atas dan bawah
            $curBawah = (int)($Awal + ($Akhir - $Awal) / 3);
            $curAtas = (int)($Akhir - ($Akhir - $Awal) / 3);

            $log .= "Index bawah : " . $curBawah . " bernilai : <b>" . $this->array[$curBawah] . "</b>";
            $log .= ", Index atas : " . $curAtas . " bernilai : <b>" . $this->array[$curAtas] . "</b>";
            $log .= ", HASIL : ";
            //Bandingkan nilai cursor Atas dan Bawah dengan nilai dicari
            if ($this->array[$curBawah] == $this->value) {
                $log .= "<b>ditemukan<b>" . PHP_EOL;
                return $log;
            }

            if ($this->array[$curAtas] == $this->value) {
                $log .= "<b>ditemukan<b>" . PHP_EOL;
                return $log;
            }

            $log .= "Tidak ditemukan" . PHP_EOL;
            switch ($this->value) {
                case $this->value < $this->array[$curBawah]:
                    $log .= "Data berada pada bagian bawah." . PHP_EOL;
                    $Akhir = $curBawah - 1;
                    break;

                case $this->value > $this->array[$curAtas]:
                    $log .= "Data berada pada bagian atas." . PHP_EOL;
                    $Awal = $curAtas + 1;
                    break;

                default:
                    $log .= "Data berada pada bagian tengah." . PHP_EOL;
                    $Awal = $curBawah + 1;
                    $Akhir = $curAtas - 1;
                    break;
            }
        }

        $log .= "Data Tidak di Temukan";
        return $log;
    }
}

$data = array();
foreach (range(1, 25) as $key) {
    $data[$key - 1] = rand(-100, 100);
}
// $data = [6, 7, 10, 11, 14, 17, 18, 19, 23, 26, 38, 42, 78, 79, 82, 84];
sort($data);
$key = $data[rand(0, 19)];
// $key = 26;
$ternary = new TernarySearch($key, $data);
$result =  $ternary->cari();

echo "<pre>";
echo "<h1>TernarySearch Search</h1>";
echo $ternary->log();
echo PHP_EOL . "============== Hasil Pencarian ===============" . PHP_EOL;
$hasil =  "Data di temukan pada index = " . $result;
if ($result == null) {
    # code...
    $hasil = "<b>Data Tidak di Temukan</b>";
}
echo PHP_EOL . $hasil . PHP_EOL;
