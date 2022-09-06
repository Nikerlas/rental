<?php
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $no_polisi = $_POST['no_polisi'];
    $nama_kendaraan = $_POST['nama_kendaraan'];
    $tipe = $_POST['tipe'];
    $warna = $_POST['warna'];
    $no_rangka = $_POST['no_rangka'];
    $no_mesin = $_POST['no_mesin'];
    $bahan_bakar = $_POST['bahan_bakar'];
    $thn_kendaraan = $_POST['thn_kendaraan'];
    $status = $_POST['status'];
}

$query = "INSERT INTO kendaraantbl (no_polisi, nama_kendaraan, tipe, warna, no_rangka, no_mesin, bahan_bakar, thn_kendaraan, status) VALUES ('$no_polisi', '$nama_kendaraan', '$tipe', '$warna', '$no_rangka', '$no_mesin', '$bahan_bakar', '$thn_kendaraan', '$status')";
$sql = mysqli_query($conn, $query);

if($sql){
    echo "<script>alert('Data berhasil ditambahkan')</script>";
    header("Refresh:0; url=index.html");
}else{
    echo "<script>alert('Data gagal ditambahkan')</script>";
    header("Refresh:0; url=tambahkendaraan.html?status=gagal");
}
?>