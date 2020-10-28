<?php
include "../koneksi.php";
if (isset($_POST['update'])) {
    // print_r($_POST);
    $updateSql = mysqli_query($conn, "UPDATE anggota_stt SET 
        Nama='$_POST[Nama]',
        Jenis_kelamin='$_POST[Jenis_kelamin]',
        Umur='$_POST[Umur]',
        Nomer_Hp='$_POST[Nomer_Hp]',
        Email='$_POST[Email]',
        Alamat='$_POST[Alamat]',
        Status='$_POST[Status]'
        WHERE id='$_POST[id]'
    ");
    if ($updateSql) {
        echo "<script type='text/javascript'>alert('Data Berhasil Diupdate...!'); location.href=\"home.php\";</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data gagal Diupdate...!'); location.href=\"home.php\";</script>";
    }
}
