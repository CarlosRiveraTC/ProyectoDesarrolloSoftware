
  <<div class="jumbotron" >
  <div class="container" >
  <link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/style.css">
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
  <center><h3>Bienvenido a la carta</h3></center>

    <?php $activa = $this->uri->segment(2); ?>
  <?php if ($activa == 'MostrarPostre'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/fresa.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Gelatina de yogurth con fresas</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$30.00</h4>
  </div>

  </div>";} ?>

  <?php if ($activa == 'MostrarPostre'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/crepas.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle  food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Crepas Rellenas</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$26.00</h4>
  </div>

  </div>";} ?>

<?php if ($activa == 'MostrarPostre'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/fruta.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Avenas y Frutas</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$32.00</h4>
  </div>

  </div>";} ?>

   <?php if ($activa == 'MostrarPostre'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/pastel.png)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Pastel Entero</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$152.00</h4>
  </div>

  </div>";} ?>




  <?php $activa = $this->uri->segment(2); ?>
  <?php if ($activa == 'MostrarBebida'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/limonada.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Limonada Mineral</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$30.00</h4>
  </div>

  </div>";} ?>

  <?php if ($activa == 'MostrarBebida'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/cleri.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle  food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Clericot</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$46.00</h4>
  </div>

  </div>";} ?>

<?php if ($activa == 'MostrarBebida'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/michelada.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Michelada</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$40.00</h4>
  </div>

  </div>";} ?>

   <?php if ($activa == 'MostrarBebida'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/vino.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Vino Tinto</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$200.00</h4>
  </div>

  </div>";} ?>



   <?php $activa = $this->uri->segment(2); ?>
  <?php if ($activa == 'MostrarDesayuno'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/hot.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class=' abajo centrar lobster white-text subtitle'>Waffles</h3>
    <h4 class=' abajo centrar lobster white-text subtitle'>$38.00</h4>
  </div>

  </div>";} ?>

  <?php if ($activa == 'MostrarDesayuno'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/2.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle  food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class=' abajo centrar lobster white-text subtitle'>Enchiladas Suizas</h3>
    <h4 class=' abajo centrar lobster white-text subtitle'>$42.00</h4>
  </div>

  </div>";} ?>

<?php if ($activa == 'MostrarDesayuno'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/3.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class=' abajo centrar lobster white-text subtitle'>Waffles con Fruta</h3>
    <h4 class=' abajo centrar lobster white-text subtitle'>$52.00</h4>
  </div>

  </div>";} ?>

   <?php if ($activa == 'MostrarDesayuno'){ echo "<div style='background-image: url(http://localhost/restaurante/img/food/4.jpg)'alt='Logo' class='col-md-4 col-lg-3 col-sm-6 col-xs-12 img-circle food'>
  <div class= 'screen'>
    <div class='row full-height middle-xs'></div>
    <div class= 'class='col-xs-12''></div>
    <div class= 'box'></div>
    <h3 class='abajo centrar lobster white-text subtitle'>Huevos al Gusto</h3>
    <h4 class='abajo centrar lobster white-text subtitle'>$28.00</h4>
  </div>

  </div>";} ?>
  </div>
  </div>

<div style="background-image: url();"></div>
<div class="container">
  <?php $activa = $this->uri->segment(2); ?>
  <ul class="nav nav-tabs">
  <li role="presentation" <?php if ($activa == 'vista') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>menu/vista">Inicio</a></li>

  <li role="presentation" <?php if ($activa == 'MostrarPostre') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>menu/MostrarPostre">Postres</a></li>

  <li role="presentation" <?php if ($activa == 'MostrarBebida') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>menu/MostrarBebida">Bebidas</a></li>

  <li role="presentation" <?php if ($activa == 'MostrarDesayuno') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>menu/MostrarDesayuno">Desayunos</a></li>

    <li role="presentation" <?php if ($activa == 'MostrarEnsalada') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>menu/MostrarEnsalada">Ensaladas</a></li>

  <li role="presentation" <?php if ($activa == 'MostrarAve') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>menu/MostrarAve">Aves</a></li>

  <li role="presentation" <?php if ($activa == 'MostrarEntrada') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>menu/MostrarEntrada">Entradas y Sopas</a></li>

</ul>
</div>
  <div class="container">
  <div class="row">
    <div class="col-md-4">
<br>
  <div class="container">
  <div class="row">
  <div class="col-md-8">
          <div class="box box-primary">
            <table  id="tblPlatillo" class="table table-bordered">
                <tr>
                  <th style="width: 10px">Nombre</th>
                  <th>Ingredientes</th>
                  <th>Precio</th>
                </tr>
                <tbody>
                  <?php
                  if($platillos != FALSE)
                  {
                    foreach ($platillos->result() as $row) {
                      echo "<tr>";
                      echo "<td>".$row->nombre."</td>";
                      echo "<td>".$row->ingredientes."</td>";
                      echo "<td>".$row->precio."</td>";
                      echo "</tr>";
                    }
                  }
                   ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
  </div>
</body>
</html>
