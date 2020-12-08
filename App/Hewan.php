<?php

trait Hewan
{
    protected $nama;
    protected $darah = 50;
    protected $jumlahKaki;
    protected $keahlian;

    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($value)
    {
        $this->nama = $value;
    }

    public function getDarah()
    {
        return $this->darah;
    }

    public function setDarah($value)
    {
        if ($value == null || $value == 0) {
            $this->darah = 50;
        } else {
            $this->darah = $value;
        }
    }

    public function getJumlahKaki()
    {
        return $this->jumlahKaki;
    }

    public function setJumlahKaki($value)
    {
        $this->jumlahKaki = $value;
    }

    public function getKeahlian()
    {
        return $this->keahlian;
    }

    public function setKeahlian($value)
    {
        $this->keahlian = $value;
    }

    abstract public function abstraksi();
}
