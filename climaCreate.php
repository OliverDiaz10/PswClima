<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header></header>
    <h2>Crear Registro de Clima</h2>
    
    <form action="climaDML.php" method="post">
    <fieldset>
        <label>Ciudad: </label><input type="text" name="txtCiudad" autofocus><br><br>
        <label>Mes: </label><input type="text" name="txtMes"><br><br>
        <label>Dia: </label><input type="text" name="txtDia"><br><br>
        <label>Hora: </label><input type="text" name="txtHora"><br><br>
        <label>Temperatura: </label><input type="text" name="txtTemp"><br><br>
    </fieldset>
    <fieldset>
        <button type="submit" style="padding:5px">Guardar</button> <a href="clima.php">Cancelar</a>
        <br>
    </fieldset>
    </form>
</body>
</html>
