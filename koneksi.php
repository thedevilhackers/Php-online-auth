<?php 
$koneksi =mysqli_connect("localhost","epiz_27823481","thedevilhacker","epiz_27823481_thedevilhacker");

//*nb $koneksi =mysqli_connect("localhost","username database","password database","database name");


if (mysqli_connect_error()){
	echo "Koneksi database gagal :". mysqli_connect_error();
} ?>