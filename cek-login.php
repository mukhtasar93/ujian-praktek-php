<?php 

session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
// var_dump($password);
// exit;
$query_login = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($query_login);

if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:index.php");	
}
?>