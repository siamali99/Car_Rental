
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/login.css">
<title>Signup Page</title>
</head>
<body>
  <div class="login-container">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
      <input class="input-field" type="text" name="uid" placeholder="Username" >
      <input class="input-field" type="email" name="email" placeholder="Email" >
      <input class="input-field" type="password" name="pass" placeholder="Password" >
      <input class="input-field" type="password" name="conpass" placeholder="Confirm Password" >
      <button class="btn" type="submit" name="submit">Sign Up</button>
    </form>
    <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
  </div>
</body>
</html>
