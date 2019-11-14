<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UPropietarios.php">
  <p>ACTUALIZAR PROPIETARIOS
</p>
  <p>
    <label for="idPropietario">ID</label>
    <input name="idPropietario" type="text" id="idPropietario" value="<?php print($_REQUEST['idPropietario']); ?>" />
  </p>
  <p>
    <label for="RFC">RFC</label>
    <input type="text" name="RFC" id="RFC" maxlength="15" required="true" value="<?php print($_REQUEST['RFC']); ?>" />
  </p>
  <p>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" maxlength="50" required="true" value="<?php print($_REQUEST['Nombre']); ?>" />
  </p>
  <p>
    <label for="Direccion">Direccion</label>
    <input type="text" name="Direccion" id="Direccion" maxlength="150" required="true" value="<?php print($_REQUEST['Nombre']); ?>" />
  </p>
  <p>
    <label for="FechaNacimiento">FechaNacimiento</label>
    <input type="date" name="FechaNacimiento" id="FechaNacimiento" required="true" value="<?php print($_REQUEST['FechaNacimiento']); ?>" />
  </p>
  <p>
    <label for="CURP">CURP</label>
    <input type="text" name="CURP" id="CURP" maxlength="18" required="true" value="<?php print($_REQUEST['CURP']); ?>" />
  </p>
  <p>
    <label for="TipoPersona">TipoPersona</label>
    <select name="TipoPersona" id="TipoPersona" required="true" value="<?php print($_REQUEST['TipoPersona']); ?>">
      <option value="Fisica">Fisica</option>
      <option value="Moral">Moral</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
</body>
</html>
