<?php
include "../koneksi.php";
if (isset($_POST['tambah'])) {
    $insertSql = mysqli_query($conn, "INSERT into anggota_stt (Nama,Jenis_kelamin,Umur,Nomer_Hp,Email,Alamat,Status)
    values
    ('$_POST[Nama]','$_POST[Jenis_kelamin]','$_POST[Umur]','$_POST[Nomer_Hp]','$_POST[Email]','$_POST[Alamat]','$_POST[Status]')");
    if ($insertSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Ditambah...!'); location.href=\"home.php\";</script>";
    }
}
