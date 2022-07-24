<?php
include('koneksi.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dolan Kediri | Booking</title>
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

<div class="container">
<center><h3>Form Booking Wisata Kediri</h3><center>
    <div class="row">
        <div class="col-xs-12">
            <div class="panel-body">
                <!--membuat form untuk tambah data-->
                <form class="form-horizontal" action="proses.php" method="post">
                    <div class="form-group">
                        <label for="nama" class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" id="nama"
                                   placeholder="Inputkan Nama Anda" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="noid" class="col-sm-3 control-label">Nomer identitas</label>
                        <div class="col-sm-9">
                            <input type="text" name="noid" class="form-control" id="noid"
                                   placeholder="Inputkan no_identitas Anda" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nohp" class="col-sm-3 control-label">Nomer HP</label>
                        <div class="col-sm-9">
                            <input type="text" name="nohp" class="form-control" id="nohp"
                                   placeholder="Inputkan Nomer HP anda" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tmpwisata" class="col-sm-3 control-label">Nama Wisata</label>
                        <div class="col-sm-2 col-xs-9">
                            <select name="tmpwisata" id="tmpwisata" class="form-control">
                            <option>Air Terjun Dolo</option>
                            <option>Gunung Kelud</option>
                            <option>Simpang Lima Gumul</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl" class="col-sm-3 control-label">Tanggal Kunjungan</label>
                        <div class="col-sm-9">
                            <input type="date" name="tgl" class="form-control" id="tgl"
                                   placeholder="Inputkan Tanggal Pengunjung" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pdewasa" class="col-sm-3 control-label">Pengunjung Dewasa</label>
                        <div class="col-sm-9">
                            <input type="number" name="pdewasa" id="pdewasa" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="panak" class="col-sm-3 control-label">Pengunjung Anak</label>
                        <div class="col-sm-9">
                            <input type="number" name="panak" id="panak" class="form-control"
                            placeholder="Anak-anak merupakan usia yang dibawah 12 tahun" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Harga Tiket </label>
                        <div class="col-sm-9">
                        <label for="" class="col-sm-1 control-label">Rp.10.000</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <input type="checkbox"required>
                            <h9>Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan
                                syarat dan ketentuan yang telah ditetapkan.
                             </h9><br> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success">
                                <span class=""></span> Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script>
</script>
</body>
</html>