<?php
include ("koneksi.php");
if(isset($_POST['tambah'])) {
$No_Seri=$_POST['No_Seri'];
$Merek=$_POST['Merek'];
$Jumlah=$_POST['Jumlah'];

$sql="INSERT INTO tb_pendataan (No_Seri,Merek,Jumlah) VALUES ('$No_Seri','$Merek','$Jumlah')";
$query=mysqli_query($koneksi,$sql);
}
 else{
    ("akses dilarang");
 }
 ?>