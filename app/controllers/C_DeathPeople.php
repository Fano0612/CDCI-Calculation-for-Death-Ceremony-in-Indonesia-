<?php

include_once("app\models\M_DeathPeople.php");

class C_DeathPeople {
    public $model;
    public function __construct(){
        $this->model = new M_DeathPeople();
    }
    public function Index(){
        $D = $this->model->SelectAll();
        include "index.php";
    }
    public function Edit($Number){
        $D = $this->model->Selectdeath_people($Number); 
        $row = $this->model->Catch($D); 
        include "Edit.php"; 
    }
    public function Insert(){
        include "index.php"; 
    }
    public function Update(){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tk = $_POST['tanggalkematian'];
        $Update = $this->model->Updatedeath_people($nik, $nama, $tk);
        echo "<script>window.location.href='index.php';</script>";
    }
    public function Delete($nomor){
        $Delete = $this->model->Deletedeath_people($nomor);
    }
    public function Insertx(){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tk = $_POST['tanggalkematian'];
        $Insert = $this->model->Insertdeath_people($nik, $nama, $tk);
        // header("location:index.php");
        }
    public function Counter($tanggal){
        $tigahari = date('Y-m-d', strtotime($tanggal . ' +2 day'));
        $tujuhari = date('Y-m-d', strtotime($tanggal . ' +6 day'));
        $empatpuluhhari = date('Y-m-d', strtotime($tanggal . ' +39 day'));
        $seratushari = date('Y-m-d', strtotime($tanggal . ' +99 day'));
        $satutahun = date('Y-m-d', strtotime($tanggal . ' +364 day'));
        $duatahun = date('Y-m-d', strtotime($tanggal . ' +729 day'));
        $seribuhari = date('Y-m-d', strtotime($tanggal . ' +999 day'));
        $JDate = $this->JavaneseDate($tanggal);
        return "Meninggal\t= {$JDate}<br>
        3 Hari\t= {$this->JavaneseDate($tigahari)}<br>
        7 Hari\t= {$this->JavaneseDate($tujuhari)}<br>
        40 Hari\t= {$this->JavaneseDate($empatpuluhhari)}<br>
        100 Hari\t= {$this->JavaneseDate($seratushari)}<br>
        1 Tahun\t= {$this->JavaneseDate($satutahun)}<br>
        2 Tahun\t= {$this->JavaneseDate($duatahun)}<br>
        1000 Hari\t= {$this->JavaneseDate($seribuhari)}
        ";
        
        
    }
        function JavaneseDate($tanggal){
            $Splitting         = explode('-', $tanggal);
          
            $bulan            = array ('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
            $hari             = array('Mon'=>'Senin','Tue'=>'Selasa','Wed'=>'Rabu','Thu'=>'Kamis','Fri'=>'Jumat','Sat'=>'Sabtu',
                                 'Sun'=>'Minggu');
          
            $Javadate       = array ('Pon', 'Wage', 'Kliwon', 'Legi', 'Pahing');
          
            $sampleTglJawa    = 07;
            $sampleBulanJawa  = 02;
            $sampleTahunJawa  = 1997;
          
            $jd1           = GregorianToJD($sampleBulanJawa, $sampleTglJawa, $sampleTahunJawa);
            $jd2           = GregorianToJD($Splitting[1], $Splitting[2], $Splitting[0]);
            $selisih          = $jd2 - $jd1;
          
            $mod           = $selisih % 5;
          
            $shortDate        = $Splitting[2].'-'.$Splitting[1].'-'.$Splitting[0];
            $nameOfDay        = date('D', strtotime($shortDate));
            $Javadatex          = $Javadate[$mod];
            $namaHari         = $hari[$nameOfDay];
            $penentuBulan       = (int)$Splitting[1]-1;
            $newTgl             = $Splitting[2];
            $newBulan           = $bulan[$penentuBulan];
            $newTahun         = $Splitting[0];
          
            return $namaHari .' '. $Javadatex ." ". $newTgl .' '. $newBulan .' '. $newTahun;
        }
    



    public function __destruct(){
        }
    }        
