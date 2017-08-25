<?php

include_once('Demo.php');
include_once('Collector.php');

class DemoCollector extends Collector
{
  
  function showDemos() {
    $rows = self::$db->getRows("SELECT * FROM perfil ");        
    $arrayDemo= array();        
    foreach ($rows as $c){
      $aux = new Demo($c{'id_usuario'},$c{'nombre'},$c{'tipo'},$c{'fecha_nac'});
      array_push($arrayDemo, $aux);
    }
    return $arrayDemo;        
  }




function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM usuario where id_usuario= ? ", array ("{$id}"));
    $ObjDemo = new Demo($row[0]{'id_usuario'},$row[0]{'nombre'});
    return $ObjDemo;        
  }



function updateDemo($id, $nombre) {
    $insertrow = self::$db->updateRow("UPDATE public.usuario SET nombre= ? WHERE id_usuario = ? ", array( "{$nombre}",$id));     
  }


function deleteDemo($id) {
    $deleterow = self::$db->deleteRow("DELETE FROM public.usuario WHERE id_usuario = ? ", array("{$id}"));     
  }


//Clase guardarNuevo.php//
function createDemo($nombre) {
    $insertrow = self::$db->insertRow("INSERT INTO public.usuario (nombre) VALUES (?)", array("{$nombre}"));     
  }






}
?>

