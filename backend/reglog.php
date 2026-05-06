<?php

    require "config.php";

  if(isset($_POST['reg-btn'])){
    $lekerdezes = "SELECT * FROM users WHERE email='$_POST[email]'";
    $talalt_f = $conn->query($lekerdezes);

    if(mysqli_num_rows($talalt_f) == 0){

      if($_POST['pass1'] == $_POST['pass2']){

        $titj = password_hash($_POST['pass1'], PASSWORD_DEFAULT);

        $conn->query("INSERT INTO users VALUES(id, '$_POST[email]', '$_POST[username]', '$titj')");

        $lekerdezes = "SELECT * FROM users WHERE email='$_POST[email]'";
        $talalt_felhasznalo = $conn->query($lekerdezes);
        $felhasznalo = $talalt_felhasznalo->fetch_assoc();

        setcookie("id", $felhasznalo['id'], time()+3600, "/");
        header("Location: index.php");

      }
      else{
        Message("A két jelszó nem egyezik!");
      }

    }
    else{
      Message("Már van ilyen felhasználó!");
    }
     }

    if(isset($_POST['login-btn'])){

      $lekerdezes = "SELECT * FROM users WHERE username='$_POST[username]'";
      $talalt_f = $conn->query($lekerdezes);

      if(mysqli_num_rows($talalt_f) == 1){

        $felhasznalo = $talalt_f->fetch_assoc();

        if(password_verify($_POST['password'], $felhasznalo['password'])){

          setcookie("id", $felhasznalo['id'], time()+3600, "/");
          header("Location: index.php");

        }
        else{
          Message("Helytelen jelszó!");
        }

      }
      else{
        Message("Nincs ilyen felhasználó!");
      }

    }

  function Message($text){
    echo "<script>alert('$text')</script>";
}
?>
<!DOCTYPE html>
<html lang="hu">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>

 </head>
 <body>
   <?php require "nav.php"; ?>

   <form method="post" class="form-reglog" id="regForm" style="display: none;">
    <label class="label-form">Registration</label>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="pass1" placeholder="Password" required>
    <input type="password" name="pass2" placeholder="Password again" required>
    <input type="checkbox" name="terms" id="terms" required>
    <label for="terms">I accept the <a href="terms&conditions.php" target="_blank">terms and conditions</a></label>
    <input type="submit" name="reg-btn" value="Register">
    <label>Already have an account?<a href="#" onclick="showForm('login')">Login here!</a></label>
   </form>

   <form method="post" class="form-reglog" id="loginForm" >
    <label class="label-form">Login</label>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="login-btn" value="Login">
    <label>Don't have an account?<a href="#" onclick="showForm('reg')">Register here!</a></label>
   </form>
   
 </body>
 <footer>
   <?php require "footer.php"; ?>
 </footer>
</html>
<script>

	function showForm(form){

		if(form == "login"){
			document.getElementById("loginForm").style.display = "block";
			document.getElementById("regForm").style.display = "none";
		}
		else{
			document.getElementById("loginForm").style.display = "none";
			document.getElementById("regForm").style.display = "block";
		}
		
	}

</script>
