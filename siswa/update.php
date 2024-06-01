<?php
if (isset($_POST['update'])) {
    require_once('config.php');
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];


    $sql = "UPDATE siswa SET nis='$nis', nama='$nama', jk='$jk' WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location: index.php?m=siswa&s=view');
    } else {
        include "index.php?m=siswa&s=view";
        echo '<script language="JavaScript">';
            echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}