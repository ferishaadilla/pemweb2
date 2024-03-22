<?php

class mahasiswa {
    //property
    //(ipk,nama,nim,prodi,angkatan)
    public $ipk;
    public $nama;
    public $nim;
    public $prodi;
    public $angkatan;

    //method
    function __construct($_nim, $_nama){
        $this->nim = $_nim;
        $this->nama = $_nama;
    }

    function predikat_ipk(){
        if($this->ipk < 2.0){
            return 'CUKUP';
        } elseif ($this->ipk >= 2.0 && $this->ipk < 3.0){
            return 'BAIK';
        } elseif ($this->ipk >= 3.0 && $this->ipk < 3.75){
            return 'MEMUASKAN';
        } elseif ($this->ipk >=  3.75 && $this->ipk <= 4.0){
            return 'CUM LAUDE';
        } else {
            return 'NILAI DI LUAR JANGKAUAN';
        }
    }
}

// instan object
$mahasiswa1 = new Mahasiswa(1101212, 'Ferisha');
$mahasiswa1->ipk = 3.75;
$mahasiswa1->prodi = 'Teknik Informatika';
$mahasiswa1->angkatan = 2023;


