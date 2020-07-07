<!-- <?php include '../scripts/functions.php' ?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ribogram – Prijava</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <main>

        <div class="user_form">
            <img src="images/logo.png" class="logo">
            <h1>Ribogram</h1>
            <form method="post" action="login.php">
		        <input type="text" class="input" name="username" placeholder="Unesite korisničko ime">
		        <input type="password"  class="input" name="password" placeholder="Unesite zaporku">
                <button type="submit" class="button" name="login_btn">Prijava</button>
                <p>
		            <a href="scripts/registration.php" class="question">Niste se registrirali? </a>
	            </p>
            </form>
        <div/>

    </main>

</body>

</html>