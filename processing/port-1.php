<?php


if (isset($_POST['mulai'])) {
    $jumlah = $_POST['jumlah'];
    header("location:../index.php?jumlah=$jumlah");
}

if (isset($_POST['tambahkan'])) {
    $jumlah = $_GET['jumlah'];
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    header("location:../index.php?jumlah=$jumlah&&bil1=$bil1&&bil2=$bil2");
}

if (isset($_POST['reset'])) {
    header("location:../index.php");
}

if (isset($_POST['cek-jawaban'])) {
    $jumlah = $_GET['jumlah'];
    $bil1 = $_GET['bil1'];
    $bil2 = $_GET['bil2'];
    $hasil = $_GET['hasil'];
    $status;

    if ($_POST['input-jawaban'] == $hasil) {
        $status = 1;
        header("location:../index.php?jumlah=$jumlah&&bil1=$bil1&&bil2=$bil2&&status=$status");
    } else {
        $status = 0;
        header("location:../index.php?jumlah=$jumlah&&bil1=$bil1&&bil2=$bil2&&status=$status");
    }
}


if (isset($_POST['cek'])) {
    $pesan = $_GET['pesan'];
    header("location:../index.php?pesan=$pesan");
}
