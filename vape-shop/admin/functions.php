<?php
function addProduct($name, $price, $description) {
    include 'db_config.php';
    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
?>
