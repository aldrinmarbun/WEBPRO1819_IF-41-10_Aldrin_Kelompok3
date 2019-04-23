<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Pendaftaran Global Intermedia</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/req.css')?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-bottom : 1px solid black; padding-left : 120px; padding-right : 120px">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Penerimaan PKL<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="<?= site_url('C_pkl/login') ?>" method="post">
          <input class="form-control mr-sm-2" name="email" type="email" placeholder="Email" aria-label="Search">
          <input class="form-control mr-sm-2" name="password" type="password" placeholder="Password" aria-label="Search">
          <button class="btn btn-success my-2 my-sm-0" type="submit">Login</button>
        </form>
      </div>
    </nav>

    <div class="container" style="backgroud-color:black;">
      <img class="img-fluid rounded-lg mt-3 mb-2" src="<?= base_url('assets/img/rek.jpg')?>" alt="Responsive image">
      <div class="row pb-2">
          <div class="col-md-12">
            <div class="wrap bg-white rounded-lg pt-4 pl-3 pr-3 pb-3">
                <h1>Formulir Pendaftaran Siswa Prakerin</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="<?= site_url('C_pkl/register') ?>" method="post">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" value="<?= $this->session->userdata('info') ?>">Nama Sekolah</label>
                                <div class="col-sm-6">
                                    <input name="nama_sekolah" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Email Sekolah</label>
                                <div class="col-sm-6">
                                    <input name="email" type="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Alamat Sekolah</label>
                                <div class="col-sm-6">
                                    <textarea name="alamat_sekolah" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Lampiran</label>
                                <div class="col-sm-6">
                                    <input name="lampiran" type="file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-6">
                                    <input name="password" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Confirm Password</label>
                                <div class="col-sm-6">
                                    <input name="confirm_pass" type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">No.HP yang bisa dihubungi</label>
                                <div class="col-sm-6">
                                    <input name="no_hp" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Kode Pos</label>
                                <div class="col-sm-6">
                                    <input name="kode_pos" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Rencana Jangka Waktu Prakerin</label>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Mulai</label>
                                <div class="col-sm-6">
                                    <input name="mulai" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label">Selesai</label>
                                <div class="col-sm-6">
                                    <input name="selesai" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-2"><button class="btn btn-success" type="submit">Sign Up</button></div>
                            </div>
                        </form>
                    </div>
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