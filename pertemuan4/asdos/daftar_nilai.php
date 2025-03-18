<?php 
require_once 'nilai_mahasiswa.php';

$data_mhs =[];

// Data Awal
$data_mhs[] = new NilaiMahasiswa("Ganbala", "PemWeb", 30,20,15);
$data_mhs[] = new NilaiMahasiswa("Gan", "PemWeb", 40,80,35);
$data_mhs[] = new NilaiMahasiswa("Bala", "PemWeb", 20,70,45);



?>

<h3>Input Mahasiswa</h3>

<form method="POST" action="">
    <label for="">Nama</label>
    <input type="text" name="nama" id="nama"><br><br>
    <label for="">Mata Kuliah</label>
    <input type="text" name="matakuliah" id="matakuliah"><br><br>
    <label for="">UTS</label>
    <input type="number" name="nilai_uts" id="nilai_uts"><br><br>
    <label for="">UAS</label>
    <input type="number" name="nilai_uas" id="nilai_uas"><br><br>
    <label for="">Tugas</label>
    <input type="number" name="nilai_tugas" id="nilai_tugas"><br><br>
    <input type="submit" value="simpan">
</form>

<h3>Daftar Nilai Mahasiswa</h3>

<table border="1" cellpadding="2" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
            <th>Kelulusan</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $nomor = 1;
    foreach($data_mhs as $mhs){
        echo "<tr>";
        echo "<td>".$nomor."</td>";
        echo "<td>".$mhs->nama."</td>";
        echo "<td>".$mhs->matakuliah."</td>";
        echo "<td>".$mhs->nilai_uts."</td>";
        echo "<td>".$mhs->nilai_uas."</td>";
        echo "<td>".$mhs->nilai_tugas."</td>";
        echo "<td>" . number_format($mhs->getNA(), 2). "</td>";
        echo "<td>".$mhs->kelulusan()."</td>";
        echo "</tr>";
        $nomor++;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST){
        $nama = $_POST['nama'];
        $matakuliah = $_POST['matakuliah'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $data_mhs[] = new NilaiMahasiswa($nama, $matakuliah, $nilai_uts, $nilai_uas, $nilai_tugas);
    }


    ?>
    </tbody>
</table>
<tr>
