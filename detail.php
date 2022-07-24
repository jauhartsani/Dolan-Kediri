<?php
include('koneksi.php');

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dolan Kediri - Detail Pesanan</title>
    <link rel="shortcut icon" type="image/x-icon" href="favico.ico"/>
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

<div class="container">
    <div class="row">
        <div class="col-xs-12">

            <div class="panel-body">
                <!--Menampilkan data detail arsip-->
                <?php
                $sql = "SELECT * FROM beli WHERE id_beli = '{$_GET['id']}'";
                //proses query ke database
                $query = mysqli_query($kon, $sql) or die("SQL Detail error");
                //Merubaha data hasil query kedalam bentuk array
                $data = mysqli_fetch_array($query);
                ?>
                <center><h3>DETAIL DATA ID <?= $data['id_beli'] ?></h3><center>
                <!--dalam tabel--->
                <table class="table table-bordered table-striped table-hover">
                    <tr>
                        <td>Nama</td>
                        <td><?= $data['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Nomer Identitas</td>
                        <td><?= $data['noid'] ?></td>
                    </tr>
                    <tr>
                        <td>Nomer HP</td>
                        <td><?= $data['nohp'] ?></td>
                    </tr>
                    <tr>
                        <td>Tempat Wisata</td>
                        <td><?= $data['tmpwisata'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Kunjungan</td>
                        <td><?= $data['tgl'] ?></td>
                    </tr>
                    <tr>
                        <td>Pengunjung Dewasa</td>
                        <td><?= $data['pdewasa'] ?></td>
                    </tr>
                    <tr>
                        <td>Pengunjung Anak</td>
                        <td><?= $data['panak'] ?></td>
                    </tr>
                    <tr>
                        <td>Total Bayar</td>
                        <td>Rp. <?= $data['total'] ?></td>
                    </tr>
                </table>
            </div> <!--end panel-body-->
        </div>
    </div>
</div>


<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
