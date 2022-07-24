<?php
include('koneksi.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dolan Kediri | Daftar Pesanan</title>
    <link rel="shortcut icon" type="image/x-icon" href="kediri.ico"/>
    <link href="Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Assets/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="Assets/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        body {
            margin-top: 70px;
        }

        .modalDialog {
            position: fixed;
            font-family: Arial, Helvetica, sans-serif;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            opacity: 0;
            transition: opacity 200ms ease-in;
            pointer-events: none;
        }

        .modalDialog:target {
            opacity: 1;
            pointer-events: auto;
        }

        .modalDialog > div {
            width: 400px;
            position: relative;
            margin: 10% auto;
            padding: 5px 20px 13px 20px;
            border-radius: 10px;
            background: #fff;
            background: linear-gradient(#fff, #aaa);
        }

        .close:hover {
            background: #00d9ff;
        }

        .close {
            background: #606061;
            color: #FFFFFF;
            line-height: 25px;
            position: absolute;
            text-align: center;
            top: -10px;
            right: -12px;
            width: 24px;
            text-decoration: none;
            font-weight: bold;
            border-radius: 12px;
            box-shadow: 1px 1px 3px #000;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

    </style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="index.php">Dolan Kediri</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="booking.php">Booking</a></li>
                <li><a href="data.php">Daftar Pesanan</a></li>
                <li><a href="grafik.php">Grafik Penjualan</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- isi -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
        <center><H3>DAFTAR PESANAN</H3></center>
            <div class="panel-body">
                <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Nomor Identitas</th>
                        <th>Nomer Hp</th>
                        <th>Nama Wisata</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Pengunjung Dewasa</th>
                        <th>Pengunjung Anak</th>
                        <th>Total Harga</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <tbody>
                        <!--ambil data dari database, dan tampilkan kedalam tabel-->
                        <?php
                        $sql = "SELECT * FROM beli";
                        $query = mysqli_query($kon, $sql) or die("Database Anda Salah");
                        $nomor = 0;
                        //Melakukan perulangan u/menampilkan data
                        while ($data = mysqli_fetch_array($query)) {
                            $nomor++; //Penambahan satu untuk nilai var nomor

                            ?>
                            <tr>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['noid'] ?></td>
                                <td><?= $data['nohp'] ?></td>
                                <td><?= $data['tmpwisata'] ?></td>
                                <td><?= $data['tgl'] ?></td>
                                <td><?= $data['pdewasa'] ?></td>
                                <td><?= $data['panak'] ?></td>
                                <td>Rp. <?= $data['total'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $data['id_beli'] ?>" class="btn btn-warning btn-xs">Edit</a>
                                    <a href="hapus.php?id=<?php echo $data['id_beli'] ?>" class="btn btn-danger btn-xs">Hapus</a>
                                    <a href="detail.php?id=<?php echo $data['id_beli'] ?>" class="btn btn-info btn-xs">Detail</a>
                                </td>
                            </tr>
                            <!--Tutup Perulangan data-->
                        <?php } ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- isi -->

<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>


</script>

</body>

</html>
