<div class="jumbotron">
<div class="container">
<center><h3>Mesero</h3></center>
<center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
</div>
</div>
<div class="container">
      <?php
      if($orden != FALSE)
      {
        foreach ($orden->result() as $row) {
          echo "
          <div class='form-group'>
        <label for='inputEmail3' class='col-sm-2 control-label'>No. Orden</label>
        <div class='col-sm-6'>
          <input type='text' class='form-control' id='noOrden' name='noOrden' value='".$row->numero_orden."' readonly required='Dato necesario'>
        </div>
      </div>";
      $num_orden = $row->numero_orden;
        }
      }
       ?>
       <br>
       <br>
<?php $activa = $this->uri->segment(2); ?>
<ul class="nav nav-tabs">
  <li role='presentation' <?php if ($activa == 'orden') { echo "class='active'"; } ?>>
  <a   <?php
    if($orden != FALSE)
    {
      foreach ($orden->result() as $row) {
        echo "href='".base_url()."mesero/orden/".$row->numero_orden."'";
      }}?>>Inicio</a></li>
<li role="presentation" <?php if ($activa == 'MostrarPostre') { echo "class='active'"; } ?>>
<a <?php
  if($orden != FALSE)
  {
    foreach ($orden->result() as $row) {
      echo "href='".base_url()."mesero/MostrarPostre/".$row->numero_orden."'";
    }}?>>Postres</a></li>

<li role="presentation" <?php if ($activa == 'MostrarBebida') { echo "class='active'"; } ?>>
<a <?php
  if($orden != FALSE)
  {
    foreach ($orden->result() as $row) {
      echo "href='".base_url()."mesero/MostrarBebida/".$row->numero_orden."'";
    }}?>>Bebidas</a></li>

<li role="presentation" <?php if ($activa == 'MostrarDesayuno') { echo "class='active'"; } ?>>
<a <?php
  if($orden != FALSE)
  {
    foreach ($orden->result() as $row) {
      echo "href='".base_url()."mesero/MostrarDesayuno/".$row->numero_orden."'";
    }}?>>Desayunos</a></li>

  <li role="presentation" <?php if ($activa == 'MostrarEnsalada') { echo "class='active'"; } ?>>
<a <?php
  if($orden != FALSE)
  {
    foreach ($orden->result() as $row) {
      echo "href='".base_url()."mesero/MostrarEnsalada/".$row->numero_orden."'";
    }}?>>Ensaladas</a></li>

<li role="presentation" <?php if ($activa == 'MostrarAve') { echo "class='active'"; } ?>>
<a <?php
  if($orden != FALSE)
  {
    foreach ($orden->result() as $row) {
      echo "href='".base_url()."mesero/MostrarAve/".$row->numero_orden."'";
    }}?>>Aves</a></li>

<li role="presentation" <?php if ($activa == 'MostrarEntrada') { echo "class='active'"; } ?>>
<a <?php
  if($orden != FALSE)
  {
    foreach ($orden->result() as $row) {
      echo "href='".base_url()."mesero/MostrarEntrada/".$row->numero_orden."'";
    }}?>>Entradas y Sopas</a></li>

</ul>

        <div class="box box-primary">
          <table  id="tblPlatillo" class="table table-bordered">
              <tr>
                <th style="width: 100px">Nombre</th>
                <th>Ingredientes</th>
                <th>Precio</th>
                <th></th>
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
                    echo "<td><center>

                    <a href= '".base_url()."mesero/agregarP/".$num_orden."/".$row->id."' class='btn btn-success btn-sm'>
                    <span class='glyphicon glyphicon-plus'>
                    </span>
                    </a></td>";
                    echo "</tr>";
                  }
                }
                 ?>
              </tbody>
            </table>
          </div>
</div>

</div>

<div class="container">
<div class="row">
<div class="col-md-12">
        <div class="box box-primary">
          <table  id="tblPlatillo" class="table table-bordered">
              <tr>
                <th><center>Orden</center></th>
                <th>Platillo</th>
              </tr>
              <tbody>
                <?php
                if($tiene != FALSE)
                {
                  foreach ($tiene->result() as $row) {
                    echo "<tr>";
                    echo "<td>".$row->numero_orden."</td>";
                    echo "<td>".$row->id_platillo."</td>";
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
