
<div class="jumbotron">
    <div class="container"> 
      <center><h3>Editar Almacen</h3></center>
        <center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
    </div>
  </div>

  
    <div class="container">
  <div class="row">
    <div class="col-md-10">
      <h2><center>Editar Productos del almacen</center></h2>
 <div class="form-group">
 <form class='form_horizontal' role='form' id='form' name='form' method='POST' action="<?=base_url()?>alma/guardaredit/<?=$id?>">

 <div class='form-group'>
          <label for='inputEmail3' class='col-sm-4 control-label'>Nombre de producto</label>
          <div class='col-sm-6'>
            <input type='text' class='form-control' id='tipo' name='tipo' placeholder='Nombre Producto' value="<?=$tipo?>" readonly required=''>
          </div>
        </div>
      <div class='form-group'>
          <label for='inputEmail3' class='col-sm-4 control-label'>Nombre de producto</label>
          <div class='col-sm-6'>
            <input type='text' class='form-control' id='nombre' name='nombre' placeholder='Nombre Producto' value="<?=$nombre?>" required=''>
          </div>
        </div>

        <div class='form-group'>
          <label for='inputEmail3' class='col-sm-4 control-label'>Cantidad de Productos</label>
          <div class='col-sm-6'>
            <input type='text' class='form-control' id='num_pieza' name='num_pieza' placeholder='Cantidad' value="<?=$num_pieza?>" required ='' >
          </div>
        </div>
        <br>
        <div class='form-group'>
        <label for='inputEmail3' class='col-sm-4 control-label'>Unidades: </label>
         <div class='col-sm-6'>
            <input type='text' class='form-control' id='unidad' name='unidad' placeholder='Unidad' value="<?=$unidad?>" required=''>
  </div>
    </div>
    <div class='form-group'>
    <div class="col-sm-offset-2 col-sm-10">
    <input type='submit' class='btn btn-primary' id='guardaredit' value=Guardar />
    </div>
    </div>
   </form>

  </div>

</body>
</html>