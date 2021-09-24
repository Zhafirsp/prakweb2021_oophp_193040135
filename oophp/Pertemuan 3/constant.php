<?php
/*
Muhammad Zhafir Sunandy Pramana
193040135
https://github.com/Zhafirsp/prakweb2021_oophp_193040135.git
Pertemuan 3 - 24 September 2021
Mempelajari tentang Constant
*/
?>

<?php

// define('NAMA', 'Zhafir');

// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;


// class Coba
// {
//   const NAMA = 'Zhafir';
// }

// echo Coba::NAMA;

// echo __FILE__;


// function coba()
// {
//   return __FUNCTION__;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
