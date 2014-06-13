<!DOCTYPE html>
<html>
  <head>

    <title>Mandelbrot DB Explorer | <?php echo $title ?></title>

    <!-- Used Twitter Bootstrap for quick & lazy CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/assets/css/custom.css" rel="stylesheet" media="screen">

  </head>

  <body>
    <nav class="navbar navbar-default navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Mandelbrot DB Explorer</a>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="/">Home</a>
            </li>
            <li>
              <a href="<?= site_url('mbrot') ?>">Choose Level</a>
            </li>
            <li>
              <a href="<?= site_url('about') ?>">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="container">
      <div class="row">
        <div class="col-md-12">

