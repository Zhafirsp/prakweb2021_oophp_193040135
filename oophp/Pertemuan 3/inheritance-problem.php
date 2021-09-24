<?php
/*
Muhammad Zhafir Sunandy Pramana
193040135
https://github.com/Zhafirsp/prakweb2021_oophp_193040135.git
Pertemuan 3 - 24 September 2021
Mempelajari tentang Inheritance Bagian 1
*/
?>

<?php

class Produk
{
  public  $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduck()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " - {$this->waktuMain} Jam.";
    }
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 0, 50, "Game");



echo $produk1->getInfoProduck();
echo "<br>";
echo $produk2->getInfoProduck();
echo "<br>";


// komik : Naruto | Mashasi Kishimoto, Shonen Jump (Rp. 3000) - 100 halaman
// Game : Uncharter | Neil Druckmann, Sony Computer (Rp. 250000) - 50 jam