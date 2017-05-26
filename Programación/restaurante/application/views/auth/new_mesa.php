 <div class="jumbotron">
  	<div class="container">
  		<center><h3><?php echo lang('create_user_heading');?></h3></center>
  			<center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
  	</div>
  	</div>
    <div class="container">
    <div class="container">
  <div class="row">
    <div class="col-md-4">
      <h2><center>Agregar Mesa</center></h2>
      <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>mesa/nueva" method="post">



        <div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">N° Mesa</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="numero" name="numero" placeholder="N° Mesa">
          </div>
        </div>


        <div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">N° Personas</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="numero_sillas" name="numero_sillas" placeholder="N° Personas">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-4 control-label">Disponibilidad</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="disponibilidad" name="disponibilidad" placeholder="Disponibilidad">
          </div>
          </div>
          <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
          </div>
        </div>
        <right>
  
  <div class="row">
      <div class="col-md-50">
          <div class="box box-primary">
            <table  id="tblReservacion" class="table table-bordered" align="center">
                <tr>
                  <th style="width: 20px">Numero</th>
                  <th align="leftg">Numero Sillas</th>
                  <th>Disponibilidad</th>
                
                </tr>
                <tbody>
                  <?php
                  if($mesas != FALSE)
                  {
                    foreach ($mesas->result() as $row) {
                      echo "<tr>";
                      echo "<td>".$row->numero."</td>";
                      echo "<td>".$row->numero_sillas."</td>";
                      echo "<td>".$row->disponibilidad."</td>";
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