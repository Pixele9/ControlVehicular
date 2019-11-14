<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="IVehiculos.php">
  <p>
    <label for="ID"></label>
  INSERTAR VEHICULOS	</p>
  <p>
    <label for="idVehiculo">ID</label>
    <input name="idVehiculo" type="text" id="idVehiculo" value="<?php print($_REQUEST['idVehiculo']); ?>" />
  </p>
  <p>Numero de Serie 
    <label for="numSerie"></label>
    <input type="text" name="numSerie" id="numSerie" maxlength="19" required="true" value="<?php print($_REQUEST['numSerie']); ?>" />
  </p>
  <p>
    <label for="Placa">Placa</label>
    <input type="text" name="Placa" id="Placa" maxlength="8" required="true" value="<?php print($_REQUEST['Placa']); ?>" />
  </p>
  <p>
    <label for="Motor">Numero Motor</label>
    <input type="text" name="Motor" id="Motor" maxlength="19" required="true" value="<?php print($_REQUEST['Motor']); ?>" />
  </p>
  <p>
    <label for="Factura">Factura</label>
    <input type="text" name="Factura" id="Factura" maxlength="30" required="true" value="<?php print($_REQUEST['Factura']); ?>" />
  </p>
  <p>
    <label for="Version">Version</label>
    <input type="text" name="Version" id="Version" maxlength="20" required="true" value="<?php print($_REQUEST['Version']); ?>" />
  </p>
  <p>
    <label for="Anio">Anio</label>
    <input type="number" name="Anio" id="Anio" min="1900" maxlength="4" required="true" value="<?php print($_REQUEST['Anio']); ?>" />
  </p>
  <p>
    <label for="Color">Color</label>
    <input type="text" name="Color" id="Color" maxlength="15" required="true" value="<?php print($_REQUEST['Color']); ?>" />
  </p>
  <p>
    <label for="Modelo">Modelo</label>
    <input type="text" name="Modelo" id="Modelo" maxlength="30" required="true" value="<?php print($_REQUEST['Modelo']); ?>" />
  </p>
  <p>
    <label for="Origen">Origen</label>
    <input type="text" name="Origen" id="Origen" maxlength="40" required="true" value="<?php print($_REQUEST['Origen']); ?>" />
  </p>
  <p>
    <label for="numPuertas">Puertas</label>
    <input type="number" name="numPuertas" id="numPuertas" min="0" max="4" maxlength="1" required="true" value="<?php print($_REQUEST['numPuertas']); ?>" />
  </p>
  <p>
    <label for="Transmision">Transmision</label>
    <input type="text" name="Transmision" id="Transmision" maxlength="10" required="true" value="<?php print($_REQUEST['Transmision']); ?>" />
  </p>
  <p>
    <label for="tipoCombustible">Tipo de Combustible</label>
    <select name="tipoCombustible" id="tipoCombustible" value="<?php print($_REQUEST['tipoCombustible']); ?>">
      <option value="Gasolina 98 octanos">Gasolina 98 octanos</option>
      <option value="Gasolina 95 octanos">Gasolina 95 octanos</option>
      <option value="Diesel">Diesel</option>
      <option value="Biodiesel">Biodiesel</option>
      <option value="Gas natural">Gas natural</option>
      <option value="Otro">Otro</option>
    </select>
  </p>
  <p>
    <label for="Cilindraje">Cilindraje</label>
    <input type="number" name="Cilindraje" id="Cilindraje" maxlength="11" required="true" value="<?php print($_REQUEST['Cilindraje']); ?>" />
  </p>
  <p>
    <label for="idPropietario">Propietario</label>
    <input type="number" name="idPropietario" id="idPropietario" maxlength="10" required="true" value="<?php print($_REQUEST['idPropietario']); ?>" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
</body>
</html>
