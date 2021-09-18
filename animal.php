<?php
class Animal
{
    public $nama;
    private $pin_atm = 4;
    public $suara = "Belum Terdefinisi";
    public function bersuara()
    {
        return $this->suara;
    }
    public function terbang()
    {
        return "wuzzzzz";
    }
}
