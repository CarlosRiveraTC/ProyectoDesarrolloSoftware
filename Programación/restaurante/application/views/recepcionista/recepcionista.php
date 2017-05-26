
  <div class="jumbotron">
  <div class="container">
  <center><h3>Recepcionista</h3></center>
  <center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
  </div>
  </div>
  <div class="container">
  <center><h4>MESAS</h4></center>
  </div>

    <div class="container">
  <div class="row">
  <div class="col-md-8">
          <div class="box box-primary">
            <table  id="tblPlatillo" class="table table-bordered">
                <tr>
                  <th style="width: 10px">Numero</th>
                  <th>Asientos</th>
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
                      if($row->disponibilidad == "SI")
                      {
                        echo "<td><a href= '".base_url()."recepcionista/ocupar/".$row->numero."' class='btn btn-success btn-sm'>Ocupar
                        <span class='glyphicon glyphicon-lock'>
                        </span>
                        </a></td>";
                      }else{
                         echo "<td><a href='".base_url()."recepcionista/liberar/".$row->numero."' class='btn btn-danger btn-sm'>Liberar
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
  </body>
  </html>
</body>
</html>
