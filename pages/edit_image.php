<?php include '../scripts/functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribogram – Izmjena podataka o slici</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <main>

    <div class="user_form">
        <h1>Izmjena podataka o slici <div><?php echo $_GET["id_image"];?></div></h1>
            <form method="post" action="edit_image.php">
            <?php
                $id_image = $_GET['id_image'];
                $query = "SELECT * FROM images WHERE id_image=$id_image";
                $image = mysqli_fetch_assoc(mysqli_query($db, $query));
                $image_info = $image['image_info'];
                $access = $image['access'];
                $result = mysqli_query($db, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "<div id='img_div'>";
                        echo "<img src='../images/".$row['image']."' >";
                    echo "</div>";
                }
            ?>
            <?php echo display_error();
        ?>
                <input type="text" class="input" name="image_info" placeholder="Unesite opis slike" value="<?php echo $image_info; ?>">
                <div>
                    <?php
                        if($access == 'public')
                        {
                            echo '<input type="radio" id="public" name="access" value="public" checked="checked">
                            <label for="public">javna dostupnost</label><br>
                            <input type="radio" id="private" name="access" value="private">
                            <label for="private">privatna dostupnost</label>';
                        }
                        else if($access == 'private')
                        {
                            echo '<input type="radio" id="public" name="access" value="public">
                            <label for="public">javna dostupnost</label><br>
                            <input type="radio" id="private" name="access" value="private" checked="checked">
                            <label for="private">privatna dostupnost</label>';
                        }
                    ?>
                </div>
                <input type="hidden" name="id_image" value="<?php echo $_GET["id_image"]; ?>">
		        <button type="submit" class="button" name="edit_image_btn">Ažuriraj sliku</button>
            </form>
        <div/>

    </main>

</body>

</html>