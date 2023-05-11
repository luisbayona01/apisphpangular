<?php 

namespace app\Models;
use\config\Main;
//require_once('../../../config/Main.php');  
  class Usuario extends Main 
  { 
    
    public  function All(){
     
     $sql="select * from usuario";
     $Query=$this->dbAbreDatabase($sql); 
    $data=array();
    while($rows=$this->dbTrareGistro($Query)){
           $data[]=$rows;
          
    }
          
            return $data;
        } 

 public function  Savedata($data){

  $nombre=$data['nombre'];
    $apellido=$data['apellido'];
   $edad=$data['edad'];
   $foto=$data['foto'];
   $tipodocumento=$data['tipo_documento'];
   $rolid=$data['rol_id'];
   $sql= "INSERT INTO usuario (nombre,apellido,edad,foto,tipo_documento,id_rol) VALUES('".$nombre."','".$apellido."','".$edad."','".$foto."','".$tipodocumento."','".$rolid."')";
    //echo $sql;
    //die();
   $queryinsertuser=$this->dbAbreDatabase($sql);

   if ($queryinsertuser) {
      $res=true;
    } else {
      $res=false;
    }
     
    $data=array( "exito"=>$res,
                "accion"=>'se creo un usuario  con exito'); 
  
   return $data;
   }


 public function  Update($data){
   $id=$data['id'];
   $nombre=$data['nombre'];
   $apellido=$data['apellido'];
   $edad=$data['edad'];
   $foto=$data['foto'];
   $tipodocumento=$data['tipo_documento'];
   $rolid=$data['rol_id'];
   $sql= " update usuario set nombre='".$nombre."', apellido= '".$apellido."',edad= '".$edad."', foto='".$foto."', tipo_documento='".$tipodocumento."', id_rol='".$rolid."' where  id='".$id."' " ;
  
   $queryupdate=$this->dbAbreDatabase($sql);

   if ($queryupdate) {
      $res=true;
    } else {
      $res=false;
    }
     
    $data=array( "exito"=>$res,
                "accion"=>'se actualizo un usuario  con exito'); 
  
   return $data;
 

 }  


public function  delete($iduser){
   $sql= " delete  FROM usuario  where  id='".$iduser."' " ;
  
   $querydelete=$this->dbAbreDatabase($sql);

   if ($querydelete) {
      $res=true;
    } else {
      $res=false;
    }
     
    $data=array( "exito"=>$res,
                "accion"=>'se elimino un usuario  con exito'); 
  
   return $data;
 

 }  


}




  