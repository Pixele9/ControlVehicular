<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="IVerificaciones.php">
  <p>INSERTAR VERIFICACIONES</p>
  <p>
    <label for="Folio">Folio</label>
    <input type="text" name="Folio" id="Folio" value="<?php print($_REQUEST['Folio']); ?>" />
  </p>
  <p>
    <label for="Tipo2">Tipo</label>
    <select name="Tipo2" id="Tipo2" value="<?php print($_REQUEST['Tipo2']); ?>" >
      <option value="EX">EXCENTO</option>
      <option value="00">HOLOGRAMA 00</option>
      <option value="0">HOLOGRAMA 0</option>
      <option value="1">HOLOGRAMA 1</option>
      <option value="2">HOLOGRAMA 2</option>
      <option value="FO">FORANEO</option>
    </select>
  </p>
  <p>
    <label for="Vigencia">Vigencia</label>
    <input type="date" name="Vigencia" id="Vigencia" required="true" value="<?php print($_REQUEST['Vigencia']); ?>" />
  </p>
  <p>
    <label for="Dictamen">Dictamen</label>
    <input type="text" name="Dictamen" id="Dicatamen" maxlength="100" required="true" value="<?php print($_REQUEST['Dicatamen']); ?>" />
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
