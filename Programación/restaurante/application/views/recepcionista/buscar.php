  <div class="jumbotron">
    <div class="container"> 
      <center><h3>Recepcionista</h3></center>
        <center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
    </div>
  </div>

  <div class="container">
    <div class="row">   
     <h2><center>Consultar la reservación</center></h2>
        <p><b>Buscar por nombre completo</b></p>
            <form id="form" method="GET" action="buscar">
              <input type="text" id="query" name="query" />
              <input type="submit"  id="buscar" value="buscar" />
            </form>
                      <table  id="tblReservacion" class="table table-bordered" align="center">
                          <tr>
                            <th style="width: 10px">Nombre</th>
                            <th align="leftg">Fecha</th>
                            <th>Hora</th>
                            <th>Personas</th>
                          </tr>
                          <tbody>
                            <?php
                            if($result != FALSE)
                            {
                              foreach ($result->result() as $row) {
                                echo "<td>".$row->cliente."</td>";
                                echo "<td>".$row->fecha."</td>";
                                echo "<td>".$row->hora."</td>";
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
    </div>
  </div>
</body>
</html>