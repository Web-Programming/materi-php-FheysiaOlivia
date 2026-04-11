<?php
require 'produk.php';
require 'service.php';
//bisa pakai include
//include_once or require_once 

use app\produk\Item as ProdukItem;
use app\service\Item as ServisItem;

$produk = new ProdukItem("Laptop");
$servis = new ServisItem("Perbaikan Laptop");

// $produk->nama = "Laptop";
// $servis->nama = "Service Laptop";

echo $produk->info() ."\n";
echo $servis->info();