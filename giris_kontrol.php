<?php 
include 'fonksiyon.php';


$username = $_POST['kullanici_giris'];
$password = $_POST['kullanici_sifre'];


$conn = veritabani_baglan();


$sql = "SELECT * FROM kullanicilar WHERE kullanici_giris = '$username' AND kullanici_sifre = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
   $row = $result->fetch_assoc();
   $kullanici_goster = $row["kullanici_ad"];
   $kullanici_goster_unvan = $row["kullanici_unvan"];
   
   session_start();

   $_SESSION['degisken'] = $_POST['ikifaktorlu'];
   

   
   $_SESSION['kullanici_adi'] = $kullanici_goster;
   $_SESSION['kullanici_unvan'] = $kullanici_goster_unvan;
   
 
   
$numara =  $row["kullanici_telefon"];
$text  = $_SESSION['degisken'];


$chatId = $numara . "@c.us";


$data = array(
    "chatId" => $chatId,
    "text" => $text,
    "session" => "default"
);
$postData = json_encode($data);


$url = "http://192.168.1.131:3000/api/sendText";
$headers = array(
    'accept: application/json',
    'Content-Type: application/json',
);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


$response = curl_exec($ch);


curl_close($ch);
   
   
   
   
   
   
   
   
   
   
   header("Location: 2fa.php");
} else {
   
    echo "Kullanıcı adı veya şifre hatalı.";
}


$conn->close();
?>
