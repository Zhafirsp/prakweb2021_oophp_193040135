<?php
/*
Muhammad Zhafir Sunandy Pramana
193040135
https://github.com/Zhafirsp/prakweb2021_oophp_193040135.git
Pertemuan 3 - 24 September 2021
Mempelajari tentang Static
*/
?>

<?php

// class ContohStatic
// {
//   public static $angka = 1;

//   public static function halo()
//   {
//     return "Halo." . self::$angka++ . " kali.";
//   }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo " . self::$angka++ . " kali. <br>";
  }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
