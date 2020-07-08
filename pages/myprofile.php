<?php include '../scripts/functions.php' ?>
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
                <li><a href="myprofile.php">Profil</a></li>
                <li><a href="settings.php">Postavke</a></li>
			</ul>
    <div/>
    </article>

    <article>
        <p>
            <a href="add.php">Dodaj novu sliku</a>
	    </p>
    </article>

    <article>
    <?php
    $id_user = $_SESSION['user']['id_user'];
    $query = "SELECT * FROM images WHERE id_user=$id_user";
    $result = mysqli_query($db, $query);
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='../images/".$row['image']."' >";
      	echo "<p>".$row['image_info']."</p>";
      echo "</div>";
    }
  ?>
    </article>

    </main>

</body>

</html>