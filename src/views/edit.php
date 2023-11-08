<h1>Editando el coche con id: <?= $id ?></h1>
<form action="index.php?action=update" method="post">

  <input type="hidden" name="id" value="<?= $id ?>">

  <p>
    <label for="">Marca</label>
    <input type="text" name="make" value="<?= $car->make ?>">
  </p>

  <p>
    <label for="">Model</label>
    <input type="text" name="model" value="<?= $car->model ?>">
  </p>

  <p>
    <label for="">Año</label>
    <input type="number" name="year" value="<?= $car->year ?>">
  </p>

  <p>
    <label for="">Color</label>
    <input type="color" name="color" value="<?= $car->color ?>">
  </p>

  <p>
    <input type="submit" value="Crear">
  </p>

</form>