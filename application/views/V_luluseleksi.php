<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Home Penerimaan Pegawai</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/luluseleksi.css')?>">
    <link rel="icon" href="<?= base_url("assets/img/g.png")?>" type="image/gif" sizes="20x20" >
</head>
<body>
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="collapse navbar-collapse "  id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-link"><a href="<?= site_url("C_dpegawai")?>" id="clr"><ion-icon name="home"></ion-icon> Halaman Rekrutmen </a></li>
                <li class="nav-link"><a  href="<?= site_url("C_editprofil")?>" id="clr"><ion-icon name="information-circle"></ion-icon> Pengumuman Lolos Seleksi</a></li>
            </ul>
        </div>
        <div class="collapse navbar-collapse navbar-inline dropdown justify-content-end">
            <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="clr"><ion-icon name="logo-windows"></ion-icon>  Login Calon Pegawai</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Admin PKL</a></li>
                <li><a class="dropdown-item" href="#">Admin Pegawai</a></li>
            </ul>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="background-color: #fff">
        <img class="img-fluid rounded-lg mt-3 mb-2" src="<?= base_url("assets/img/rek.jpg")?>">               
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard </a></li>
          <li class="breadcrumb-item"><a href="<?= site_url('C_dpegawai')?>"></a>Halaman Rekrutmen</li>
          <li class="breadcrumb-item active">Peserta Lolos Seleksi</li>
        </ul>   
        <h3>Daftar Peserta Lolos Seleksi</h3>
            <div class="mini-layout">
                <div class="table-responsive align:center">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="text-center">
                                <td class="active"><label>No</label></td>
                                <td class="active"><label>Nama Lengkap</label></td>                            
                                <td class="active"><label>Posisi</label></td>
                                <td class="active"><label>Periode</label></td>
                            </tr>
                        </tbody>
                    </table>
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