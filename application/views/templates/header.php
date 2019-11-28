<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
  integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
  crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  
  <title><?php echo $judul; ?>
  </title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4d80e4;">
    <div class="container">
      <a class="navbar-brand" href="#" style="color: #ffffff;">PDAM ADMIN</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #ffffff;">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" style="color: #ffffff;" href="<?= base_url(); ?>">Home
            <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" style="color: #ffffff;" href="<?= base_url(); ?>pendaftar">Pendaftar</a>
          <a class="nav-item nav-link" style="color: #ffffff;" href="<?= base_url(); ?>pelanggan">Pelanggan</a>
          <a class="nav-item nav-link" style="color: #ffffff;" href="<?= base_url(); ?>tagihan">Tagihan Air</a>
          <a class="nav-item nav-link" style="color: #ffffff;" href="<?= base_url(); ?>pengaduan">Pengaduan</a>
          <a class="nav-item nav-link" style="color: #ffffff;" href="<?= base_url(); ?>masalah">Masalah Air</a>
          <a class="nav-item nav-link" style="color: #ffffff;" href="#">About</a>
          <a class="nav-item nav-link" style="color: #ffffff;" href="index.php/authentication/logout">Logout</a>
          <!--a href="<?php echo base_url('index.php/authentication/logout') ?>">Logout</a-->
        </div>
      </div>
    </div>
  </nav>