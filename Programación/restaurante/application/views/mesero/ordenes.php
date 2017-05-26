<div class="jumbotron">
<div class="container">
<center><h3>Mesero</h3></center>
<center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
</div>
</div>
<div class="container">
  <div class="row">
  <div class="col-md-6">
    <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>mesero/mesa" method="post">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">No. Orden</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="noOrden" name="noOrden" placeholder="Numero de orden" required="Dato necesario">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">No. Mesa</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="noMesa" name="noMesa" placeholder="Numero de mesa" required="Dato necesario">
        </div>
      </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Fecha</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" id="fecha" name="fecha" placeholder="aaaa-mm-dd" required="Dato necesario">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
        </div>
      </div>
    </form>
  </div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
      <div class="box box-primary">
        <h3>Ordenes Pedidas</h3>
        <table  id="tblPlatillo" class="table table-bordered">
            <tr>
              <th><center>Mesa</center></th>
              <th><center>Orden</center></th>
              <th><center>Estado</center></th>
              <th><center></center></th>
            </tr>
            <tbody>
              <?php
              if($ordenes != FALSE)
              {
                foreach ($ordenes->result() as $row) {
                  if($row->estado == "Ordenada")
                  {
                  echo "<tr>";
                  echo "<td><center>".$row->num_mesa."</center></td>";
                  echo "<td><center>".$row->numero_orden."</center></td>";
                  echo "<td><center><a href= '".base_url()."mesero/cocinar/".$row->numero_orden."' class='btn btn-primary btn-sm'>
                  Cocinar<span class='glyphicon glyphicon-fire'></span></a></center></td>";
                  echo "<td><center><a href= '".base_url()."mesero/orden/".$row->numero_orden."' class='btn btn-primary btn-sm'>
                  Ordenar &nbsp;<span class='glyphicon glyphicon-pencil'></span></a>
                  <a href= '".base_url()."mesero/borrar/".$row->numero_orden."' class='btn btn-danger btn-sm'>
                  <span class='glyphicon glyphicon-trash'></span></a></center></td>";
                  echo"</tr>";
                }
                }
              }
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
      <div class="box box-primary">
        <h3>Ordenes Entregadas</h3>
        <table  id="tblPlatillo" class="table table-bordered">
            <tr>
              <th><center>Mesa</center></th>
              <th><center>Orden</center></th>
              <th><center>Estado</center></th>
            </tr>
            <tbody>
              <?php
              if($ordenes != FALSE)
              {
                foreach ($ordenes->result() as $row) {
                  if($row->estado == "Terminada")
                  {
                  echo "<tr>";
                  echo "<td><center>".$row->num_mesa."</center></td>";
                  echo "<td><center>".$row->numero_orden."</center></td>";
                  echo "<td><center><a href= '".base_url()."mesero/pagar/".$row->numero_orden."' class='btn btn-primary btn-sm'>
                  Pagar<span class=' glyphicon glyphicon-usd'></span></a></center></td>";
                  echo"</tr>";
                }
                }
              }
               ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
