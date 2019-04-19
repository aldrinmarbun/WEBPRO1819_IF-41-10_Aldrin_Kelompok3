<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Pendaftaran Global Intermedia</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/req.css')?>">
</head>
<body>
    <nav class="navbar navbar-expand-md">
      <a class="navbar-brand">Aplikasi Recruitment</a>
      <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                <i class="glyphicon glyphicon-th-large"></i> Login <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="pkl/admin_pkl/index.php"><i class="glyphicon glyphicon-user"></i> Admin PKL</a></li>
                <li><a href="pegawai/admin_pegawai/index.php"><i class="glyphicon glyphicon-user"></i> Admin Pegawai</a></li>         
              </ul>
            </li>
          </ul>
        </div> 
    </nav>

    <div class="container">
      <img src="<?= base_url('assets/img/rek.jpg')?>">
          <div class="row">
              <div class="col-md-9 ">
                  <div class="wrap-large ">
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
                <div class="col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-heading">Silahkan Pilih Halaman User</div>
                        <div class="panel-body">
                        
                        <a class="btn btn-primary btn-sm full" href="<?= site_url('C_dpegawai') ?>">
                            <i class="glyphicon glyphicon-user"></i> Daftar Pegawai</a>
                        <a class="btn btn-info btn-sm full" href="pkl/index.php">
                            <i class="glyphicon glyphicon-user"></i> Daftar Prakerin/PKL</a>
                        </div>
                    </div>
                </div>
            </div>   
            <footer>
            <p>© Global Intermedia</p>
            </footer>
        </div>    
</body>
</html>
        
        