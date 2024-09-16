<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productDescription = $_POST['productDescription'];

    $sql = "INSERT INTO products (name, price, description) VALUES ('$productName', '$productPrice', '$productDescription')";
    if (mysqli_query($conn, $sql)) {
        echo "Producto agregado con éxito.";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
