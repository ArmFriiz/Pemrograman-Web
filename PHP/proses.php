<?php 

$user = $_POST['user'];
$email = $_POST['email'];
$ttl = $_POST['ttl'];
$ks = $_POST['ks'];
$report = $_POST['report'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("data.txt", "a+");
fputs($fp, "$user|$email|$ttl|$ks|$report\n");
fclose($fp);

echo "Terima kasih telah berkontribusi<br>";
echo "<a href='lihat.php'>Lihat data report</a><br>";

 ?>



