<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="icon" href="<?= base_url("assets/img/g.png")?>" type="image/gif" sizes="20x20" >
  <title>Login Admin PKL</title>
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/homepegawai.css')?>">
</head>
<style>
  body{
    background-color: #d33c27;
  }
  navbar{
    padding : 5px 5px;
  }
</style>
<body>
  <nav class="navbar navbar-expand-sm fixed-top">
      <div class="collapse navbar-collapse "  id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-link"><a href="<?= site_url('C_req') ?>" id="clr"><ion-icon name="home"></ion-icon> Home </a></li>
        </ul>
      </div>
      <div class="collapse navbar-collapse navbar-inline dropdown justify-content-end">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="clr"><ion-icon name="logo-windows"></ion-icon>  Login</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" class="load-modal" href="#"> <ion-icon name="person"></ion-icon> Admin PKL</a></li>
            <li><a class="dropdown-item" class="load-modal" href="#"><ion-icon name="person"></ion-icon> Admin Pegawai</a></li>
          </ul>
        </ul>
      </div>
  </nav>
    <div style="height : 250px;"></div>
    <form>
    <h2 style="color : white; text-align : center; font-family : Arial;">Login Admin Pegawai</h2>
    <div>
        <input type="text" name="user" class="form-control animate2 bounceIn" placeholder="Username" style="max-width : 330px; margin : auto; font-size : 16px;">
        <input type="password" name="pass" class="form-control animate3 bounceIn" placeholder="Password" style="max-width : 330px; margin : auto; font-size : 16px; margin-bottom : 10px;">
        <a href="<?= site_url('C_loginadmin/admin') ?>" class="btn btn-danger btn-lg btn-block" role="button" style="margin : auto; max-width : 330px;">Sign in</a>  
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>
</html>