<div class="jumbotron">
    	<div class="container">
    		<center><h3>Platillos</h></center>
    			<center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
    	</div>
    </div>
      <br>


          <right>
  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2><center>Datos del platillo</center></h2>
      <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>Platillo/guardar" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Tipo</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Ingresa el tipo de platillo">
          </div>
        </div>


        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el Nombre">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Precio</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresa el precio">
          </div>
          </div>
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Ingredientes</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="ingredientes" name="ingredientes" placeholder="Ingresa los ingredientes">
          </div>
          </div>
          <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">Tiempo preparacion</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="tiempo_preparacion" name="tiempo_preparacion" placeholder="Ingresa el tiempo de preparacion">
          </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
          </div>
        </div>
  </div>
</div>
<br>
<right>
  <div class="container">
  <div class="row">
  <div class="col-md-8">
          <div class="box box-primary">
            <table  id="tblPlatillo" class="table table-bordered">
                <tr>
                  <th style="width: 10px">Tipo</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Ingredientes</th>
                  <th>Tiempo</th>
                </tr>
                <tbody>
                  <?php
                  if($platillos != FALSE)
                  {
                    foreach ($platillos->result() as $row) {
                      echo "<tr>";
                      echo "<td>".$row->tipo."</td>";
                      echo "<td>".$row->nombre."</td>";
                      echo "<td>".$row->precio."</td>";
                      echo "<td>".$row->ingredientes."</td>";
                      echo "<td>".$row->tiempo_preparacion."</td>";
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
</right>
  </body>
</html>
