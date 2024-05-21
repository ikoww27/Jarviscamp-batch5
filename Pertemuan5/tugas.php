<?php

// Class Kendaraan
class Kendaraan
{
    public $merk;
    public $tahun;

    // Konstruktor untuk class Kendaraan
    public function __construct($merk, $tahun)
    {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }

    // Method untuk menampilkan informasi kendaraan
    public function tampilkanInfo()
    {
        return "Merk: " . $this->merk . ", Tahun: " . $this->tahun;
    }
}

// Class Mobil yang mewarisi class Kendaraan
class Mobil extends Kendaraan
{
    public $tipeBahanBakar;

    // Konstruktor untuk class Mobil
    public function __construct($merk, $tahun, $tipeBahanBakar)
    {
        // Memanggil konstruktor parent class
        parent::__construct($merk, $tahun);
        $this->tipeBahanBakar = $tipeBahanBakar;
    }

    // Method untuk menampilkan informasi mobil
    public function tampilkanInfoMobil()
    {
        return parent::tampilkanInfo() . ", Tipe Bahan Bakar: " . $this->tipeBahanBakar;
    }
}

// Membuat object berdasarkan class Mobil
$mobilBaru = new Mobil("Toyota", 2021, "Bensin");

// Menampilkan informasi mobil
echo $mobilBaru->tampilkanInfoMobil();
