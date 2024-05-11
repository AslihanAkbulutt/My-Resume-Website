
<?php
$servername = "10.0.2.5";
$username = "asli";
$password = "asli123";
$database = "bulut";

$baglanti = mysqli_connect($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if (!$baglanti) {
    die("Veritabanına bağlanılamadı: " . mysqli_connect_error());
}

// Form verilerini al
if (isset$_POST['submit'])
{
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    // Diğer form alanlarını da benzer şekilde alabilirsiniz.

    // Veritabanına veri ekle
    $sql = "INSERT INTO messages (email, msg) VALUES ('$email', '$msg')";

    if (mysqli_query($baglanti, $sql)) {
        echo "Yeni kayıt başarıyla eklendi";
    } else {
        echo "Hata: " . $sql . "<br>" . mysqli_error($baglanti);
    }
}

// Veritabanı bağlantısını kapat
mysqli_close($baglanti);
header("Location:../index.html");
?>
