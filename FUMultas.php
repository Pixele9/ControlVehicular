<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UMultas.php">
  <p>ACTUALIZAR MULTAS</p>
  <p>
    <label for="idMulta">ID</label>
    <input name="idMulta" type="text" id="idMulta" value="<?php print($_REQUEST['idMulta']); ?>" />
  </p>
  <p>
    <label for="Motivo">Motivo</label>
    <input type="text" name="Motivo" id="Motivo" maxlength="80" required="true" value="<?php print($_REQUEST['Motivo']); ?>" />
  </p>
  <p>
    <label for="Agente">Agente</label>
    <input type="text" name="Agente" id="Agente" maxlength="50" required="true" value="<?php print($_REQUEST['Agente']); ?>" />
  </p>
  <p>
    <label for="Fecha">Fecha</label>
    <input type="date" name="Fecha" id="Fecha" value="<?php print($_REQUEST['Fecha']); ?>" />
  </p>
  <p>
    <label for="Lugar">Lugar</label>
    <input type="text" name="Lugar" id="Lugar" maxlength="70" required="true" value="<?php print($_REQUEST['Lugar']); ?>" />
  </p>
  <p>
    <label for="Hora">Hora</label>
    <input type="time" name="Hora" id="Hora" value="<?php print($_REQUEST['Hora']); ?>" />
  </p>
  <p>
    <label for="Garantia">Numero Garantia</label>
    <input type="number" name="Garantia" id="Garantia" maxlength="10" required="true" value="<?php print($_REQUEST['Garantia']); ?>" />
  </p>
  <p>
    <label for="Descuento">Descuento %</label>
    <input type="number" name="Descuento" id="Descuento" maxlength="18" required="true" value="<?php print($_REQUEST['Descuento']); ?>" />
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
