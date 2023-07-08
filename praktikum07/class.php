<?php 
// Bikin Class BMIPASIEN
class bmiPasien {
    // Bikin property
    public $nama, $berat, $tinggi, $umur, $jk;

    

    // construct : data nya diset sesuai user
    function __construct($nama, $berat, $tinggi, $umur, $jk){
        // Masukin data
        $this->nama = $nama;
        $this->berat= $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk= $jk;     

    }

    // bikin method (fungsi)
    public function hasilBMI(){
        //Logic
        $tinggi_m = $this->tinggi / 100;
        // rumus bmi
        $bmi = $this->berat / ($tinggi_m * $tinggi_m);
        return $bmi;
    }

    // bikin method
    public function status(){
        // simpen data bmi
        $bmi = $this->hasilBMI();
        // cek data menjadi status
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";     
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Berat badan normal";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan berat badan";
        } else {
            return "Obesitas";
        }    
        }

    }
    
        

// Bikin objek
$pasien = new bmiPasien("Lidiana", "67", "160", "18", "P");
echo "Nama : " . $pasien->nama . "<br>";
echo "Bmi : " . $pasien->hasilBMI() . "<br>";
echo "Status BMi : " . $pasien->status() . "<br>";

?>