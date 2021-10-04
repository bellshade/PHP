# DATABASE - MYSQL

Dalam pemrograman, Database digunakan sebagai media penyimpanan data. jika diibaratkan bisa database adalah lemari yang mampu digunakan untuk menyimpan banyak barang, kemudian rak pada lemari adalah tabel tabel/collection yang ada pada database. pada seksi ini kita akan mempelajari tentang database mysql, salah satu database yang sering digunakan dalam berbagai kondisi.

## Connection/ Koneksi
>setelah melewati materi ini diharapkan teman teman dapat memahami bagaimana melakukan koneksi database mysql pada bahasa pemrograman PHP

Untuk melakukan koneki sendiri, PHP sejak versi 7 menyediakan 2 pilihan yaitu menggunakan mysqli atau menggunakan PDO (PHP Data Objects).
    1. mysqli
    ```php
    <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
        }
        echo "Koneksi database Berhasil";
    ?>
    ```
    2. PDO
    ```php
    <?php
    $servername = "localhost";
    $username = "username";
    $password = "password";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi database Berhasil";
    } catch(PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
    }
    ?>
    ```

## Select data (mengambil data) dari database
>setelah melewati materi ini diharapkan teman teman dapat memahami bagaimana melakukan select data dari database mysql pada bahasa pemrograman PHP

mengambil data di datatabase adalah salah satu yang paling sering dilakukan oleh web developer
    1. mysqli
    ```php
    <?php
    $host = "localhost";
    $username = "username";
    $password = "password";
    $nama_database = "myDB";

    // buat koneksi
    $conn = mysqli_connect($host, $username, $password, $nama_database);
    // cek koneksi
    if (!$conn) {
    die("koneksi database gagal: " . mysqli_connect_error());
    }

    $sql = "SELECT id, username, password FROM users";
    $hasil = mysqli_query($conn, $sql);

    if (mysqli_num_rows($hasil) > 0) {
    while($row = mysqli_fetch_assoc($hasil)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
    } else {
    echo "0 hasil";
    }

    mysqli_close($conn);
    ?>
    ````
    2. PDO
    ```php
    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
    }

    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDBPDO";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    ?>
    ```