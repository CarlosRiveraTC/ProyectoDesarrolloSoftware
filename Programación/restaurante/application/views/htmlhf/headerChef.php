<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<html>
<head>
<meta charset="utf-8">
<title>Restaurante Mr.Chilon</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

  <!-- Menu o barra de navegacion -->
<navbar-right>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Restaurante Mr. Chilon "La mejor comida tradicional de Mexico"</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <?php $activa = $this->uri->segment(2); ?>
          <ul class="nav navbar-nav">
            <li <?php if ($activa == '/') { echo "class='active'"; } ?>>
              <a href="<?=base_url()?>chef"><span class="glyphicon glyphicon-time"></span>&nbsp;Pedidos</a>
            </li>
             
            <li>
              <a href="<?=base_url()?>auth/logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Salir</a>
            </li>
           
          </ul>
       </div>
      </div>
    </nav>
  </navbar-right>
