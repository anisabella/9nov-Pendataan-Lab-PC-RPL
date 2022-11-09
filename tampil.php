<?php
include("koneksi.php");
?>

<html>
    <head>
</head>
<body>
    <h3>APLIKASI PENDATAAN PC LAB RPL</h3>
    <table border="1">
        <tr>
            <th>No Seri</th>
            <th>Merek</th>
            <th>Jumlah</th>
        </tr>

        <?php
        include("koneksi.php");
        $sql="SELECT * FROM tb_pendataan";
        $query=mysqli_query($koneksi,$sql);

        while($pendataan=mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$pendataan['No_Seri']."</td>";
            echo "<td>".$pendataan['Merek']."</td>";
            echo "<td>".$pendataan['Jumlah']."</td>";
            echo "<td>";
                  echo "<a href='edit.php?id=".$pendataan['id']."'>Edit</a> |";
                  echo "<a href='hapus.php?id=".$pendataan['id']."'>Hapus</a> ";
                  echo "</td>";
                  echo "</tr>";
        }
        ?>
        </table>
        </body>
        </html>