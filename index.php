<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">

	
</head>
<body background="img/fondosesion.jpg" style="background-attachment: fixed" >
	<center><div class="tit"><h2 style="color: #FFFFFF">Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt ; color: #fff"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt ; color: #fff"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" style="background:#8d6ab9 ; border: 1px solid white " value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt; color: #fff"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt ; color:#fff"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" style="border-radius:15px;" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #fff;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control" style="border-radius:15px;"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #fff;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control" style="border-radius:15px;" placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt ;  color:#fff"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" style="border-radius:15px;" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" style="background:#8d6ab9 ; border: 1px solid white "name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div>
		</div>

	
</body>
</html>