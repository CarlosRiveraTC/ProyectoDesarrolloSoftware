<div class="jumbotron">
	<div class="container">
		<center><h3><?php echo lang('create_group_heading');?></h3></center>
			<center><img src="http://localhost/restaurante/img/mr-chilon.jpg" alt="Logo" class="img-circle" width="150px"></center>
	</div>
	</div>
	  <div class="container">
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group");?>

      <p>
            <?php echo lang('create_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name);?>
      </p>

      <p>
            <?php echo lang('create_group_desc_label', 'description');?> <br />
            <?php echo form_input($description);?>
      </p>

      <button type="submit" class="btn btn-primary">Crear grupo</button>

<?php echo form_close();?>
</div>
</body>
</html>
