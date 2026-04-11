<?php
namespace Kendaraan;
//cara penulisan class Mobil//
class Mobil{
    //cara penulisan property//
    public $warna;
    public $merk;

    //cara penulisan method//
    function maju(){
        //isi method maju()//
        return "Mobil maju";
    }
    function berhenti(){
        //isi method berhenti()//
        return "Mobil berhenti";
    }
}
//cara membuat namspace
// use kendaraan\Mobil;
//membuat inisial namespace
use Kendaraan\mobil as KMobil;

//instansiasi object dari namepass alias
$mobil_ahmad = new KMobil;
//instansiasi object
// $mobil_ahmad = new Mobil();
$mobil_anton = new Mobil();

//set property
$mobil_ahmad->warna = "Hitam";
$mobil_ahmad->merk = "Toyota";

//tampilkan property
echo "Mobil Ahmad";
echo "<br>Warna : ". $mobil_ahmad->warna;
echo "<br>Merk : ". $mobil_ahmad->merk;

//tampilkan methid
echo $mobil_ahmad->maju();
echo"<br>";
echo $mobil_ahmad->berhenti();
?>