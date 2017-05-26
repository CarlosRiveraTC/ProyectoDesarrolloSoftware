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
      <center><h2>TODAS LAS FACTURAS</h2></center>
  </div>

      <div class="container" >
          <table  id="tblCliente" class="table table-bordered" align="center">
              <tr>
              <th style="width: 10px">NUMERO</th>
              <th>CLIENTE</th>
              <th>RFC</th>
              <th>FECHA</th>
              <th>CONCEPTO</th>
              <th>TOTAL</th>
                          </tr>
                         <tbody>
                            <?php
                            if($facturas != FALSE)
                            {
                              foreach ($facturas->result() as $row) {
                                echo "<td>".$row->numero."</td>";
                                echo "<td>".$row->cliente."</td>";
                                echo "<td>".$row->rfc."</td>";
                                echo "<td>".$row->fecha."</td>";
                                echo "<td>".$row->concepto."</td>";
                                echo "<td>".$row->total."</td>";
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