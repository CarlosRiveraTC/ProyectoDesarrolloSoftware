 <div class="jumbotron">
  <div class="container">
  <center><h3>Chef</h3></center>
  <center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
  </div>
  </div>
  <div class="container">
  <center><h2>Pedidos</h2></center>
  <br>
  </div>

   <div class="container">
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
          <div class="box box-primary">
            <table  id="tblOrden" class="table table-bordered">
                <tr>
                  <th align=center>No. Orden</th>
                  <th>Fecha</th>
                  <th>No. Mesa</th>
                   <th>Estado</th>
                </tr>
                <tbody>
                  <?php
                  if($ordenes != FALSE)
                  {
                    foreach ($ordenes->result() as $row) {
                      if($row->estado == "Cocinando")
                      {

                      echo "<tr>";
                      echo "<td align=center>".$row->numero_orden."</td>";
                      echo "<td align=center>".$row->fecha."</td>";
                      echo "<td align=center>".$row->num_mesa."</td>";


                        echo "<td align=center><a href= '".base_url()."chef/cocinando/".$row->numero_orden."' class='btn btn-warning btn-sm'>Cocinando
                        <span class='glyphicon glyphicon-dashboard'>
                        ";


                    echo "<td align=center><a href= '".base_url()."chef/status/".$row->numero_orden."' class='btn btn-primary btn-sm'>Ver pedidos
                        <span class='glyphicon glyphicon-eye-open'>
                        ";
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
