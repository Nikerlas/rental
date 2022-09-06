<?php

include "koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM kendaraantbl WHERE id=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
if (!$sql) {
    echo "<script>alert('Data tidak ditemukan')</script>";
}

if (isset($_POST['update'])) {
    $no_polisi = $_POST['no_polisi'];
    $nama_kendaraan = $_POST['nama_kendaraan'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];
    $no_rangka = $_POST['no_rangka'];
    $no_mesin = $_POST['no_mesin'];
    $bahan_bakar = $_POST['bahan_bakar'];
    $thn_kendaraan = $_POST['thn_kendaraan'];
    $status = $_POST['status'];

    $query = mysqli_query($conn, "UPDATE kendaraantbl SET no_polisi='$no_polisi', nama_kendaraan='$nama_kendaraan', tipe='$tipe', warna='$warna', no_rangka='$no_rangka', no_mesin='$no_mesin', bahan_bakar='$bahan_bakar', thn_kendaraan='$thn_kendaraan', status='$status' WHERE id=$id");

    if ($sql) {
        echo "<script>alert('Data berhasil diupdate')</script>";
        header("Refresh:0; url=master.php");
    } else {
        die("gagal update...");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
        <br>
        <a href="index.php">Home</a>
        <br>
        <br>
        
        <form name="update_user" method="post" >
            <table border="0">
                <tr>
                    <td>No Polisi</td>
                    <td><input type="text" name="no_polisi" value=<?php echo $data['no_polisi']; ?>></td>
                </tr>
                <tr>
                    <td>Nama Kendaraan</td>
                    <td><input type="text" name="nama_kendaraan" value=<?php echo $data['nama_kendaraan']; ?>></td>
                </tr>
                <tr>
                    <td>Tipe</td>
                    <td><input type="text" name="tipe" value=<?php echo $data['tipe']; ?>></td>
                </tr>
                <tr>
                    <td>Warna</td>
                    <td><input type="text" name="warna" value=<?php echo $data['warna']; ?>></td>
                </tr>
                <tr>
                    <td>No Rangka</td>
                    <td><input type="text" name="no_rangka" value=<?php echo $data['no_rangka']; ?>></td>
                </tr>
                <tr>
                    <td>No Mesin</td>
                    <td><input type="text" name="no_mesin" value=<?php echo $data['no_mesin']; ?>></td>
                </tr>
                <tr>
                    <td>Bahan Bakar</td>
                    <td><input type="text" name="bahan_bakar" value=<?php echo $data['bahan_bakar']; ?>></td>
                </tr>
                <tr>
                    <td>Tahun Kendaraan</td>
                    <td><input type="text" name="thn_kendaraan" value=<?php echo $data['thn_kendaraan']; ?>></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><input type="text" name="status" value=<?php echo $data['status']; ?>></td>
                </tr>
            </table>
            <tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
</form>
</center>
</body>
</html>