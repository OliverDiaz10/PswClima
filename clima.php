<?php
  session_start();
?>
<html lang="es">
<head>
<style>
    table, td, th {
        border: 1px solid black;
    }
    table {
        border-collapse: collapse;
        width: 80%;
    }
    th, td{
        text-align: left;
        padding: 5px;
    }
</style>
</head>
<body>
    <header>
    </header>
    <h2>Administración de Clima - Ciudad Guayaquil</h2>
    <table>
    <tr>
        <th>Ciudad</th>
        <th>Mes</th>
        <th>Dia</th>
        <th>Hora</th>
        <th>Temp</th>
        <th><a href="climaCreate.php">Crear</a></th>
    </tr>
<?php
    include_once("CClimaCollector.php");
    $id = 1;
    $lobClimaCollector = new CClimaCollector();
    foreach ($lobClimaCollector->selectALL() as $r){
        echo "<tr>";
        echo "    <td>".$r->getCodigoCiudad()."</td>";
        echo "    <td>".$r->getMes()."</td>";
        echo "    <td>".$r->getDia()."</td>";
        echo "    <td>".$r->getHora()."</td>";
        echo "    <td>".$r->getTemperatura()."</td>";
        echo "    <td></td>";
        echo "</tr>";
    }
?>
    </table>
</body>
</html>
