<?php

// define('NAMA', 'Dimas Nanda Herambang');
// echo NAMA;

// echo "<br>";

// const UMUR = 22;
// echo UMUR;


// class Coba {
//     const NAMA = 'Dimas Nanda Herlambang';
// }
// echo Coba::NAMA;


// echo __LINE__;


// function coba() {
//     return __FUNCTION__;
// }
// echo coba();


class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;

?>