<?php 
    include '../scripts/functions.php';
    if (!isLoggedIn()) {
        // $_SESSION['msg'] = "You must log in first";
        header('location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribogram – Moj profil</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <main>

    <article>
    <div id="start_head">
			<ul>
                <!-- start.php je dodan samo radi lakšeg kretanja -->
                <li><a href="start.php">Slike raznih korisnika</a></li>
                <li><a href="myprofile.php">Profil</a></li>
                <li><a href="settings.php">Postavke</a></li>
			</ul>
    <div/>
    </article>

    <article>
    <div class="user_profile">
        <?php
            $id_user = $_SESSION['user']['id_user'];
            $query = "SELECT * FROM users WHERE id_user=$id_user";
            $user = mysqli_fetch_assoc(mysqli_query($db, $query));
            $username = $user['username'];
            $image = $user['image'];
        ?>
        <?php
        echo "<img src='../images/".$user['image']."' >";
        ?>
        <h1><?php echo $username;?></h1>
        <a href="myprofile.php?logout='1'" style="color: red;">odjava</a>
        <div/>
    </article>

    <article>
        <div class="add_image">
            <a href="add.php">Dodaj novu sliku</a>
        </div>
    </article>

    <article>
    <?php
    // $id_user = $_SESSION['user']['id_user'];
    $query = "SELECT * FROM images WHERE id_user=$id_user";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
            echo "<img src='../images/".$row['image']."' >";
            echo "<p>".$row['image_info']."</p>";
            echo '<td><a href="delete_image.php?id_image='.$row["id_image"].'">Obriši</a></td><br>';
            echo '<td><a href="edit_image.php?id_image='.$row["id_image"].'">Izmjeni</a></td>';
        echo "</div>";
    }
}
  ?>
    </article>

    </main>

</body>

</html>