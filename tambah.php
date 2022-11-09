<html>
    <head>
</head>
<body>
    <h3>APLIKASI PENDATAAN PC LAB RPL</h3>
    <form action="prosestambah.php" method="POST">
    <fieldset>

    <p>
        <label for="No_Seri">No_Seri:</label>
        <input type="number" name="No_Seri"/>
    </p>
    <p>
        <label for="Merek">Merek:</label>
        <input type="radio" name="Merek" value="Asus"/> Asus 
        <input type="radio" name="Merek" value="Lenovo"/> Lenovo 
        <input type="radio" name="Merek" value="HP"/> HP 
        <input type="radio" name="Merek" value="Acer"/> Acer 
    </p>
    <p>
        <label for="Jumlah">Jumlah:</label> 
        <input type="number" name="Jumlah"/>
    </p>
    <p>
        <input type="submit" value="Kirim" name="tambah"/>
    </p>

</fieldset>
</body>
<html>