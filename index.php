
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
    <div class="title">Registration</div>
    <div class="content">
      <form action="mhome.php" method = "post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name = "fullname" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name = "username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name = "email" required>
          </div>
          <div class="input-box">
            <span class="details">UPI Id</span>
            <input type="text" placeholder="Enter your UPI id" name = "upi" required>
          </div>
          <div class="input-box">
            <span class="details">Store Address</span>
            <input type="text" placeholder="Enter your store Address" name = "address" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name = "phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password"  name = "password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" name = "conpassword" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1" value = "m">
          <input type="radio" name="gender" id="dot-2" value = "f">
          <input type="radio" name="gender" id="dot-3" value = "o">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name = "register">
          <p>Already registered?<a href = "login.php">Login</a></p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

 

