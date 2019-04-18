<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="just say it, us as a 'BIG TASK' creator :)">
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/kon-kar.css')?>">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title><?= $title ?></title>
        <style>
            body {
                background-color: #B43522;
            }
            a, a:hover, .mb-0 {
                color: #e4422b;
            }
            .btn-outline-danger {
                border-color: #e4422b;
                color : #e4422b;
            }
            .btn-outline-danger:hover {
                background-color: #e4422b;
            }
            .container {
                background-color: white;
                box-shadow: 0 6px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 10px 0 rgba(0, 0, 0, 0.19);
            }
            .web-header {
            line-height: 1;
            padding-top: 20px;
            }
            .web-content{
                box-shadow : 2px 0px 2px 0px rgba(0,0,0,0.2);
            }
            .web-header-logo {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
            font-size: 2.25rem;
            }
            .web-header-logo:hover {
            text-decoration: none;
            }
            h1, h2, h3, h4, h5, h6 {
            font-family: "Playfair Display", Georgia, "Times New Roman", serif;
            }
            .display-4 {
            font-size: 2.5rem;
            }
                @media (min-width: 768px) {
                .display-4 {
                    font-size: 3rem;
                }
            }
            .card-img-right {
            height: 100%;
            border-radius: 0 3px 3px 0;
            }
            .flex-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            }
            .h-250 { height: 250px; }
            @media (min-width: 768px) {
            .h-md-250 { height: 250px; }
            }
            .web-title {
            margin-bottom: 0;
            font-size: 2rem;
            font-weight: 400;
            }
            .web-description {
            font-size: 1.1rem;
            color: #999;
            }
            @media (min-width: 40em) {
                .web-title {
                    font-size: 3.5rem;
                }
            }
            .web-pagination {
            margin-bottom: 4rem;
            }
            .web-pagination > .btn {
            border-radius: 2rem;
            }
            .web-post {
            margin-bottom: 4rem;
            }
            .web-post-title {
            margin-bottom: .25rem;
            font-size: 2.5rem;
            }
            .web-post-meta {
            margin-bottom: 1.25rem;
            color: #999;
            }
            .web-footer {
            padding: 2.5rem 0;
            color: #999;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
            }
            .bring-me-to-front{
                z-index : 1;
                position : relative;
            }
            .web-footer p:last-child {
            margin-bottom: 0;
            }
            .nav-link{
                color :crimson;
            }
            .nav-link:hover{
                color:rgb(146, 0, 0);
            
            }
        </style>
    </head>
    <body>
    <div class="container col-sm-8" style="background-color : #B43522; box-shadow : 15px;">
        <div class="container">
            <header class="web-header">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-12 text-right">
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="" style="hight: 65px; width: 250px;" >
                        <!-- <a class="web-header-logo text-dark" href="https://getbootstrap.com/docs/4.3/examples/blog/#">GlobalIntermedia</a> -->
                    </div>
                </div>
            </header>
            
            <nav class="nav justify-content-end">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('C_main_view') ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('C_main_view/profil') ?>">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('C_main_view/berita') ?>">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('C_main_view/solusi') ?>">Solusi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('C_main_view/portfolio') ?>">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('C_main_view/karir') ?>">Karir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('C_main_view/kontak') ?>">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('C_main_view/galeri') ?>">Galeri</a>
                    </li>
                </ul>
            </nav>
            <br>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/img/1.jpg') ?>" class="d-block w-100" alt="1">
        </div>
        <div class="carousel-item">
        <img src="<?= base_url('assets/img/2.jpg') ?>" class="d-block w-100" alt="2">
        </div>
        <div class="carousel-item">
        <img src="<?= base_url('assets/img/3.jpg') ?>" class="d-block w-100" alt="3">
        </div>
    </div>
    </div>
            <main role="main">
                <div class="row">
                    <div class="col-md-8 web-main web-content">
                        <?php $this->load->view($main_content) ?>
                    </div>
                    <?php if ($sidebar) $this->load->view('sidebar'); ?>
                </div>
            </main>
            <footer class="web-footer bg-white bring-me-to-front">
                <a href="<?= site_url('C_main_view') ?>">Beranda</a> | <a href="<?= site_url('C_main_view/profil') ?>">Profil</a> | <a href="<?= site_url('C_main_view/berita') ?>">Berita</a> | <a href="<?= site_url('C_main_view/solusi') ?>">Solusi</a> | <a href="<?= site_url('C_main_view/portfolio') ?>">Portfolio</a> | <a href="<?= site_url('C_main_view/karir') ?>">Karir</a> | <a href="<?= site_url('C_main_view/kontak') ?>">Kontak</a> | <a href="<?= site_url('C_main_view/galeri') ?>">Galeri</a>
                <p>© 2004 - 2019 Copyright PT. Global Intermedia Nusantara</p>
                <p>PT. Global Intermedia Nusantara</p>
                <p>Jl. Taman Siswa No. 125 Yogyakarta 55151 </p>
            </footer>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>