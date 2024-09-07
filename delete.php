<?php 
    include('config.php');
    $id = $_GET['id'];
    mysqli_query($con, "DELETE FROM prods WHERE id=$id");
    header('location: products.php');
?>