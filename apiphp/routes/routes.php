<?php
require_once'./autoload.php';
use app\Controllers\UsuarioController;

require_once __DIR__.'/router.php';
/*llamar  vista php */

 
get('/users', function(){
$Usuario=new UsuarioController();
echo  json_encode($Usuario->findALL());  
  
});

post('/users', function(){
 $body = file_get_contents("php://input");
 $data = json_decode($body, true);;
 $Usuario=new UsuarioController();
  echo  json_encode($Usuario->crear($data));
 
});


put('/users', function(){
   $body = file_get_contents("php://input");
 $data = json_decode($body, true);;
 $Usuario=new UsuarioController();
  echo  json_encode($Usuario->update($data));
 });

delete('/users/$idusuario', function($idusuario){
$Usuario=new UsuarioController();
echo  json_encode($Usuario->delete($idusuario));
});






any('/404','views/404.php');
