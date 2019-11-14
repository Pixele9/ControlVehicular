<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="UConductores.php">
  <p>ACTUALIZAR CONDUCTORES</p>
  <p>
    <label for="idConductor">ID</label>
    <input name="idConductor" type="text"  id="idConductor" value="<?php print($_REQUEST['idConductor']); ?>" />
  </p>
  <p>
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" maxlength="100" required="true" value="<?php print($_REQUEST['Nombre']); ?>" />
  </p>
  <p>
    <label for="RFC">RFC</label>
    <input type="text" name="RFC" id="RFC" maxlength="18" required="true" value="<?php print($_REQUEST['RFC']); ?>" />
  </p>
  <p>
    <label for="Firma">Firma</label>
    <input type="text" name="Firma" id="Firma" required="true" value="<?php print($_REQUEST['Firma']); ?>" />
  </p>
  <p>
    <label for="Foto">Foto</label>
    <input type="text" name="Foto" id="Foto" required="true" value="<?php print($_REQUEST['Foto']); ?>" />
  </p>
  <p>
    <label for="Edad">Edad</label>
    <input type="number" name="Edad" id="Edad" min="16" max="99" maxlength="3" required="true" value="<?php print($_REQUEST['Edad']); ?>" />
  </p>
  <p>
    <label for="Direccion">Direccion</label>
    <input type="text" name="Direccion" id="Direccion" maxlength="50" required="true" value="<?php print($_REQUEST['Direccion']); ?>" />
  </p>
  <p>
    <label for="fechaNacimiento">Fecha de Nacimiento</label>
    <input type="date" name="fechaNacimiento" id="fechaNacimiento" required="required" value="<?php print($_REQUEST['fechaNacimiento']); ?>" />
  </p>
  <p>
    <label for="Donador">Donador</label>
    <select name="Donador" id="Donador" value="<?php print($_REQUEST['Donador']); ?>" >
      <option value="No">No</option>
      <option value="Si">Si</option>
    </select>
  </p>
  <p>
    <label for="CURP">CURP</label>
    <input type="text" name="CURP" id="CURP" maxlength="18" required="true" value="<?php print($_REQUEST['CURP']); ?>" />
  </p>
  <p>
    <label for="Genero">Genero</label>
    <select name="Genero" id="Genero" value="<?php print($_REQUEST['Genero']); ?>" >
      <option value="Mujer" selected="selected">Mujer</option>
      <option value="Hombre">Hombre</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
</body>
</html>
