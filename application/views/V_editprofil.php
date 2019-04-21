<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Home Penerimaan Pegawai</title>
    <link rel="icon" href="<?= base_url("assets/img/g.png")?>" type="image/gif" sizes="20x20" >

    <style>
        .container{
            background-color:#fff;
            padding-top:80px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm fixed-top" style="background-color: black;">
        <div class="collapse navbar-collapse "  id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-link"><a href="<?= site_url("C_dpegawai")?>" id="clr"><ion-icon name="home"></ion-icon> Halaman Rekrutmen </a></li>
                <li class="nav-link"><a href="<?= site_url('C_luluseleksi')?>" id="clr"><ion-icon name="information-circle"></ion-icon> Pengumuman Lolos Seleksi</a></li>
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
    <div class="col-sm-12">
        <div class="container">
            <img class="img-fluid rounded-lg mt-3 mb-2" src="<?= base_url("assets/img/rek.jpg")?>">
        </div>
    </div>
    <div class="container"> 
        <form id="step1" name="step1" method="POST" action="savedata.php" class="form-horizontal" enctype="multipart/form-data" novalidate="novalidate"> 
            <table style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="width:30"><strong style="color:red;">* </strong><label>Nama Lengkap &nbsp;</label></td>
                        <td><input type="text" class="form-control inp" placeholder="Nama Lengkap" name="nama" id="nama" value="" required=""></td>  
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Jenis Kelamin &nbsp;</label> </td>
                        <td>
                            <select class="form-control" name="sex" id="sex" style="width:150px;">
                                <option value="">-Pilih Jenis Kelamin-</option><option value="L">Laki-Laki</option><option value="P" selected="">Perempuan</option>                </select>
                        </td>
                    </tr> 
                    <tr>
                        <td colspan="6"><hr></td>
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Email &nbsp;</label></td>
                        <td><input type="text" class="form-control inp" name="email" id="email" placeholder="Email" value="lia@gmail.com" required="" readonly="true"></td>
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Foto &nbsp;&nbsp; </label></td>
                        <td><input type="file" name="foto_pegawai" id="foto_pegawai"></td>
                    </tr>
                    <tr>
                        <td colspan="6"><hr></td>
                    </tr>
                    <tr>
                        <td><label>Password &nbsp;</label></td>
                        <td><input type="password" class="form-control inp" name="password" id="password" placeholder="Password"> * Isi jika password akan diganti</td>
                    </tr>
                    <tr>
                        <td><label>Re-Password &nbsp;</label></td>  
                        <td><input type="password" class="form-control inp" name="confirm_password" placeholder="Re-Password"></td>
                    </tr>
                    <tr>
                        <td colspan="6"><hr></td>
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Alamat Lengkap &nbsp;</label></td>
                        <td><textarea required="" class="form-control inp" name="alamat" placeholder="Alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td><label><strong style="color:red;">* </strong>Kode Pos &nbsp;</label></td>
                        <td><input required="" type="text" class="form-control inp numeric" name="kode_pos" placeholder="Kode Pos" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Telepon Rumah &nbsp;</label></td>
                        <td><input type="text" class="form-control inp numeric" name="tlp_rumah" placeholder="Telepon Rumah" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Telepon Kantor &nbsp;</label></td>
                        <td><input type="text" class="form-control inp numeric" name="tlp_kantor" placeholder="Telepon Kantor" value=""></td>
                    </tr>
                    <tr><td><strong style="color:red;">* </strong><label>Hp &nbsp;</label></td>
                        <td><input required="" type="text" class="form-control inp numeric" name="hp" placeholder="Nomor HP" value="11111"></td>
                    </tr>
                    <tr>
                        <td colspan="6"><hr></td>
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Tempat Lahir &nbsp;</label></td>
                        <td><input required="" type="text" class="form-control inp" name="tempat_lahir" placeholder="Tempat lahir" value=""> </td>
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Tanggal Lahir</label></td>
                        <td><input required="" style="width:150px;" type="text" class="form-control datepicker inp" name="tgl_lahir" placeholder="Tanggal Lahir" value=""></td>
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Agama &nbsp;</label></td>
                        <td>
                            <select class="form-control" name="agama" id="agama" style="width:150px;">        
                                <option value="">-Pilih Agama-</option><option value="Islam">Islam</option><option value="Kristen">Kristen</option><option value="Katolik">Katolik</option><option value="Hindu">Hindu</option><option value="Budha">Budha</option>                </select>
                        </td>
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Suku Bangsa &nbsp;</label></td>
                        <td><input required="" type="text" class="form-control inp" name="suku_bangsa" placeholder="Suku Bangsa" value=""></td>
                    </tr>
                    <tr>
                        <td><strong style="color:red;">* </strong><label>Status Perkawinan</label></td>
                        <td>
                            <select class="form-control inp" name="status" id="status" style="width:150px;">
                                <option value="">-Pilih Status-</option><option value="Menikah">Menikah</option><option value="Belum Menikah">Belum Menikah</option><option value="Janda">Janda</option><option value="Duda">Duda</option>                </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Nomor KTP &nbsp;</label></td>
                        <td><input type="text" class="form-control inp" name="no_ktp" placeholder="Nomor KTP" value=""></td>
                    </tr>
                    <tr>
                        <td><label>Tinggi Badan (cm)</label></td>
                        <td><input type="text" class="form-control inp numeric" name="tinggi_badan" placeholder="Tinggi Badan" value="">
                        </td>
                    </tr>
                    <tr>
                        <td><label>Berat Badan (kg) &nbsp;</label></td>
                        <td><input type="text" class="form-control inp numeric end" name="berat_badan" placeholder="Berat Badan" value="" onkeydown="return stopTab(this, event)"></td>
                    </tr>                                    
                    <tr>
                        <td colspan="6"><hr></td>
                    </tr>
                    <tr>
                        <td colspan="6">
                            <input type="hidden" value="1" name="step">
                            <input type="submit" value="Simpan" class="btn btn-primary"> </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>    
    <footer>
        <p>© Global Intermedia</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>
</html>
