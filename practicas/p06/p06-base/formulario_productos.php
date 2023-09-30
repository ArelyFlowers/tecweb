<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de productos</title>
</head>
<body>
<form id="formulario" action="http://localhost/tecweb/practicas/p06/p06-base/set_producto_v2.php" method="post" enctype="multipart/form-data">

<h2>REGISTRO DE NUEVOS PRODUCTOS</h2>

  <fieldset>
    <legend>Información del productos a registrar</legend>

    <ul>
      <li><label for="form-name">Nombre:</label> <input type="text" name="nombre" id="form-name"></li><br>
      <li><label for="form-marca">Marca:</label> <input type="text" name="marca" id="form-marca"></li><br>
      <li><label for="form-modelo">Modelo:</label> <input type="text" name="modelo" id="form-modelo"></li><br>
      <li><label for="form-precio">Precio:</label> <input type="text" name="precio" id="form-precio"></li><br>
      <li><label for="form-detalles">Detalles: </label><br><textarea name="detalles" rows="4" cols="60" id="form-detalles" placeholder="No más de 300 caracteres de longitud"></textarea></li><br>
      <li><label for="form-unidades">Unidades:</label> <input type="text" name="unidades" id="form-unidades"></li><br>
      <li><label for="form-imagen">Agrega una imagen:</label> <input type="file" name="imagen" accept="image/*"><br>
    </ul>
  </fieldset>
  <input type="submit" value="Agregar Producto">
</form> <br>

    
</body>
</html>

