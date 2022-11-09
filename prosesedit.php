<?php
include("koneksi.php");

if(!isset($_POST['edit'])) {
    $kode=$_POST['id'];
    $no_seri=$_POST['No_Seri'];
    $Merek=$_POST['merek'];
    $Jumlah=$_POST['Jumlah'];

    $sql="UPDATE tb_pendataan SET No_Seri='$no_seri', Merek='$Merek', Jumlah='$Jumlah' WHERE id=$kode";
    $query=mysqli_query($koneksi,$sql);
    
    if($query){
        header('Location:tampil.php');
    } else{
        die("gagal mengedit");
    }
}
?>