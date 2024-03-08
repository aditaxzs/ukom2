<?php 
session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password' and level='level'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
 $data = mysqli_fetch_assoc($login);
 
 if($data['level']=="admin"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = $admin;
 header("location:adminhome.php");

}else if($data['level']=="siswa"){
    $_SESSION['username'] = $username;
    $_SESSION['level'] = $siswa;
    header("location:siswahome.php");
 
} 
}
 
?>
