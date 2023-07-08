<?php 
// Buat Array
$animals = ["Kucing", "ayam", "ikan", "burung"];
echo $animals[0] . "<br>";
echo $animals[3] . "<br>";

//Looping Array
foreach ($animals as $animal) {
    echo $animal . "<br>";
}

echo "<br>";
// Buat array asosiatif
$mahasiswa = ["Nama"=>"Sutra", "Umur"=>18, "Alamat"=>"Depok"];

echo $mahasiswa["Nama"] ."<br>";

foreach ($mahasiswa as $key => $value) {
    echo $key . " : " . $value;
    echo "<br>";
}
echo "<br>";

// Buat Array Multidimensi
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];

echo $dosen[0][1];
echo "<br>";

foreach ($dosen as $dsn) {
    echo "Nama Dosen : " . $dsn [0];
    echo "matkul : " . $dsn [1];
    echo "<br>";
}
?>  