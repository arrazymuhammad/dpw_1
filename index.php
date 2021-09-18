<?php

include "carnivora.php";

$kucing = new Carnivora;
$kucing->nama = "Bob";
$kucing->suara = "Meong";
echo $kucing->jumlah_kaki;
