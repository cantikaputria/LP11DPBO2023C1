<?php

// Saya Cantika Putri Arbiliansyah dengan NIM 2103727 mengerjakan soal UAS dalam mata kuliah Desain dan Pemrograman Berorientasi Objek, untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");

$tp = new TampilPasien();
$data = $tp->tampil();

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if ($id > 0) {
        $tp->delete($id);
    }
}