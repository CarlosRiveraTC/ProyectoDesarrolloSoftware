  <div class="jumbotron">
   <div class="container">
     <center><h3>Recepcionista</h3></center>
      <center>
        <img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px">
      </center>

    <div class="container">
      <div class="row">
      <div class="col-md-5">
      <h2>Datos de la reservación</h2>
      <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>recepcionista/reservacion" method="post">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nombre completo">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Fecha</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha de la reservación (aaaa-mm-dd)">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Hora</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="hora" name="hora" placeholder="Hora de la reservación (hh:mm)">
            </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">No. Personas</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="num_persona" name="num_persona" placeholder="Número de personas">
          </div>
        </div>

        <div class="container">
          <div class="col-md-6">
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
              </div>
            </div>
          </div>
        </div>
    
    
     <div class="row">
      <div class="col-md-50">
          <div class="box box-primary">
            <table  id="tblReservacion" class="table table-bordered" align="center">
                <tr>
                  <th style="width: 20px">Hora</th>
                  <th align="leftg">Fecha</th>
                  <th>Nombre</th>
                  <th>Num. Personas</th>
                </tr>
                <tbody>
                  <?php
                  if($reservacion != FALSE)
                  {
                    foreach ($reservacion->result() as $row) {
                      echo "<tr>";
                      echo "<td>".$row->hora."</td>";
                      echo "<td>".$row->fecha."</td>";
                      echo "<td>".$row->cliente."</td>";
                      echo "<td>".$row->num_persona."</td>";
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