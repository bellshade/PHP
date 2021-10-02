<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Ini adalah text yang di cetak oleh php = 
        <?php
            echo "hello world";
        ?>
    </h1>
    <h4><?= "Teks ini juga dari PHP" ?></h4>
    <div style="width: 200px; padding: 16px; border: 1px solid blue">
        <p>
            <?php
                echo "Ini juga sama, text yang ditulis menggunakan PHP";
            ?>
        </p>
    </div>
</body>
</html>