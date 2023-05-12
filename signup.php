<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Sign Up</title>
</head>
<body>

<div class="bgwrap">
        <div class="bg"></div>
    </div>
    
    <div class="signup-box">
        <h1>Register Now!</h1>
        <form action="sv_signup.php" method="post">

          <div class="user-box">
            <input type="text" name="username" required="" id="username">
            <label>Username</label>
          </div>

          <div class="user-box">
            <input type="text" name="fullname" required="" id="fullname">
            <label>Full Name</label>
          </div>

          <div class="user-box">
            <input type="password" name="password" required="" id="password" onkeyup="cek_password()">
            <label>Password</label>
          </div>

          <div class="user-box">
            <input type="password" name="confirmed_password" required="" id="password" onkeyup="cek_password()">
            <label> Confirm Password</label>
          </div>

          <input type="submit" value="Sign Up" id="signup-btn">
        </form>

        <form action="index.php">
        <p>Already have an account?</p>
        <a href="index.php">
            Log In
            <input type="hidden" name="login" value="Log In">
        </a>
        </form>

      </div>
</body>
<script>
    function cek_password(){
        var password = doument.getElementById("password").value;
        var confirmed_password = document.getElementById("confirmed_password").value;

        if(password == confirmed_password && password !== ""){
            document.getElementById("button_submit").disabled = false; //enabled
        } else {
            document.getElementById("button_submit").disabled = true; //disabled
        }
    }
</script>
</html>