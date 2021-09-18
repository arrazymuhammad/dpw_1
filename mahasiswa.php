<?php
class Mahasiswa
{
    public $nim;
    public $nama;
    public $jenis_kelamin;
    public $prodi;
    public $kehadiran = "Belum Hadir";

    public function absen()
    {
        $this->kehadiran = "Sudah Hadir";
    }
}
