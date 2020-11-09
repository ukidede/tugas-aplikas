<?php

include '../koneksi.php';
$id = $_GET["id"];
$stt = query("SELECT * FROM anggota_stt WHERE id = $id ")[0];
if (isset($_POST["submit"])) {
    if (edit($_GET) > 0) {

        echo " 
                        <script>
                                alert('Data Berhasil Di Edit !' );
                                document.location.href = 'home.php';
                        </script>
                ";
    } else {
        echo " 
                <script>
                        alert('Data Gagal Di Edit !' );
                        document.location.href = 'home.php';
                </script>
                ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Edit Data Anggota</h2>
        <form action="edit-proses.php" method="POST" class="needs-validation" novalidate>
            <input type="hidden" name="id" value="<?= $stt["id"]; ?> ">
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Lengkap Anda" name="Nama" required value="<?= $stt["Nama"]; ?>">
            </div>
            <div class="form-group">
                <label for="Jenis_kelamin">Jenis Kelamin :</label>
                <input type="Jenis_kelamin" class="form-control" id="Jenis_kelamin" placeholder="Laki-Laki / Perempuan" name="Jenis_kelamin" required value="<?= $stt["Jenis_kelamin"]; ?>">
            </div>
            <div class="form-group">
                <label for="Umur">Umur :</label>
                <input type="Umur" class="form-control" id="Umur" placeholder="Masukkan Umur anda" name="Umur" required value="<?= $stt["Umur"]; ?>">
            </div>
            <div class="form-group">
                <label for="Nomer_Hp">Nomer Hp :</label>
                <input type="Nomer_Hp" class="form-control" id="Nomer_Hp" placeholder="Masukkan Nomer_Hp Anda" name="Nomer_Hp" required value="<?= $stt["Nomer_Hp"]; ?>">
            </div>
            <div class="form-group">
                <label for="Email">Email :</label>
                <input type="text" class="form-control" id="Email" placeholder="Masukkan Nama Lengkap Anda" name="Email" required value="<?= $stt["Email"]; ?>">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat :</label>
                <input type="text" class="form-control" id="Alamat" Alamat placeholder="Masukkan Alamat Anda" name="Alamat" required value="<?= $stt["Alamat"]; ?>">
            </div>
            <div class="form-group">
                <label for="Status">Status :</label>
                <input type="text" class="form-control" id="Status" Status placeholder="Masukkan Status Anda" name="Status" required value="<?= $stt["Status"]; ?>">
                <div class="invalid-feedback">Nama harus diisi......!</div>
            </div>
            <button type="submit" class="btn btn-primary" name="update">Simpan</button>
            <button type="button" class="btn btn-secondary" onclick="self.history.back()">Cancel</button>
    </div><br>
    </form>
    </div>

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

</body>

</html>