<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FULicencias</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="ULicencias.php">
  <p>ACTUALIZAR LICENCIAS</p>
  <p>
    <label for="IdLicencia">ID</label>
    <input name="IdLicencia" type="text" id="IdLicencia" value="<?php print($_REQUEST['IdLicencia']); ?>" />
    <!-- <h1><?php echo "IdConductor ".$_REQUEST['IdConductor'] ?></h1> -->
  </p>
  <p>
    <label for="FechaExpedicion">Fecha de expedicion</label>
    <input type="date" name="FechaExpedicion" id="FechaExpedicion" required="true" value="<?php print($_REQUEST['FechaExpedicion']); ?>" />
  </p>
  <p>
    <label for="Antiguedad">Antiguedad</label>
    <input type="number" name="Antiguedad" id="Antiguedad" maxlength="2" required="true" value="<?php print($_REQUEST['Antiguedad']); ?>" />
  </p>
  <p>
    <label for="Vigencia">Vigencia</label>
    <input type="date" name="Vigencia" id="Vigencia" required="true" value="<?php print($_REQUEST['Vigencia']); ?>" />
  </p>
  <p>
    <label for="LugarExpedicion">Lugar de Expedicion</label>
    <input type="text" name="LugarExpedicion" id="LugarExpedicion" maxlength="20" required="true" value="<?php print($_REQUEST['LugarExpedicion']); ?>" />
  </p>
  <p>
    <label for="Restriccion">Restriccion</label>
    <input type="text" name="Restriccion" id="Restriccion" maxlength="20" required="true" value="<?php print($_REQUEST['Restriccion']); ?>" />
  </p>
  <p>
    <label for="idConductor">Conductor</label>
    <input type="text" name="IdConductor" id="IdConductor" maxlength="10" required="true" value="<?php print($_REQUEST['IdConductor']); ?>" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" />
  </p>
</form>
</body>
</html>
