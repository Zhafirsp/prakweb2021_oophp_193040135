<?php
/*
Muhammad Zhafir Sunandy Pramana
193040135
https://github.com/Zhafirsp/prakweb2021_oophp_193040135.git
Pertemuan 2 - 17 September 2021
Mempelajari tentang Property dan Method
*/
?>

<?php

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = " Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharter";
$produk4->penulis = " Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 2500000;


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
