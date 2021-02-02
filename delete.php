<?php 
include 'koneksi.php';

$username=$_POST['username'];

$query=mysqli_query($koneksi,"select * from user where username='$username'");
$cek=mysqli_num_rows($query);

if($cek > 0){

if($username == "" ){
	echo "Nothing can be empty!";
	}elseif($username <>""){
$delete=mysqli_query($koneksi,"DELETE FROM user
WHERE username = '$username'");
	if ($delete){
 	echo "Delete success!";
 }else{
echo "Delete failed!"; 
 }
	}
}else{
echo "Username is not in the list!";
}

?>