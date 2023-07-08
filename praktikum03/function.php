<?php 
// Buat fungsi
function hitungUmur($thn_lahir) {
    // code fungsi
    $thn_sekarang = 2023;
    // Hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // kembaliin umur
    return $umur;

}

// panggil fungsi
echo "umur saya adalah" . hitungUmur(2001);
?>