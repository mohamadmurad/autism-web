<?php
require_once 'core/init.php';

$tempadmin = new Admin();
 if($tempadmin->isLoggedIn()){
    $tempadmin->logout();
  
 }



Redirect::to('../login.php');
exit();