<?php 
function veritabani_baglan() {
    $servername = "localhost";
    $username = "crm";
    $password = "sevinc8590";
    $dbname = "crm";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

   
    if ($conn->connect_error) {
        die("Veritabanına bağlantı sağlanamadı: " . $conn->connect_error);
    }

    return $conn;
}


function ikifaktorfonksiyon($uzunluk = 6) {
    $min_deger = pow(10, $uzunluk - 1);
    $max_deger = pow(10, $uzunluk) - 1;
    return mt_rand($min_deger, $max_deger);
}


?>
