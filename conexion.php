<?php
// HOST DEFINITIVO
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $database = 'secmuqtacl_simge';

// $conn = new mysqli($servername, $username, $password, $database);
// if ($conn->connect_error) {
//     die('Error en la conexión a la base de datos: ' . $conn->connect_error);
// }
/*HOST DE PRUEBAS */
// $servername = 'localhost';
// $username = 'id20884005_secmuqta';
// $password = '9z~BQ~=<lBwVy7VL';
// $database = 'id20884005_secmuqtacl_simge';

// $conn = new mysqli($servername, $username, $password, $database);
// if ($conn->connect_error) {
//    die('Error en la conexión a la base de datos: ' . $conn->connect_error);
// }
// HOST LOCAL
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'secmuqtacl_simge';

  $conn = new mysqli($servername, $username, $password, $database);
  if ($conn->connect_error) {
      die('Error en la conexión a la base de datos: ' . $conn->connect_error);
  }else{
   // echo'conexion exitosa';
  }
  

?>