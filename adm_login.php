<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <title>Admin</title>
</head>

<body>

  <div class="bgwrap">
    <div class="bg"></div>
  </div>

  <div class="login-box">
    <h1>Hi There Admin!</h1>
    <form action="sv_admin.php" method="post">

      <div class="user-box">
        <input type="text" name="username" required="" id="username">
        <label>Username</label>
      </div>

      <div class="user-box">
        <input type="password" name="password" required="" id="password">
        <label>Password</label>
      </div>

      <input type="submit" value="Log in" id="login-btn" onclick="checkLogin()">
    </form>
  </div>
</body>

</html>