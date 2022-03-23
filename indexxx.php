    <html>
    <head>
        <title>Script PHP Menampilkan Data Terakhir</title>
    </head>
    <body>
        <h2>Menampilkan Data Terakhir di PHP</h2>
        <p>Data Siswa</p>
        <table border="1" cellpadding="4">
            <tr bgcolor="#e5e5e5">
                <td width="30">No</td>
                <td width="90">NPM</td>
                <td width="200">Nama</td>
            </tr>
            <?php
            include "koneksi.php";
            $no=1;
            $query    =mysqli_query($koneksi, "SELECT * FROM tb_siswa ORDER BY npm DESC LIMIT 1");
            while($data    =mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$data['npm']?></td>
                <td><?=$data['nama']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
    </html>
