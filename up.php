<?php 

include('config.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $update = "UPDATE prods SET name='$NAME' , price='$PRICE' , image='$image_up' WHERE id=$id ";
    mysqli_query($con,$update);

    if(move_uploaded_file($image_location,'images/'.$image_name)){
        echo "<script> alert('تم تحديث المنتج بنجاح') </script>";
    }else{
        echo "<script> alert('لم يتم رفع المنتج ') </script>";
    }
    header('location: index.php');
}
?>