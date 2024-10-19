<?php 

// Jualan Produk 
// Komik 
// Game 

class Produk {
    public $judul = "Judul",
           $penulis ="Penulis",
           $penerbit = "Penerbit",
           $harga ="harga";


    public function getlabel(){
        return "$this->judul, $this->penulis ";
    }

}

$Produk3 = new Produk();
$Produk3 -> judul = "Naruto";
$Produk3 -> penulis = "Masahi Khisimoto";
$Produk3 -> penerbit = "Shonen Jump";
$Produk3 -> harga = 30000;

$Produk4 = new Produk();
$Produk4 -> judul = "Boruto";
$Produk4 -> penulis = "Ukyo Kodachi";
$Produk4 -> penerbit = "Viz Media";
$Produk4 -> harga = 250000;

echo "komik : " . $Produk3->getlabel();
echo "<br>";
echo "Game :" . $Produk4->getlabel();
// $Produk1 = new Produk ();
// $Produk1 -> judul = "Naruto";
// var_dump($Produk1);

// $Produk2 = new Produk ();
// $Produk2 -> tambahProperty = "Hahaha";
// var_dump($Produk2)

?>