<?php
class Produk {
  public $judul,
          $penulis,
          $penerbit,
          $harga,
          $jmlHalaman,
          $waktuMain,
          $tipe;
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit ="penerbit", $harga = 0, 
  $jmlHalaman = 0, $waktuMain = 0){
  {
    $this->judul    = $judul;
    $this->penulis  = $penulis;
    $this->penerbit = $penerbit;
    $this->harga    = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap() {
    // komik : naruto | Mashashi Kishimoto, Shonen Jump(rp .3000) - 100 halaman.
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp, {$this->harga})";
    if($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ($this->tipe =="Game") {
      $str .= " ~{$this->waktuMain} Jam.";
    }
    return $str;
  }
}

class CetakInfoProduk {

  public function cetak($produk)
  {
    $str="{$produk->judul} | {$produk->getLabel()} (Rp.{$produk->harga})";
    return $str; 
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100,0,"komik");
$produk2 = new Produk("Uncharted", "Neil Druckermann", "Sony Computer", 25000,0, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

//Komik : Masashi Kishimoto, Shonen Jump
//Game : Neil Druckermann, Sony Computer
//Naruto | Masashi Kishimoto, Shonen Jump (Rp.30000)

// komik : naruto | Mashashi Kishimoto, Shonen Jump(rp .3000) - 100 halaman
// Game : Uncharted | Neil Druckman, Sony Computer (rp.250000) - 50jam
a
