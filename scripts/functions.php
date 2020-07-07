<?php 
session_start();

$username = "";
$description = "";
$image = "";
$errors   = array(); 

include 'connect.php';

function display_error()
{
    global $errors;
    if (count($errors) > 0)
    {
		echo '<div class="error">';
            foreach ($errors as $error)
            {
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

if (isset($_POST['register_btn']))
{
	register();
}

function register()
{
	global $db, $errors, $username, $description, $image;
	
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$description = mysqli_real_escape_string($db, $_POST['description']);
	$image = mysqli_real_escape_string($db, $_POST['image']);

    if (empty($username))
    { 
        array_push($errors, "Potrebno je unijeti korisničko ime."); 
    }
    if (empty($description))
    { 
        array_push($errors, "Potrebno je unijeti opis."); 
    }
    if (empty($image))
    { 
        array_push($errors, "Potrebno je učitati sliku."); 
    }
    if (empty($password_1))
    { 
        array_push($errors, "Potrebno je unijeti zaporku.");
    }
    if ($password_1 != $password_2)
    {
		array_push($errors, "Unesene zaporke se ne podudaraju.");
  	}

  $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) 
  {
    if ($user['username'] === $username) 
    {
      array_push($errors, "Već je registriran korisnik s navedenim korisničkim imenom.");
    }
  }
  
  if (count($errors) == 0) 
  {
      $password = md5($password_1);
      $query = "INSERT INTO users (password, username, description, image) VALUES('$password', '$username', '$description', '$image')";
      mysqli_query($db, $query);
      header('location: ../index.php');
    }
}