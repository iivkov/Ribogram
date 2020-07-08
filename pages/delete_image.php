<?php include '../scripts/connect.php';

    $id_image = $_GET['id_image'];
    $sql = "DELETE from images WHERE id_image='$id_image'";
    mysqli_query($db, $sql);
    header('location: myprofile.php');
    ?>