<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Halaman <?= $data['judul'] ?> </title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
  <a class="navbar-brand" href="<?= BASEURL; ?>">Maul MVC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link active" href="<?= BASEURL; ?>/mahasiswa">Kelompok <span class="sr-only">(current)</span></a>
      
      <a class="nav-link" href="<?= BASEURL; ?>/about">About Me</a>
    </div>
  </div>
  </div>
</nav>
