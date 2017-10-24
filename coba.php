<?php
 
 class mobil{
    var $merek;
    var $warna;
    var $harga;
    var $cc;

    function __construct($merek,$warna,$harga,$cc){
       $this->merek = $merek;
       $this->warna = $warna;
       $this->harga = $harga;
       $this->cc = $cc;
    }
    function get_merek(){
        return $this->merek;
    }
    function get_warna(){
        return $this->warna;
    }
    function get_harga(){
        return $this->harga;
    }
    function get_cc(){
        return $this->cc;
    }
    
}
?>