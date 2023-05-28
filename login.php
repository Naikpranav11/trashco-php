
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrashCo</title>
    <link href="login.css" rel = "stylesheet" type="text/css" />

</head>
<body>
  <div class="container">
    <div class="title">Login</div>
    <div class="content">
      <form action="login_connect.php" method = "post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name = "username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password"  name = "password" required>
          </div>

        </div>
        <div class="button">
          <input type="submit" value="Login" name = "login">
          <p>No account?<a href = "index.php">Register</a></p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>