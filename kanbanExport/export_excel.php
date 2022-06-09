<!DOCTYPE html>
<html>

<head>
    <title>Export Data Ke Excel Dengan PHP </title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>
    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Pegawai.xls");
    ?>
    <center>
        <h1>Export Data Ke Excel Dengan PHP database</h1>
    </center>

    <center>
        <a target="_blank" href="export_excel.php">EXPORT KE EXCEL</a>
    </center>

    <table>
        <tr>
            <th>DN Date</th>
            <th>DN Daihatsu</th>
            <th>DN Daihatsu Seq</th>
            <th>Part No Daihastu</th>
        </tr>
        <?php
        // koneksi database
        $koneksi = mysqli_connect("localhost", "root", "", "pegawai");

        // menampilkan data pegawai
        $data = mysqli_query($koneksi, "select * from data_pegawai");
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['telepon']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>