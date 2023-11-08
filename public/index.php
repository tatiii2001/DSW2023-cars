<?php
// require '../src/models/Car.php';
// require '../src/controllers/CarController.php';
require '../vendor/autoload.php';

use Tati\Cars\Controllers\CarController;
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Ejercicio de Coches</h1>
  <?php
  $table = isset($_GET['table']) ? $_GET['table'] : 'car';
  $action = isset($_GET['action']) ? $_GET['action'] : 'list';
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  $controller = null;
  switch ($table) {
    case 'car':
      $controller = new CarController();
      break;
  }

  switch ($action) {
    case 'list':
      $controller->list();
      break;
    case 'show':
      $controller->show($id);
      break;
    case 'delete':
      $controller->delete($id);
      break;
    case 'create':
      $controller->create();
      break;
    case 'post':
      $controller->post($_POST);
      break;
    case 'edit':
      $controller->edit($id);
      break;
  }



  // $controller = new CarController();
  // if (isset($_GET['id'])) {
  //   $id = $_GET['id'];
  //   if (isset($_GET['action'])) {
  //     $action = $_GET['action'];
  //     if ($action == 'delete') {
  //       $controller->delete($id);
  //     }
  //   } else {
  //     $controller->show($id);
  //   }
  // } else {
  //   $controller->create();
  //   $controller->list();
  // }
  ?>
</body>

</html>