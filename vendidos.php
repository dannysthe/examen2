<!DOCTYPE html>
<html>
<head>
    <title>Registrar Venta</title>
    <link rel="stylesheet" href="vendidos.css"> 
</head>
<?php
include "header.php";
require "connect-db.php";

$db = connectdb();
if (!$db) {
    die("Error al conectar a la base de datos.");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $propiedad_id = $_POST['propiedad_id'];
    $seller_id = $_POST['seller_id'];
    $fecha_venta = $_POST['fecha_venta'];

    $stmt = $db->prepare("INSERT INTO ventas (propiedad_id, seller_id, fecha_venta) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $propiedad_id, $seller_id, $fecha_venta);


    if ($stmt->execute()) {
        echo "Venta registrada exitosamente.";
    } else {
        echo "Error al registrar la venta.";
    }
}
?>
<body>
    <h2>Registrar Venta de Propiedad</h2>
    <form action="vendidos.php" method="post">
        <label>ID de Propiedad:</label>
        <input type="number" name="propiedad_id" required><br>
        
        <label>ID del Vendedor:</label>
        <input type="number" name="seller_id" required><br>
        
        <label>Fecha de Venta:</label>
        <input type="date" name="fecha_venta" required><br>
        
        <input type="submit" value="Registrar Venta">
    </form>
</body>
</html>


<?php
include "footer.php";
?>