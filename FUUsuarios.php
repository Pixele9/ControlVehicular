<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="IUsuarios.php">
  <p>INSERTAR USUARIOS</p>
  <p>
    <label for="Usuario">Nombre de Usuario</label>
    <input type="text" name="Usuario" id="Usuario" value="<?php print($_REQUEST['Usuario']); ?>" />
  </p>
  <p>
    <label for="Contrasenia">Contrasenia</label>
    <input type="text" name="Contrasenia" id="Contrasenia" value="<?php print($_REQUEST['Contrasenia']); ?>" />
  </p>
  <p>
    <label for="Tipo">Tipo</label>
    <input type="text" name="Tipo" id="Tipo" value="<?php print($_REQUEST['Tipo']); ?>" />
  </p>
  <p>
    <label for="Estado">Estado</label>
    <input type="text" name="Estado" id="Estado" value="<?php print($_REQUEST['Estado']); ?>" />
  </p>
  <p>
    <label for="Intento">Intento</label>
    <input type="text" name="Intento" id="Intento" value="<?php print($_REQUEST['Intento']); ?>" />
  </p>
  <p>
    <label for="Bloqueado">Bloqueado</label>
    <input type="text" name="Bloqueado" id="Bloqueado" value="<?php print($_REQUEST['Bloqueado']); ?>" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
    <br />
  </p>
</form>
</body>
</html>
