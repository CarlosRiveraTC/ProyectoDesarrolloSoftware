<div class="jumbotron">
    <div class="container"> 
      <center><h3>Recepcionista</h3></center>
        <center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
    </div>
  </div>




  <div class="container">
    <div class="row">   
     <h2><center>Consultar Productos</center></h2>

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
  </div>
 

 <br>

        <p><b>Buscar por nombre de producto</b></p>
            <form id="form" method="GET" action="buscar">
              <input type="text" id="query" name="query" />
              <input type="submit"  id="buscarbuscar" value="buscar" />
      
            </form>
                      <table  id="tblReservacion" class="table table-bordered" align="center">
                          <tr>
                            <th style="width: 5px">Tipo</th>
                            <th align="leftg">Nombre</th>
                            <th>Numero de piezas</th>
                            <th>Unidades</th>
                          </tr>
                          <tbody>
                            <?php
                            if($result != FALSE)
                            {
                              foreach ($result->result() as $row) {
                                echo "<td>".$row->tipo."</td>";
                                echo "<td>".$row->nombre."</td>";
                                echo "<td>".$row->num_pieza."</td>";
                                echo "<td>".$row->unidad."</td>";
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
    </div>
  </div>
</body>
</html>
