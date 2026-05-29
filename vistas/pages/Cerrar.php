<?php
  //session_start();
echo "cerrando session";
$_SESSION['UserID'] = NULL;
$_SESSION['UserNombre']= NULL;
$_SESSION['Privilegio']= NULL; 
$_SESSION['login'] = NULL;
  unset($_SESSION['UserID'] );
  unset($_SESSION['UserNombre'] );
  unset($_SESSION['Privilegio']); 
  unset($_SESSION['login']); 

  session_destroy();
  $_SESSION['UserID'] = 0;
  $_SESSION['UserNombre']= 0;
  $_SESSION['Privilegio']= 0; 
  $_SESSION['login'] = 0;
  echo "<script> window.location='login'; </script>";
  exit;
