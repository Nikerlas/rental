<?php
include "koneksi.php";
session_start();

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM kendaraantbl WHERE id=$id";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>alert('Data berhasil dihapus')</script>";
        header("Refresh:0; url=lihat_barang.php");
    }  else {
        die("gagal menghapus...");
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
        <h1>Nine Rental Mobil Segala Merk</h1>
        <h1>Jl. Peterongansari No 2 Semarang</h1>
        <br>
        <h2>Data Kendaraan</h2>
        <br>
        <a href="tambahkendaraan.html">Tambah</a>
        <br>
        <br>
        <table border="1" style="color: black; border-radius: 5px;">
        <thead>
            <tr class="align-middle" style="text-align: center;">
                <th>ID</th>
                <th>No Polisi</th>
                <Th>Nama Kendaraan</th>
                <th>Tipe</th>
                <th>Warna</th>
                <th>No Rangka</th>
                <th>No Mesin</th>
                <th>Bahan Bakar</th>
                <th>Tahun Kendaraan</th>
                <th>Status</th>
                <th colspan="2">Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $no = 0;
                $tabel = mysqli_query($conn, "SELECT * FROM kendaraantbl");
                while ($data = mysqli_fetch_array($tabel)) {
                    $no++;
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data['no_polisi']; ?></td>
                        <td><?php echo $data['nama_kendaraan']; ?></td>
                        <td><?php echo $data['tipe']; ?></td>
                        <td><?php echo $data['warna']; ?></td>
                        <td><?php echo $data['no_rangka']; ?></td>
                        <td><?php echo $data['no_mesin']; ?></td>
                        <td><?php echo $data['bahan_bakar']; ?></td>
                        <td><?php echo $data['thn_kendaraan']; ?></td>
                        <td><?php echo $data['status']; ?></td>
                        <td><a href='hapus.php?id="<?=$data['id']?>"' class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin untuk menghapus ?')">Hapus</a></td>
                        <td><a href='edit.php?id="<?=$data['id']?>"' class="btn btn-warning btn-sm">Edit</a></td>
                    <tr>
                        <?php
                }
                ?>
    </center>
</body>
</html>