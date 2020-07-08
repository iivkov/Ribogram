<?php include '../scripts/functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribogram – Dodavanje slike</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <main>

    <div class="user_form">
            <h1>Dodavanje slike</h1>
            <form method="post" action="add.php" enctype="multipart/form-data">
            <?php echo display_error(); ?>
                <input type="file" class="input" name="image">
                <input type="text" class="input" name="image_info" placeholder="Unesite opis slike">
                <div>
                    <input type="radio" id="public" name="access" value="public">
                    <label for="public">javna dostupnost</label><br>
                    <input type="radio" id="private" name="access" value="private">
                    <label for="private">privatna dostupnost</label>
                </div>
                <button type="submit" class="button" name="add_btn">Dodaj sliku</button>
            </form>
        <div/>

    </main>

</body>

</html>