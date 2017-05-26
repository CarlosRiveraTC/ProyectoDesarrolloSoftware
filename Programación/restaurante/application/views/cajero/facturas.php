<div class="jumbotron">
  	<div class="container">
  		<center><h2>Cajero</h2></center>
  			<center>
        <img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px">
      </center>
  	</div>
  </div>


 <div class="container" >
      <div class="row">
      <center><h2>DATOS DE LA FACTURA</h2></center>
      <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>cajero/guardarFactura" method="post">

      <div form class="form-inline" class="col-md-2">
          <label for="inputEmail2" control-label>Número:</label>
          <input type="text" class="form-control" id="numero" name="numero" placeholder="Factura" required="Dato requerido" >
          <label for="inputEmail2" control-label>Cliente:</label>
          <input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nombre Cliente" required="Dato requerido">
          <label for="inputEmail2" control-label>RFC:</label>
          <input type="text" class="form-control" id="rfc" name="rfc" placeholder="RFC Cliente" required="Dato requerido">
          <label for="inputEmail2" control-label>Email:</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email Cliente" required="Dato requerido">
      </div>
      <div form class="form-inline" class="col-md-2">
          <label for="inputEmail2" control-label>Folio:</label>
          <input type="text" class="form-control" id="folio_ticket" name="folio_ticket" placeholder="Folio ticket" value="<?=$folio?>" required="Dato requerido">
          <label for="inputEmail3" class="control-label">Fecha:</label>
          <input type='text' class='form-control' id='fecha' name='fecha' placeholder='Fecha' value="<?=$fecha?>" required="Dato requerido">
          <label for="inputEmail3" class="control-label">Concepto:</label>
          <input type="text" class="form-control" id="concepto" name="concepto" placeholder="Concepto" required="Dato requerido">
          <label for="inputEmail3" class="control-label">Total:</label>
          <input type="text" class="form-control" id="total" name="total" placeholder="Total facturado" value="<?=$total?>" required="Dato requerido"s>
          <button type="submit" class="btn btn-primary" id="facturar" name="facturar">Facturar</button>
      </div>



</body>
</html>
