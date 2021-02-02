<?php 
include 'koneksi.php';

$username=$_POST['username'];
$password = $_POST['password'];
$uuid = $_POST['uuid'];

$query=mysqli_query($koneksi,"select * from user where username='$username'");
$cek=mysqli_num_rows($query);

if($cek > 0){
	echo "Username already registered!";
}else{

if($username == "" or $password == "" or $uuid == "" ){
	echo "Nothing can be empty!";
	}elseif($username <>"" or $password <>"" or $uuid <>""){

	$sql_simpan=mysqli_query($koneksi,"insert into user values('$username','$password','$uuid')");
 	echo "Registration approved!";
	} else {
 	echo "Registration not approved!";
	}
}

?>