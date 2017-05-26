<br><br><br>
<div class="jumbotron">
    	<div class="container">
    		<center><h3>Almacen</h></center>
    			<center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
    	</div>
    </div>
      <br>
      <div class="container">
    <div class="container">
  <div class="row">
    <div class="col-md-10">
      <h2><center>Agregar Productos al almacen</center></h2>
      <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>alma/nueva" method="post">




  <?php $activa = $this->uri->segment(2); ?>
  <ul class="nav nav-tabs">
  <li role="presentation" <?php if ($activa == 'buscar') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/buscar"><h4>Buscar</h4></a></li>

  <li role="presentation" <?php if ($activa == 'almacen') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/almacen"><h4>Inicio</h4></a></li>
  <li role="presentation" <?php if ($activa == 'MostrarCarnes') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/MostrarCarnes"><h4>Carnes</h4></a></li>

  <li role="presentation" <?php if ($activa == 'MostrarFrutas') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/MostrarFrutas"><h4>Frutas</h4></a></li>

  <li role="presentation" <?php if ($activa == 'MostrarVerduras') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/MostrarVerduras"><h4>Verduras</h4></a></li>

    <li role="presentation" <?php if ($activa == 'MostrarSemillas') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/MostrarSemillas"><h4>Semillas</h4></a></li>

  <li role="presentation" <?php if ($activa == 'MostrarEnlatados') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/MostrarEnlatados"><h4>Enlatados</h4></a></li>

  <li role="presentation" <?php if ($activa == 'MostrarPastas') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/MostrarPastas"><h4>Pastas</h4></a></li>

  <li role="presentation" <?php if ($activa == 'MostrarCereales') { echo "class='active'"; } ?>>
  <a href="<?=base_url()?>alma/MostrarCereales"><h4>Cereales</h4></a></li>
  
</ul>
<br>
<br>

         <div class="row">
      <div class="col-md-600">
          <div " class="box box-primary">
            <table  id="tblalmacen" class="table table-bordered" align="center">
                <tr>
                  <th style="width: 20px">Tipo De Produtos</th>
                  <th>Nombre del producto</th>
                  <th>Cantidad</th>
                  <th>Unidades</th>
                
                </tr>
                <tbody>
                <?php
                  if($productos != FALSE)
                  {
                    foreach ($productos->result() as $row) {
                      echo "<tr>";
                      echo "<td>".$row->tipo."</td>";
                      echo "<td>".$row->nombre."</td>";
                      echo "<td>".$row->num_pieza."</td>";
                      echo "<td>".$row->unidad."</td>";
                       echo "<td><a href='MasProductos/".$row->id."' class='btn btn-info'>
                        <span class='glyphicon glyphicon-edit'>
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
        </right>
        </form>
  