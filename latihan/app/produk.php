<?php
namespace app\produk;
class item{
    public $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    function info(){
        return "produk : ". $this->nama;
    }
}
?>