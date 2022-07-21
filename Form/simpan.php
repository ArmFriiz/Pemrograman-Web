<?php
	include("hdr.html");

	include("Pertemuan12.html");
	$nim=@$_POST["nim"];
	$kota=@$_POST["kota"];

	//simpan kedalam file
		$fileku=fopen("data.txt", "a");
		$data=$nim.";" .$nama.";" .$kota."\n";
		fwrite($fileku, $data);
		fclose($fileku);

	echo "<pre>";
	include("data.txt");
	echo "</pre>";
	include("ftr.html");
?>