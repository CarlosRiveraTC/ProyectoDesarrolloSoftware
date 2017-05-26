  <div class="jumbotron">
  <div class="container">
  <center><h3>Chef</h3></center>
  <center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
  </div>
  </div>
  <div class="container">
  <center><h2>Status de Pedidos</h2></center>
  <br>
  </div>

    <div class="container">
  <div class="row">
  <div class="col-md-4 col-md-offset-4">
          <div class="box box-primary">
            <table  id="tblOrden" class="table table-bordered">
                <tr>
                  <th align="center">No. Orden</th>
                  <th>No. Platillo</th>
                  <th>Status</th>
                </tr>
                <tbody>
                  <?php
                  if($orden_platillo != FALSE)
                  {
                    foreach ($orden_platillo->result() as $row) {
                      echo "<tr align=center>";
                      echo "<td align=center>".$row->numero_orden."</td>";
                      echo "<td align=center>".$row->id_platillo."</td>";
                      if($row->status == "Terminado")
                      {
                        echo "<td><a href= '".base_url()."chef/espera/".$row->numero_orden."/".$row->id_platillo."' class='btn btn-success btn-sm'>Terminado
                        <span class='glyphicon glyphicon-ok'>
                        </span>
                        </a></td>";
                      }else{
                         echo "<td><a href='".base_url()."chef/terminado/".$row->numero_orden."/".$row->id_platillo."' class='btn btn-warning btn-sm'>En Espera
                        <span class='glyphicon glyphicon-dashboard'>
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
  </body>
  </html>
</body>
</html>
