

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/login.css">
<title>Login Page</title>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="includes/login.inc.php" method="post">
      <input class="input-field" type="text" value="<?php if (isset($_COOKIE["username"])){echo $_COOKIE["username"];}?>" id="uid" name="uid" placeholder="Username" required>
      <div class="password-container">
        <input class="input-field" type="password" name="pass" value="<?php if (isset($_COOKIE["password"])){echo $_COOKIE["password"];}?>" placeholder="Password" id="passwordField" required>
        <span class="password-toggle" id="passwordToggle">&#128065;</span>
      </div>
      <div class="remember-me">
          <input type="checkbox" id="rememberMe" name="remember">
          <label for="rememberMe">Remember Me</label>
        </div>
      <button class="btn" name="submit" type="submit">Login</button>
    </form>
    <p class="signup-link">Don't have an account? <a href="signup.php">Sign up</a></p>
  </div>
  <script>
    const passwordField = document.getElementById('passwordField');
    const passwordToggle = document.getElementById('passwordToggle');

    passwordToggle.addEventListener('click', () => {
      if (passwordField.type === 'password') {
        passwordField.type = 'text';
        passwordToggle.innerHTML = '&#128064;'; 
      } else {
        passwordField.type = 'password';
        passwordToggle.innerHTML = '&#128065;'; 
      }
    });
  </script>





</body>
</html>
