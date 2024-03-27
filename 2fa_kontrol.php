<?php

if(isset($_POST['tfa'])) {
    session_start();

    $ikifaktorlu = $_SESSION['degisken'];
    $tfa = $_POST['tfa'];
    
    
    if($ikifaktorlu == $tfa) {
    
        echo "Başarılı";
		$_SESSION['giris_yapildimi'] = "evet";
		header("Location: ana_sayfa.php");
		
    } else {
      
        echo "Hata: ikifaktorlu ve tfa değerleri eşit değil";
		//echo $_POST['tfa'];
		
    }
} else {
  
    echo "Hata: Post verileri eksik";
	echo $_POST['tfa'];
	echo $_SESSION['degisken'];
}
?>
