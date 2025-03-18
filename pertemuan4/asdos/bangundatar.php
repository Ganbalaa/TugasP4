<?php

// Class Lingkaran
class Lingkaran {
    public $jari;

    function __construct($jari) {
        $this->jari = $jari;
    }

    function getLuas() {
        return pi() * pow($this->jari, 2);
    }

    function getKeliling() {
        return 2 * pi() * $this->jari;
    }
}

// Class Segitiga
class Segitiga {
    public $alas;
    public $tinggi;
    public $sisi1;
    public $sisi2;
    public $sisi3;

    function __construct($alas, $tinggi, $sisi1, $sisi2, $sisi3) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
        $this->sisi1 = $sisi1;
        $this->sisi2 = $sisi2;
        $this->sisi3 = $sisi3;
    }

    function getLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    function getKeliling() {
        return $this->sisi1 + $this->sisi2 + $this->sisi3;
    }
}

// Class Persegi
class Persegi {
    public $sisi;

    function __construct($sisi) {
        $this->sisi = $sisi;
    }

    function getLuas() {
        return pow($this->sisi, 2);
    }

    function getKeliling() {
        return 4 * $this->sisi;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Bangun Datar</title>
</head>
<body>
    <div class="section">
        <h2>Perhitungan Bangun Datar</h2>

        <h3>Lingkaran</h3>
        <?php
        $lingkaran = new Lingkaran(7);
        echo "Jari-jari: " . $lingkaran->jari . "<br>";
        echo "Luas: " . number_format($lingkaran->getLuas(), 2) . "<br>";
        echo "Keliling: " . number_format($lingkaran->getKeliling(), 2) . "<br>";
        ?>
        <hr>

        <h3>Segitiga</h3>
        <?php
        $segitiga = new Segitiga(10, 5, 7, 8, 9);
        echo "Alas: " . $segitiga->alas . "<br>";
        echo "Tinggi: " . $segitiga->tinggi . "<br>";
        echo "Luas: " . number_format($segitiga->getLuas(), 2) . "<br>";
        echo "Keliling: " . number_format($segitiga->getKeliling(), 2) . "<br>";
        ?>
        <hr>

        <h3>Persegi</h3>
        <?php
        $persegi = new Persegi(6);
        echo "Sisi: " . $persegi->sisi . "<br>";
        echo "Luas: " . $persegi->getLuas() . "<br>";
        echo "Keliling: " . $persegi->getKeliling() . "<br>";
        ?>
    </div>
</body>
</html>
