<?php
$conn = mysqli_connect("localhost", "root", "", "form_login");
// if ($conn) {
//     echo "wow";
// } else {
//     echo "bad";
// }


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM anggota_stt WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;
    $id = $data["id"];
    $Nama = htmlspecialchars($data["Nama"]);
    $Jenis_kelamin = htmlspecialchars($data["Jenis_kelamin"]);
    $Umur = htmlspecialchars($data["Umur"]);
    $Nomer_Hp = htmlspecialchars($data["Nomer_Hp"]);
    $Email = htmlspecialchars($data["Email"]);
    $Alamat = htmlspecialchars($data["Alamat"]);
    $Status = htmlspecialchars($data["Status"]);

    $query = "UPDATE anggota_stt SET 
                Nama='$Nama', 
                Jenis_kelamin='$Jenis_kelamin', 
                Umur='$Umur', 
                Nomer_Hp= '$Nomer_Hp', 
                Email='$Email',
                Alamat= '$Alamat',
                Status= '$Status'
            WHERE id= $id ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
