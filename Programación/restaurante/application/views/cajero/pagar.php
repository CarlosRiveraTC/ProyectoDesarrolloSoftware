<div class="jumbotron">
  <div class="container">
	  <center><h3>Cajero</h3></center>
  		<center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
  </div>
</div>

	<div class="container" >
      <div class="row">
      <center><h2>Datos del Ticket</h2></center>
      <form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>cajero/guardarTicket" method="post">
  </div>

  <div class="form-inline">
    <label for="inputEmail2" control-label>Folio:</label>
    <input type="text" class="form-control" id="folio" name="folio" placeholder="Folio del ticket" required=" Dato necesario">
    <label for="inputEmail3" class="control-label">Fecha:</label>
    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha (aaaa-mm-dd)" required=" Dato necesario">
    <div class="form-group">
       <label for="inputEmail2" class="crol-label">Orden:</label>
        <?php
          if($orden != FALSE){
            foreach ($orden->result() as $row) {
              echo "<input type='text' class='form-control' id='numero_orden' name='numero_orden' value='".$row->numero_orden."' readonly required='Dato necesario'>";
              $num_orden = $row->numero_orden;
            }
          }
        ?>
    </div>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-md-40">
            <div class="box box-primary">
              <table  id="tblPlatillos" class="table table-bordered" align="center">
                  <tr>
                    <th>Num. Orden</th>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                  </tr>
                  <tbody>
                    <?php
                      if($platillos != FALSE)
                      {
                        foreach ($platillos->result() as $row) {
                          echo "<tr>";
                          echo "<td align = center>".$row->numero_orden."</td>";
                          echo "<td align = center>".$row->tipo."</td>";
                          echo "<td align = center>".$row->nombre."</td>";
                          echo "<td align = center>".$row->precio."</td>";
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

  <div class="form-inline">
    <label for="inputEmail2" class="control-label">Subtotal:</label>
    <input type="text" class="form-control" id="subtotal" name="subtotal" placeholder="Subtotal" required="Dato requerido">
    <label for="inputEmail2" class="control-label">Total:</label>
    <input type="text" class="form-control" id="total" name="total" placeholder="Total a pagar" required="Dato requeridos">
    <button type="submit" class="btn btn-primary" id="imprimir" name="imprimir">Imprimir</button>
  </div>
</form>
</div>
</body>
</html>
