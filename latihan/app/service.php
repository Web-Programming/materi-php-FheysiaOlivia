<?php
namespace service;
class item{
    public $nama;
    public function __construct($nama){
        $this->nama = $nama;
    }
    function info(){
        return "service : ". $this->nama;
    }
}
?>