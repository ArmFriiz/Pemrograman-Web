<?php 

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("data.txt", "r");
$tanggal = date("Y-m-d");

echo "<table border='1' widht='80%' style='text-align:center;'>";
echo("<tr><td>Tanggal</td></tr>");
echo("<tr><td>$tanggal</td></tr>");
echo("<tr><td>Username</td><td>Email</td><td>Tempat/Tanggal Lahir</td><td>Kritik Dan Saran</td><td>Report<td></tr>");

while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo("<tr><td>$pisah[0]</td><td>$pisah[2]</td><td>$pisah[1]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>");
}

?>