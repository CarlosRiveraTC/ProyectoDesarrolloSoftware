<div class="jumbotron">
 <div class="container">
<center><h3>Usuario</h3></center>
<center>
  <img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px">
</center>
</div>
</div>

  <div class="container">
    <div class="row">
    <div class="col-md-5">
    <h2><center>Datos de la reservación</center></h2>
    <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>usuario/reservar" method="post" >

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Fecha</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha de la reservación (aaaa-mm-dd)" required>
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Hora</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="hora" name="hora" placeholder="Hora de la reservación (hh:mm)" required="">
          </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-3 control-label">No. Personas</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" id="num_persona" name="num_persona" placeholder="Número de personas" required="">
        </div>
      </div>

      <div class="container">
        <div class="col-md-8">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" id="guardar" name="guardar">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </right>
