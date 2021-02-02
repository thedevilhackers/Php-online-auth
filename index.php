<?php 

include 'koneksi.php';
$username = $_POST['username'];
$password= $_POST['password'];
$uuid= $_POST['uuid'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password' and uuid='$uuid'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	echo "Login success!";
}else{
	echo "Username and Password is not in the list!";
}
?>