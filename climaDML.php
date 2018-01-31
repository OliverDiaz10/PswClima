<?php
    session_start();
?>
<html lang="es">
<head>
</head>
<body>
    <header>
    </header>
<?php
    include_once("CClimaCollector.php");
    
            $ciudad = $_POST["txtCiudad"];
            $mes = $_POST["txtMes"];
            $dia = $_POST["txtDia"];
            $hora = $_POST["txtHora"];
            $temp = $_POST["txtTemp"];
            
            $lobClimaCollector = new CClimaCollector();
            $lobClimaCollector->insertREC($ciudad, $mes, $dia, $hora, $temp);
            echo "Registro Creado Exitosamente...";

?>    
    <div><a href="clima.php">Volver Administración de Clima</a></div>
</body>
</html>
