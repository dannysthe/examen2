<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Propiedad</title>
   <link rel="stylesheet" href="crearPropiedades.css">
</head>

<body>
<?php
include "header.php";
require "connect-db.php";

$db = connectdb();
if (!$db) {
    die("Error al conectar a la base de datos.");
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'], $_POST['description'], $_POST['precio'], $_POST['num_habitaciones'], $_POST['num_wc'], $_POST['num_garage'], $_POST['imagen'], $_POST['created'], $_POST['seller_id'])) {
        $titulo = $_POST['name'];
        $description = $_POST['description'];
        $precio = $_POST['precio'];
        $habitaciones = $_POST['num_habitaciones'];
        $wc = $_POST['num_wc'];
        $garage = $_POST['num_garage'];
        $imagen = $_POST['imagen'];
        $created = $_POST['created'];
        $seller_id = $_POST['seller_id'];

        $stmt = $db->prepare("INSERT INTO propiedades (titulo, description, precio, num_rooms, num_wc, num_garage, imagen, created, seller_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die("Error en la preparación de la consulta: " . $db->error);
        }

        $stmt->bind_param("ssiiiissi", $titulo, $description, $precio, $habitaciones, $wc, $garage, $imagen, $created, $seller_id);
        $response = $stmt->execute();
        
        if ($response) {
            echo "Registro completado.";
        } else {
            echo "Fallo en el registro: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Por favor, complete todos los campos del formulario.";
    }
}
?>

<section>
    <h2>Formulario para Crear una Nueva Propiedad</h2>
    <div>
        <form method="POST" action="crearPropiedades.php">
            <fieldset>
                <legend>Complete todos los campos para registrar una nueva propiedad.</legend>
                <div>
                    <label for="name">Nombre de la propiedad</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div>
                    <label for="precio">Precio</label>
                    <input type="number" id="precio" name="precio" required>
                </div>
                
                <div>
                    <label for="description">Descripción</label>
                    <textarea id="description" name="description" required></textarea>
                </div>
                
                <div>
                    <label for="num_habitaciones">Número de habitaciones</label>
                    <input type="number" id="num_habitaciones" name="num_habitaciones" required>
                </div>
                
                <div>
                    <label for="num_wc">Número de baños</label>
                    <input type="number" id="num_wc" name="num_wc" required>
                </div>
                
                <div>
                    <label for="num_garage">Número de garages</label>
                    <input type="number" id="num_garage" name="num_garage" required>
                </div>
                
                <div>
                    <label for="imagen">Imagen (nombre del archivo)</label>
                    <input type="text" id="imagen" name="imagen" required>
                </div>
                
                <div>
                    <label for="created">Fecha de creación</label>
                    <input type="date" id="created" name="created" required>
                </div>
                
                <div>
                    <label for="seller_id">ID del Vendedor</label>
                    <input type="number" id="seller_id" name="seller_id" required>
                </div>
                
                <div>
                    <button type="submit">Registrar Propiedad</button>
                </div>
            </fieldset>
        </form>
    </div>
</section>

<?php
include "footer.php";
?>
</body>
</html>
