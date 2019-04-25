<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Pendaftaran Global Intermedia</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/req.css')?>">
    <link rel="icon" href="<?= base_url("assets/img/g.png")?>" type="image/gif" sizes="20x20" >
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-bottom : 1px solid black">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Aplikasi Rekrutmen <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse navbar-inline dropdown justify-content-end">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="margin-right : 113px">Login</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?= site_url('C_loginadmin') ?>"> <ion-icon name="person"></ion-icon> Admin PKL</a></li>
            <li><a class="dropdown-item" href="<?= site_url('C_loginadminPKL') ?>"> <ion-icon name="person"></ion-icon> Admin Pegawai</a></li>
          </ul>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container" style="backgroud-color:black;">
      <img class="img-fluid rounded-lg mt-3 mb-2" src="<?= base_url('assets/img/rek.jpg')?>" alt="Responsive image">
      <div class="row pb-2">
          <div class="col-md-9">
            <div class="wrap bg-white rounded-lg pt-4 pl-3">
            <h2>Selamat Datang</h2>
            <p>Di lingkungan kerja Global Intermedia, 
                kemampuan dalam hal Teknologi Informasi dengan kemampuan dalam melakukan interkasi sosial baik secara internal di dalam perusahaan, 
                maupun secara menyeluruh kepada masyarakat, 
                digabung menjadi satu untuk membentuk Global Intermedia yang solid yang mampu dekat dengan seluruh lapisan masyarakat.
                <br><br>
                Global Intermedia menyambut baik bagi individu-individu yang memiliki minat dan bakat di dunia teknologi informasi untuk ikut berpartisipasi dan berkembang bersama.
                <br><br>
            </p>
            </div>
               
          </div>
          <div class="col-md-3">
          <div class="card">
              <div class="card-header" style="background-color:#ffbc3e">Silahkan Pilih Halaman User</div>
              <div class="card-body">
              <a class="btn btn-primary btn-block" href="<?= site_url('C_homepegawai') ?>">
                  <ion-icon name="person"></ion-icon> Daftar Pegawai</a>
              <a class="btn btn-info btn-block" href="<?= site_url('C_pkl') ?>">
                  <ion-icon name="person"></ion-icon> Daftar Prakerin/PKL</a>
              </div>
          </div>
          </div>
      </div>   
      <footer class="pt-3" style="border-top : 1px solid rgb(175,0,0);">
        <p>© Global Intermedia</p>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>
</html>
        
        