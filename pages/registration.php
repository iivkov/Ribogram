<!-- <?php include '../scripts/functions.php' ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribogram – Registracija</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
    <main>

    <div class="user_form">
            <form method="post" action="registration.php">
                <input type="text" class="input" name="username" placeholder="Unesite korisničko ime">
                <input type="text" class="input" name="description" placeholder="Unesite opis">
                <input type="file" class="input" name="image">
		        <input type="password"  class="input" name="password_1" placeholder="Unesite zaporku">
                <input type="password"  class="input" name="password_2" placeholder="Ponovno unesite zaporku">
		        <button type="submit" class="button" name="register_btn">Registriraj</button>
	            <p>
		            <a href="../index.php" class="question">Već ste registrirani? </a>
	            </p>
            </form>
        <div/>

    </main>

</body>

</html>