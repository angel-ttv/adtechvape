<?php
include 'db_config.php';

$sql = "SELECT * FROM sales";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Venta ID: " . $row["id"]. " - Producto ID: " . $row["product_id"]. " - Cantidad: " . $row["quantity"]. " - Monto Total: " . $row["total_amount"]. " - Fecha: " . $row["sale_date"]. "<br>";
    }
} else {
    echo "No se encontraron ventas.";
}
?>
