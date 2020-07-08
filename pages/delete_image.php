<?php include '../scripts/connect.php';

    $id_image = $_GET['id_image'];
    $image = "SELECT * FROM images WHERE id_image=$id_image";
    $res = mysqli_query($db, $image);
    $row = mysqli_fetch_assoc($res);
    $name = $row['image'];
    unlink("../images/" .$name);

    $sql = "DELETE from images WHERE id_image='$id_image'";
    mysqli_query($db, $sql);
    header('location: myprofile.php');
    ?>