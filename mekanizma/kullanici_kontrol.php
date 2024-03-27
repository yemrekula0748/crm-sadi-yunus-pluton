<?php
session_start();





if(isset($_SESSION['giris_yapildimi'])) {
    if($_SESSION['giris_yapildimi'] === "evet") {
        
    } else {
        header("Location: giris.php");
        exit;
    }
} else {
    echo "Hata: Değişken tanımlı değil.";
}
?>