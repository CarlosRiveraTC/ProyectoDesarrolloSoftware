<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<title>Restaurante Mr.Chilon</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="<?=base_url() ?>css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lobster+Two" rel="stylesheet">
</head>

<body>
<div class='video-container'>
      <!-- Width and height attrs are ok on media and images -->
      <video autoplay height='720' loop poster='http://localhost/restaurante/videos/mp4/Fruity.jpg' width='1280'>
        <source src='http://localhost/restaurante/videos/mp4/Fruity.mp4' type='video/mp4'>
        <source src='http://localhost/restaurante/videos/mp4/ruity.webm' type='video/webm'>
      </video>
    </div>
    <div class='row middle-xs full-height center-xs up relative'>
      <nav class='right top up main-nav' id='navigation'>
        <ul class='list-inline'>

        <div class="container">
            <a class="navbar-brand lobster subtitle black-text" href="">Restaurante Mr. Chilon "La mejor comida tradicional de Mexico"</a>
            <img class="fixed top right, img-circle" src="http://localhost/restaurante/img/mr-chilon.jpg" width="750px">
          </div>

          <!--/.navbar-collapse -->
          </div>
          </nav>
           <div class="jumbotron">
              <div class="container"></div>
              </div>

              <div class='col-xs-12  black-text   lobster size  centrar no-margin'>
              <div id="infoMessage"><?php echo $message;?></div>
    <?php echo form_open("auth/login");?>
      <table>
        <th>
    <p><?php echo lang('login_subheading','class="trans"');?></p>
      <p>
        <?php echo lang('login_identity_label', 'identity','transpa');?>
        <?php echo form_input($identity);?>
    </p>
    <p>
      <?php echo lang('login_password_label', 'password');?>
      <?php echo form_input($password);?>
    </p>
    <p>
      <?php echo lang('login_remember_label', 'remember');?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    </p>
    <button type="submit" class="btn btn-primary">Entrar</button>
      <?php echo form_close();?>
      <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
    <nav>
      </table>
      <?php echo form_open("menu/vista");?>
    <table>
     <button type="submit" class="btn btn-primary, centrar">Ver menú</button>
  <?php echo form_close();?>
  </table>
  </nav>
  </th>
  </table>
  </div>
  </ul>
</div>
</div>
</body>
</html>
