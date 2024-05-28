<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
</head>
<body> 
    <center>
        <form action="" method = "post">
            <h1>Bensin Shell Gacor</h1>
            <label for="liter">Masukan Jumlah Liter :</label>
            <input type="number" name = "liter" required> 
            <label for = "jenis">Pilih Jenis Bensin : </label>
            <select name="jenis" id="haha" required>
            <option value="SSuper">SSuper</option>
            <option value="SVPower">SVPower</option>
            <option value="SVPowerDiesel">SVPowerDiesel</option>
            <option value="SVPowerTurbo"> SVPowerTurbo</option>
            </select>
            <button name = "kirim">Hitung total</button>
        </form>
    </center>
</body>
</html>

<?php
include "bahanbakar.php" ;
$proses = new Beli();
$proses->setHarga(15530, 16350 , 16130 , 16570 );
if(isset($_POST['kirim']) ) {
    $proses->jumlah = $_POST['liter'];
    $proses->jenis = $_POST['jenis'];
    echo "<br>";

    $proses->cetakPembelian();
}
?>