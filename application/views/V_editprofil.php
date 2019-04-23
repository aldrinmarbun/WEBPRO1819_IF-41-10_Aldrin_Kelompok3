<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Home Penerimaan Pegawai</title>
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="icon" href="<?= base_url("assets/img/g.png")?>" type="image/gif" sizes="20x20" >

    <style>
        body{
            background-color : #d33c27;
        }
        .container{
            background-color:#fff;
            padding-top:80px;
        }
        .navbar{
            background-color: black;
            float : left;
            padding: 5px 5px;
            font-size: 18px;
            line-height: 20px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        #clr{
            color: #333;
        }
        .container{
            padding-top: 80px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm fixed-top" style="font-size : 14px;">
        <div class="collapse navbar-collapse "  id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin-left : 115px;">
                <li class="nav-link"><a href="<?= site_url("C_dpegawai")?>" id="clr" style="font-size : 14px;"><ion-icon name="home"></ion-icon> Halaman Rekrutmen </a></li>
                <li class="nav-link"><a  href="<?= site_url("C_luluseleksi")?>" id="clr"><ion-icon name="information-circle"></ion-icon> Pengumuman Lolos Seleksi</a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse navbar-inline dropdown justify-content-end">
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="clr" style="margin-right : 110px;"><ion-icon name="logo-windows"></ion-icon>  Login Calon Pegawai</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= site_url("C_editprofil")?>">Edit Akun</a></li>
                <li><a class="dropdown-item" href="#">Sign Out</a></li>
            </ul>
            </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <img class="img-fluid rounded-lg mt-3 mb-2" src="<?= base_url("assets/img/rek.jpg")?>">
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>
</html>
