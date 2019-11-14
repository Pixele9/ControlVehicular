<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UTenencias.php">
  <p>ACTUALIZAR TENENCIAS</p>
  <p>
    <label for="idTenencia">ID</label>
    <input name="idTenencia" type="text"  id="idTenencia" value="<?php print($_REQUEST['idTenencia']); ?>" />
  </p>
  <p>
    <label for="Monto">Monto</label>
    <input type="text" name="Monto" id="Monto" maxlength="7" required="true" value="<?php print($_REQUEST['Monto']); ?>" />
  </p>
  <p>
    <label for="AnioTenencia">Anio de Tenencia</label>
    <input type="number" name="AnioTenencia" id="AnioTenencia" min="1900" maxlength="4" required="true" value="<?php print($_REQUEST['AnioTenencia']); ?>" />
  </p>
  <p>
    <label for="Descuento">Descuento %</label>
    <input type="number" name="Descuento" id="Descuento" required="required" value="<?php print($_REQUEST['Descuento']); ?>" />
  </p>
  <p>
    <label for="idVehiculo">Vehiculo</label>
    <input type="number" name="idVehiculo" id="idVehiculo" maxlength="10" required="true" value="<?php print($_REQUEST['idVehiculo']); ?>" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
</body>
</html>
