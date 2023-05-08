<?php

class mahasiswa{
    public $nim = "321";
    public $nama = "wildan";
    public $jurusan = "rpl";
    function tampil_biodata(){
        echo $this-> nim;
        echo $this-> nama;
    }
}
$tampil = new mahasiswa();
$tampil->tampil_biodata();    