<?php

class Demo
{
    private $idUsuario;
    private $nombre;
    private $tipo;
    private $fechaNac;
    

	
    
     function __construct($idUsuario, $nombre, $tipo, $fechaNac) {
       $this->idUsuario = $idUsuario;
       $this->nombre = $nombre;
	$this->tipo = $tipo;
	$this->fechaNac = $fechaNac;
     }
    
     function setIdUsuario($idUsuario){
       $this->idUsuario = $idUsuario;
     } 
     function getIdUsuario(){
       return $this->idUsuario;
     } 

     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 

     function setTipo($tipo){
       $this->tipo = $tipo;
     } 
     function getTipo(){
       return $this->tipo;
     } 


     function setFechaNac($fechaNac){
       $this->fechaNac = $fechaNac;
     } 
     function getFechaNac(){
       return $this->fechaNac;
     } 
}

?> 
