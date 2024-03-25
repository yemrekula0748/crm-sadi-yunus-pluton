<?php

if(isset($_POST['ikifaktorlu']) && isset($_POST['tfa'])) {
    
    $ikifaktorlu = $_POST['ikifaktorlu'];
    $tfa = $_POST['tfa'];
    
    
    if($ikifaktorlu == $tfa) {
    
        echo "Başarılı";
    } else {
      
        echo "Hata: ikifaktorlu ve tfa değerleri eşit değil";
    }
} else {
  
    echo "Hata: Post verileri eksik";
}
?>
