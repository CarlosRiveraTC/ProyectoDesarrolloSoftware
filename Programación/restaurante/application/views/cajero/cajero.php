 <div class="jumbotron">
    <div class="container">
      <center><h2>Cajero</h2></center>
        <center>
        <img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px">
      </center>
    </div>
  </div>

  <div class="container">
  <center><h4>ORDENES A PAGAR</h4></center>
  </div>

<div class="container">
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
            <table  id="tblOrdenes" class="table table-bordered" align="center">
                <tr>
                  <th style="width: 10px">FECHA</th>
                  <th>NÚM. ORDEN</th>
                  <th>NÚM. MESA</th>
                  <th>ESTADO</th>
                </tr>
                <tbody>
                  <?php
                  if($ordenes != FALSE) //ordenes
                  {
                    foreach ($ordenes->result() as $row) {
                      if($row->estado=="Pagando"){
                      echo "<tr>";
                      echo "<td align = center>".$row->fecha."</td>";
                      echo "<td align = center>".$row->numero_orden."</td>";
                      echo "<td align = center>".$row->num_mesa."</td>";
                      echo "<td><a href='".base_url()."cajero/pagar/".$row->numero_orden."' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-usd'></span>Pagar</a></td>";
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
  <center><h4>TICKETS POR FACTURAR</h4></center>
  </div>

<div class="container">
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
      <div class="box box-primary">
            <table  id="tblOrdenes" class="table table-bordered" align="center">
                <tr>
                  <th style="width: 10px">FOLIO</th>
                  <th>FECHA</th>
                  <th>TOTAL</th>
                  <th>ESTADO</th>
                </tr>
                <tbody>
                  <?php
                  if($tickets != FALSE)
                  {
                    foreach ($tickets->result() as $row) {
                      if($row->estado=="Por facturar"){
                        echo "<tr>";
                        echo "<td align = center>".$row->folio."</td>";
                        echo "<td align = center>".$row->fecha."</td>";
                        echo "<td align = center>".$row->total."</td>";
                        echo "<td align = center><a href='cajero/facturas/".$row->folio."' class='btn btn-success btn-sm'> Por facturar
                          <span class='glyphicon glyphicon-ok'>
                          </span>
                          </a></td>";
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


  </div>

<!--<?php
$hoy = getdate();
print_r($hoy);
?> -->

</body>
</html>