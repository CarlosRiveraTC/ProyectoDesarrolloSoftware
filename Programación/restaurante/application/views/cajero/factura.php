<div class="jumbotron">
  	<div class="container">
  		<center><h2>Cajero</h2></center>
  			<center>
        <img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px">
      </center>
  	</div>
  </div>

  <div class="container">
    <div class="row">
    <h2><center>Consultar datos del facturante</center></h2>
        <p><b>Buscar por nombre del cliente</b></p>
            <form id="form" method="GET" action="facturar">
              <input type="text" id="query" name="query" required="" />
              <input type="submit"  id="buscar" value="buscar" />
              <input type="submit"  id="facturar" value="facturar" />
            </form>
                      <table  id="tblCliente" class="table table-bordered" align="center">
                          <tr>
                            <th style="width: 10px">Nombre</th>
                            <th>Direccion</th>
                            <th>RFC</th>
                            <th>EMAIL</th>
                            <th>TELEFONO</th>
                          </tr>
                         <tbody>
                            <?php
                            if($result != FALSE)
                            {
                              foreach ($result->result() as $row) {
                                echo "<td>".$row->nombre."</td>";
                                echo "<td>".$row->direccion."</td>";
                                echo "<td>".$row->rfc."</td>";
                                echo "<td>".$row->email."</td>";
                                echo "<td>".$row->telefono."</td>";
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