<?php
include_once("CClima.php");
include_once("Collector.php");
class CClimaCollector extends Collector
{
    function selectALL(){
        $rows = self::$db->getRows("select * from public.mg_clima where codigo_ciudad = 'GYE' order by mes, dia, hora");
        $arrayData = array();
        foreach ($rows as $i){
            $aux = new CClima($i{'secuencia'}, $i{'codigo_ciudad'}, $i{'mes'}, $i{'dia'}, $i{'hora'}, $i{'temperatura'});
            array_push($arrayData, $aux);
        }
        return $arrayData;
    }
    
    function selectPK($id){
        $row = self::$db->getRow("select * from public.mg_clima where secuencia = ?", array("{$id}"));
        
        $lobClima = new CClima($i{'secuencia'}, $i{'codigo_ciudad'}, $i{'mes'}, $i{'dia'}, $i{'hora'}, $i{'temperatura'});
        
        return $lobClima;
    }
    
    function insertREC($ciudad, $mes, $dia, $hora, $temp){
        $insertarow = self::$db->insertRow("INSERT INTO public.mg_clima (codigo_ciudad, mes, dia, hora, temperatura) VALUES (?,?,?,?,?)", array ("{$ciudad}","{$mes}","{$dia}","{$hora}","{$temp}"));
    }    
}
?>

