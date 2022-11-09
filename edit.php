<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("Location:tampil.php?");
}
$kode=$_GET['id'];
$sql="SELECT * FROM tb_pendataan WHERE id=$kode";
$query=mysqli_query($koneksi,$sql);
$pendataan=mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) <1){
    die ("Data Tidak Ditemukan");
}
?>

<html>
    <head>
</head>
<body>
    <h3>APLIKASI PENDATAAN PC LAB RPL</h3>
    <form action="prosesedit.php" method="POST">
    <fieldset>
     <input type="hidden" name="id" value=" <?php echo $pendataan['id'] ?>" />
    <p>
        <label for="No_Seri">No Seri :</label>
        <input type="number" name="No_Seri" value="<?php echo $pendataan['No_Seri'] ?>"/>
    </p>
    <p>
        <label for="Merek">Merek :</label>
        <input type="radio" name="Merek" value="Asus"  value="<?php echo $pendataan['Merek']?>"/>Asus
        <input type="radio" name="Merek" value="Lenovo"  value="<?php echo $pendataan['Merek']?>"/>Lenovo
        <input type="radio" name="Merek" value="HP"  value="<?php echo $pendataan['Merek']?>"/>HP
        <input type="radio" name="Merek" value="Acer"  value="<?php echo $pendataan['Merek']?>"/>Acer
    </p>
    <p>
        <label for="Jumlah">Jumlah :</label> 
        <input type="number" name="Jumlah"value="<?php echo $pendataan['Jumlah']?>"/>
    </p>
    <p>
        <input type="submit" value="Kirim" name="tambah"/>
    </p>

</fieldset>
</body>
<html>