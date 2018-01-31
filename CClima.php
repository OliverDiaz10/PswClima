<?php
class CClima
{
    private $secuencia;
    private $codigoCiudad;
    private $mes;
    private $dia;
    private $hora;
    private $temperatura;
    
     function __construct($secuencia, $ciudad, $mes, $dia, $hora, $temp) {
       $this->secuencia = $secuencia;
       $this->codigoCiudad = $ciudad;
       $this->mes = $mes;
       $this->dia = $dia;
       $this->hora = $hora;
       $this->temperatura = $temp;
     }
     
     function setSecuencia($secuencia){
       $this->secuencia = $secuencia;
     }
     function getSecuencia(){
       return $this->secuencia;
     }

     function setCodigoCiudad($ciudad){
       $this->codigoCiudad = $ciudad;
     }
     function getCodigoCiudad(){
       return $this->codigoCiudad;
     }

     function setMes($mes){
       $this->mes = $mes;
     }
     function getMes(){
       return $this->mes;
     }

     function setDia($dia){
       $this->dia = $dia;
     }
     function getDia(){
       return $this->dia;
     }

     function setHora($hora){
       $this->hora = $hora;
     }
     function getHora(){
       return $this->hora;
     }

     function setTemperatura($temp){
       $this->temperatura = $temp;
     }
     function getTemperatura(){
       return $this->temperatura;
     }

}
?> 
