<?php
    require_once("../config.php");
    require_once("prodFun.php");

    if (isset($_GET['code'])) {
        $code = $_GET['code'];
        
        if (disableProduct($code)) {
            echo "Producto desactivado correctamente.";
        } else {
            echo "Error al desactivar el producto.";
        }

        header("Location: listProduct.php");
        exit();
    } else {
        echo "Código de producto no proporcionado.";
    }
?>