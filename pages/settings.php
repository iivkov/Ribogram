<?php include '../scripts/functions.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribogram – Izmjena korisničkih podataka</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <main>

    <div class="user_form">
        <h1>Izmjena podataka</h1>
            <form method="post" action="settings.php">
            
            <?php echo display_error();
            if (isset($_SESSION['user']))
            {
                $username = $_SESSION['user']['username'];
                $description = $_SESSION['user']['description'];
                $image = $_SESSION['user']['image'];
            }
        ?>
                <input type="text" class="input" name="username" placeholder="Unesite korisničko ime" value="<?php echo $username; ?>">
                <input type="text" class="input" name="description" placeholder="Unesite opis" value="<?php echo $description; ?>">
                <input type="file" class="input" name="image" value="<?php echo $image; ?>">
		        <input type="password" class="input" name="password_1" placeholder="Unesite novu zaporku">
                <input type="password" class="input" name="password_2" placeholder="Ponovno unesite novu zaporku">
		        <button type="submit" class="button" name="update_btn">Ažuriraj</button>
            </form>
        <div/>

    </main>

</body>

</html>