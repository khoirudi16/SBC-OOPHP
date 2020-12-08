<?php

require_once 'Hewan.php';
require_once 'Fight.php';

class Harimau
{

    use Hewan, Fight;

    public static $tipeHewan = "Harimau";

    public function __construct($nama, $jumlahKaki, $keahlian, $attackPower, $defensePower)
    {
        $this->nama = $nama;
        $this->jumlahKaki = $jumlahKaki;
        $this->keahlian = $keahlian;
        $this->attackPower = $attackPower;
        $this->defensePower = $defensePower;
    }

    public function getInfoHewan()
    {
        $result = "INFO HEWAN <br><br>";
        $result .= "Tipe : " . self::$tipeHewan . "<br>";
        $result .= "Nama : {$this->getNama()} <br>";
        $result .= "Darah : {$this->getDarah()} <br>";
        $result .= "Keahlian : {$this->getKeahlian()} <br>";
        $result .= "Jumlah Kaki : {$this->getJumlahKaki()} <br>";
        $result .= "Attack Power : {$this->attackPower} <br>";
        $result .= "Defense Power : {$this->getDefensePower()} <br>";

        return $result;
    }

    public function abstraksi()
    {
        //"harimau_1 sedang lari cepat";
        $abstraksi = "{$this->nama} sedang {$this->keahlian}";
        return $abstraksi;
    }

    public function serang($attackTo)
    {
        $result = "";
        if (is_object($attackTo)) {
            $result = "{$this->getNama()} sedang menyerang {$attackTo->getNama()}";
            return $result;
        } else {
            return $result;
        }
    }

    public function diserang($attackFrom)
    {
        //harimau_1 sedang diserang
        $result = "";
        if (is_object($attackFrom)) {
            $currentDarah = $this->getDarah() - ($attackFrom->getAttackPower() / $this->getDefensePower());
            $this->setDarah($currentDarah);
            $result = "{$this->getNama()} sedang diserang";
            return $result;
        } else {
            return $result;
        }
    }
}
