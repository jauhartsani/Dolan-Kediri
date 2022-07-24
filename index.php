<html>
<head>
    <meta charset="UTF-8">
    <title>Dolan Kediri | Home </title>
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
        .menu{
         text-align:right;
        }

    </style>
    <script>
    function pageRedirect1() {
      window.location.href = "https://www.youtube.com/watch?v=TRdcvUf6724";
    }
    function pageRedirect2() {
      window.location.href = "https://www.youtube.com/watch?v=gLQr7q-vUrc";
    }    
    function pageRedirect3() {
      window.location.href = "https://www.youtube.com/watch?v=xHdStEJzKOU";
    }          
    </script>
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
<br>
<center><h3>WISATA DI KEDIRI</h3></center>
</br>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                         data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                         alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                         src="Gambar/atd.png" data-holder-rendered="true">
                    <div class="card-body">
                    <center><h4>Air Terjun Dolo Kediri</h4></center>
                    <center> <h9>Tiket Masuk Rp. 10.000</h9><br><br></center>
                        <p class="card-text">Air Terjun Dolo merupakan pesona alam terbaik di Kabupaten Kediri 
                            yang rekomended untuk anda explore keindahannya. Destinasi wisata alam memang menjadi 
                            salah satu andalan di Indonesia karena sangat luar biasa menakjubkan. Banyak tempat 
                            wisata alam yang siap memanjakan perjalanan libur akhir pekan anda di Kabupaten Kediri Jawa Timur.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TRdcvUf6724"></iframe>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" onclick="pageRedirect1()"class="btn btn-success">Video Wisata Air Terjun Dolo</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                         data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                         alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                         src="Gambar/gk.png" data-holder-rendered="true">
                    <div class="card-body">
                     <center><h4>Gunung Kelud Kediri</h4></center>
                     <center><h8>Tiket Masuk Rp. 10.000</h8><br><br></center>
                        <p class="card-text">Gunung Kelud Kediri terdiri dari beberapa destinasi yang berbasis alam pegunungan. 
                            Jadi bagi kamu yang tidak bisa mendaki gunung sampai ke puncaknya, kamu bisa menikmati
                             beberapa destinasi lain yang tidak seberat mendaki gunung.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/gLQr7q-vUrc"></iframe>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" onclick="pageRedirect2()"class="btn btn-success">Video Wisata Gunung Kelud</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top"
                         data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                         alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;"
                         src="Gambar/slgb.png" data-holder-rendered="true">
                    <div class="card-body">
                    <center><h4>Simpang Lima Gumul Kediri</h4></center>
                    <center><h8>Tiket Masuk Rp. 10.000</h8><br><br></center>
                        <p class="card-text">Bagi para penggemar fotografi, lokasi wisata Kota Kediri yang satu 
                            ini rasanya menjadi tepat untuk para pelancong untuk mengabadikan foto dengan latar 
                            belakang ikonik dari Kota Kediri. Monumen yang satu ini dikenal lantaran memiliki bentuk 
                            bangunan unik dan berbeda dari lainnya.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xHdStEJzKOU"></iframe>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" onclick="pageRedirect3()"class="btn btn-success">Video Wisata SLG</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br></br>
    </div>
</div>
</div>


<script src="Assets/js/jquery.js" type="text/javascript"></script>
<script src="Assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="Assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script> function handleClick() {
        alert('Anda akan menuju ke link Video Youtube')
    } </script>
</script>

</body>

</html>
