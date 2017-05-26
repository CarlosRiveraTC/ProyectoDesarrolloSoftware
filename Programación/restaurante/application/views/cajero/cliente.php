  <div class="jumbotron">
   <div class="container">
     <center><h3>Ingresa los datos para la factura</h3></center>
      <center>
        <img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px">
      </center>
    </div>
  </div>


    <div class="container">
      <div class="row">
      <div class="col-md-5">
      <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>cajero/guardar" method="post">

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" required="">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required="">
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">RFC</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC" required="">
            </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">E-MAIL</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="email" name="email" placeholder="E-MAIL" >
          </div>
        </div>

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Telefono</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" >
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
