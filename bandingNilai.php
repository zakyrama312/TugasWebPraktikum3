<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banding Nilai</title>
</head>
<body>
    <h1>Perbandingan 2 Bilangan</h1>
    <form action="" method="post">
        <input type="number" name="bilangan1" placeholder="Masukkan Bilangan 1" > <br>
        <input type="number" name="bilangan2" placeholder="Masukkan Bilangan 2"> <br>
        <button type="submit" name="proses">Proses</button>
    </form>
</body>
</html>

<?php 

if (isset($_POST['proses'])) {
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];

    if ($bilangan1 > $bilangan2) {
        echo "Bilangan $bilangan1 lebih besar dari $bilangan2";
    }else if ($bilangan1 < $bilangan2) {
        echo "Bilangan $bilangan1 lebih kecil dari $bilangan2";
    }
}


?>