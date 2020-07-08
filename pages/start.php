<?php include '../scripts/functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribogram – Početak rada</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <main>

    <article>
    <div id="start_head">
            <!-- <img class="logo" src="../images/logo.png" /> -->
			<ul>
                <li><a href="myprofile.php">Profil</a></li>
                <li><a href="settings.php">Postavke</a></li>
			</ul>
    <div/>
    </article>

    <article>
    <?php
    $query = "SELECT * FROM images WHERE access='public'";
    $result = mysqli_query($db, $query);
    if (mysqli_num_rows($result) > 0) { //novo dodano
        while ($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
            echo "<img src='../images/".$row['image']."' >";
            echo "<p>".$row['image_info']."</p>";
        echo "</div>";
    }
}
  ?>
    </article>

    </main>

</body>

</html>