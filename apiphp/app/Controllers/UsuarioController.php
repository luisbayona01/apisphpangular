<?php 
 namespace app\Controllers;
use app\Models\Usuario;
  class UsuarioController 
  { 
    
    public  function findALL(){
    $usuario=new Usuario();
    $usuariosData=$usuario->All();
    return $usuariosData;  
    

       }

    public function crear($data){
    $usuario=new Usuario();
    $usuariosData=$usuario->Savedata($data);
    return $usuariosData;  

    }   


   public function update($data){
    $usuario=new Usuario();
    $usuariosData=$usuario->Update($data);
    return $usuariosData;  

    }   


public function delete($idusuario){
    $usuario=new Usuario();
    $usuariosData=$usuario->delete($idusuario);
    return $usuariosData;  

    }   



  
  } 