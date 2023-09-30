<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $marca  = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $precio = $_POST['precio'];
    $detalles = $_POST['detalles'];
    $unidades = $_POST['unidades'];

    // Verificar que la imagen se haya subido correctamente
    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen_tmp = $_FILES['imagen']['tmp_name'];
        $imagen_data = file_get_contents($imagen_tmp);
    } else {
        echo "Error al subir la imagen.";
        exit;
    }

    // Crea una conexión a la base de datos
    $conn = new mysqli('localhost', 'root', 'ArelyFlor89', 'marketzone');

    // Verificar la conexión
    if ($conn->connect_error) {
        die('Falló la conexión: ' . $conn->connect_error);
    }

    // Valida que no haya campos vacíos
    if (empty($nombre) || empty($marca) || empty($modelo) || empty($precio) || empty($detalles) || empty($unidades)) {
        echo "Error: No debe haber campos vacíos.";
    } else {
        // Validar que el precio sea un número con punto decimal
        if (!is_numeric($precio) || $precio <= 0) {
            echo "El precio debe ser un número positivo .";
        } else {
            // Insertar datos en la base de datos, incluyendo la imagen
            $sql = "INSERT INTO productos (nombre, marca, modelo, precio, detalles, unidades, imagen, eliminado) VALUES (?, ?, ?, ?, ?, ?, ?, 0)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssdssb", $nombre, $marca, $modelo, $precio, $detalles, $unidades, $imagen_data);

            if ($stmt->execute()) {
                echo "Producto registrado correctamente:<br>";
                echo "Nombre: $nombre<br>";
                echo "Marca: $marca<br>";
                echo "Modelo: $modelo<br>";
                echo "Precio: $precio<br>";
                echo "Detalles: $detalles<br>";
                echo "Unidades: $unidades<br>";
                echo "Imagen subida y guardada en la base de datos con éxito.";
                // Puedes mostrar más detalles o redireccionar aquí
            } else {
                echo "Error en la inserción de datos: " . $stmt->error;
            }
        }
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "No se ha enviado el formulario.";
}
?>



