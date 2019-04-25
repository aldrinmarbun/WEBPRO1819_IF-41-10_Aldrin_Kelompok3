<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Home Penerimaan Pegawai</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/homepegawai.css')?>">
    <link rel="icon" href="<?= base_url("assets/img/g.png")?>" type="image/gif" sizes="20x20" >
</head>
<body>
    <nav class="navbar navbar-expand-sm fixed-top">
      <div class="collapse navbar-collapse "  id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-left:95px;">
            <li class="nav-link"><a href="<?= site_url("C_homepegawai")?>" id="clr"><ion-icon name="home"></ion-icon> Halaman Rekrutmen </a></li>
            <li class="nav-link"><a href="<?= site_url('C_luluseleksi')?>" id="clr"><ion-icon name="information-circle"></ion-icon> Pengumuman Lolos Seleksi</a></li>
        </ul>
      </div>
      <div class="collapse navbar-collapse navbar-inline dropdown justify-content-end">
        <ul class="nav navbar-nav navbar-right" style="margin-right:100px;">
          <li class="dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="clr"><ion-icon name="logo-windows"></ion-icon>  Login Calon Pegawai</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" class="load-modal" href="#" data-toggle="modal" data-target="#exampleModal"> <ion-icon name="person"></ion-icon> Sign in</a></li>
            <li><a class="dropdown-item" class="load-modal" href="#" data-toggle="modal" data-target="#registerModal"><ion-icon name="person"></ion-icon> Daftar Akun</a></li>
          </ul>
        </ul>
      </div>
    </nav>
    <div class="container">
      <img class="img-fluid rounded-lg mt-3 mb-2" src="<?= base_url("assets/img/rek.jpg")?>">
      <div class="row pb-2">
        <div class="col-md-12">
          <div class="wrap bg-white rounded-lg p-4">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard </a></li>
            <li class="breadcrumb-item active">Halaman Rekrutmen</li>
          </ul>
          <div class="row pb-2">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">Syarat Umum:</div>
                  <div class="card-body">
                    <ul>
                      <li>Memiliki kemampuan untuk belajar</li>
                      <li>Mampu bekerja dalam tim dan jadwal yang ketat</li>
                      <li>Pengalaman dalam pengembangan aplikasi merupakan nilai tambah</li>
                      <li>Bersedia ditempatkan di seluruh wilayah Indonesia</li>
                    </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">Accounting</div>
                  <div class="card-body">
                    <p>1. Wanita, Single, Pendidikan D3 Akuntasi</p>
                    <p>2. Berdomisili di Yogyakarta</p>
                    <p>3. Menguasai pengoperasian Linux dan OpenOffice</p>     
                  </div>
                </div>
              </div>
              <div class="col-md-6"> 
                <div class="card">
                  <div class="card-header">Administrasi</div>
                  <div class="card-body">
                    <ol>
                      <li>Pendidikan Min D3 jurusan Akuntansi (Diutamakan Pria)</li>
                      <li>Mampu bekerja dalam tim dan jadwal yang ketat</li>
                      <li>Memiliki kemampuan komunikasi yang baik</li>
                      <li>Memiliki kemampuan untuk belajar, pengalaman dalam administrasi proyek merupakan nilai tambah</li>
                      <li>Bersedia ditempatkan di seluruh wilayah Indonesia</li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="col-md-6"> 
                <div class="card"> 
                  <div class="card-header">Accounting</div>
                    <div class="card-body">
                      <p>1. Wanita, Single, Pendidikan D3 Akuntasi</p>
                      <p>2. Berdomisili di Yogyakarta</p>
                      <p>3. Menguasai pengoperasian Linux dan OpenOffice�</p>                    
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">Android Programmer</div>
                    <div class="card-body">
                      <ol>
                        <li>Min D3 Teknik Informatika/Elektro/Ilmu Komputer</li>
                        <li>Menguasai Pemrograman menggunakan Android Studio (Java, Kotlin)</li>
                        <li>Menguasai konsep pemrograman berorientasi objek</li>
                        <li>Berpengalaman menggunakan API, JSON, XML</li>
                        <li>Menguasai SQL merupakan nilai tambah</li>
                        <li>Pengalaman dalam mengembangkan aplikasi berbasis android menjadi nilai tambah</li>
                        <li>Mampu bekerja dalam tim dan jadwal yang ketat</li><li>Memiliki kemampuan komunikasi yang baik</li>
                      </ol>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">Database Administrator</div>
                  <div class="card-body"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">Desktop Programer</div>
                    <div class="card-body">
                      <ol>
                        <li>Pendidikan Min D3 jurusan Teknologi Informasi, Teknik Elektro atau Ilmu Komputer</li>
                        <li>Menguasai & familiar dengan Borland Delphi</li>
                        <li>Memiliki kemampuan komunikasi yang baik</li>
                        <li>>Menguasai & familiar dengan database MySQL/Interbase/Firebird SQL/SQL Server</li>
                        <li>Memiliki kemampuan untuk belajar, pengalaman dalam pengembangan aplikasi merupakan nilai tambah</li>
                        <li>Bersedia ditempatkan di seluruh wilayah Indonesia</li>
                      </ol>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">Junior Technical Support</div>
                    <div class="card-body">
                      <ol>
                        <li>Pendidikan Min. SMK bidang komputer</li>
                        <li>Diutamakan Laki-Laki</li>
                        <li>Menguasai Komputer</li>
                        <li>Bersedia ditempatkan di seluruh wilayah Indonesia (diutamakan wilayah Indonesia Timur)</li>
                      </ol>
                    </div>
                </div>
              </div>
              <div class="col-md-6">        
                <div class="card">
                  <div class="card-header">Network Administrator</div>
                    <div class="card-body">
                      <ol>
                        <li>Pendidikan D3/S1 jurusan Teknologi Informasi, Teknik Elektro atau Ilmu Komputer</li>
                        <li>Memiliki kemampuan administrasi dan pemecahan masalah Windows Server, dan infrastruktur jaringan komputer terkait internet dan intranet.</li>
                        <li>Familiar dengan konsep dan konfigurasi jaringan LAN/WAN meliputi routing, firewall, nat, switching dan bridging.</li><li>Menguasai dan familiar dengan jaringan berbasis mikrotik routerOS lebih diutamakan.</li>
                        <li>Memiliki pemikiran analitis yang baik dan keterampilan pemecahan masalah.</li>
                        <li>Memiliki hubungan interpersonal yang baik, terampil berkomunikasi dan pola pikir berorientasi pelanggan.</li>
                        <li>Memiliki inisiatif yang baik, cepat belajar, mampu beradaptasi dengan mudah, independen, serta mampu bekerja dalam tim dan jadwal yang ketat.</li>
                        <li>Bersedia ditempatkan di seluruh wilayah Indonesia</li>
                      </ol>                    
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">System Analyst</div>
                  <div class="card-body">
                    <ol>
                      <li>Pendidikan Min S1 Bidang Komputer.</li>
                      <li>Diutamakan Laki-laki.</li>
                      <li>Mampu bekerja dalam tim dan jadwal yang ketat.</li>
                      <li>Memiliki kemampuan komunikasi yang baik.</li>
                      <li>Memiliki kemauan untuk belajar dan menguasai komputer.</li>
                      <li>Bersedia ditempatkan di seluruh wilayah indonesia.</li><br><br><br>
                      </ol>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">Technical Support</div>
                    <div class="card-body">
                      <ol>
                        <li>Pendidikan Min D3/S1 jurusan Teknologi Informasi, Teknik Elektro atau Ilmu Komputer</li>
                        <li>Mampu bekerja dalam tim dan jadwal yang ketat.</li>
                        <li>Memiliki kemampuan komunikasi yang baik.</li>
                        <li>Memiliki kemauan untuk belajar, pengalaman dalam pengoperasian Mikrotik dan Windows Server lebih diutamakan.</li>
                        <li>Bersedia ditempatkan di seluruh wilayah Indonesia.</li>
                      </ol>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">Web Programer</div>
                    <div class="card-body">
                      <ol>
                        <li>Pendidikan Min D3/S1 jurusan Teknologi Informasi, Teknik Elektro atau Ilmu Komputer</li>
                        <li>Menguasai dan familiar dengan PHP, MySQL, CSS, HTML, Javascript</li>
                        <li>Mampu bekerja dalam tim dan jadwal yang ketat</li>
                        <li>Memiliki kemampuan komunikasi yang baik</li>
                        <li>Memiliki kemauan untuk belajar, pengalaman dalam mengembangkan web based application adalah nilai tambah</li>
                        <li>Bersedia ditempatkan di seluruh wilayah Indonesia</li>
                      </ol>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">Web Content Editor</div>
                    <div class="card-body">
                      <ol>
                      <li>1. Pendidikan D3 jurusan Ilmu Komunikasi/Jurnalistik/Bahasa</li>
                      <li>2. Berpengalaman mengelola website dan media sosial3.</li>
                      <li>3. Diutamakan memiliki kemampuan Bahasa Inggris</li>
                      <li>4. Memiliki kemampuan dasar pengolahan gambar digital (PhotoShop, CorelDraw)</li>
                      </ol>
                    </div>
                </div>
              </div>              
          </div>
        </div>
          </div>
        </div>
        <footer class="pt-3" style="border-top : 1px solid rgb(175,0,0);">
          <p>© Global Intermedia</p>
        </footer>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#ffbc3e; padding-vertical:0;">
            <h6 class="modal-title" id="registerModalLabel">Register Calon Pegawai</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-8">
                      <input name="" type="text" class="form-control" value="" placeholder="Nama Lengkap">
                    </div>
              </div>
              <div class="form-group row">
									<label class="col-sm-4 col-form-label">Jenis Kelamin :</label>
                  <div class="col-sm-8">
                    <select id="Pilih" class="form-control">
                        <option selected="">- Pilih Jenis Kelamin -</option>
                        <option>Wanita</option>
                        <option>Pria</option>
										</select>
                  </div>
              </div>
             <div class="form-group row">
                <label class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
             </div>
             <div class="form-group row">
                <label class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
             </div>
             <div class="form-group row">
                <label class="col-sm-4 col-form-label">Re-Password</label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-Password">
                </div>
             </div>
             <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Hp</label>
                    <div class="col-sm-8">
                      <input name="" type="text" class="form-control" value="" placeholder="Nomor Hp">
                    </div>
              </div>
            </form>
            <button type="submit" class="btn btn-success btn-block"><a href="<?= site_url('C_homepegawai')?>"></a>Daftar</button>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:#ffbc3e; padding-vertical:0;">
            <h6 class="modal-title" id="exampleModalLabel">Login Calon Pegawai</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-success"> <a href="#"></a> Sign In</button>
            </form>
        
      </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>

</body>
</html>