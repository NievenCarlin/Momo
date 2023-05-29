<?php
require "config/function.php";
require "config/security.php";
$produk = query("SELECT * FROM tbmenu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

  <script src="https://kit.fontawesome.com/5e1bfe2daf.js" crossorigin="anonymous"></script>
  <title>Admin Page</title>
  <link rel="stylesheet" href="momo.css" />
  <link rel="Website icon" type="png" href="assets/Group 6.png" />
</head>

<body id="home">
  <div class="nav-container">
    <nav>
      <div class="logodepan">
        <img src="assets/logo.png" alt="" />
      </div>

      <div class="btn-contain">
        <ul>
          <li><a href="index.php">CHECK</a></li>
        </ul>

        <button onclick="logout()" id="nav-logout">LOGOUT</button>
        <script>
          function logout() {
            alert("You Want to Logout?");
            location.href = "logout.php";
          }
        </script>
      </div>

    </nav>

    <div class="sidebar">
      <ul>
        <li><a href="#" class="active"><i class="fas fa-bars"></i>Menu</a></li>
        <li><a href="momo-user.php"><i class="fas fa-user"></i>User</a></li>
      </ul>
    </div>
  </div>

  <div class="menu" id="product">
    <h1>EDIT PRODUCT</h1>
    <div class="menu-container">
      <div class="tambah-hapus">
        <h2>ADD MENU</h2>
        <button type="button" class="btn-tambah"><a href="tambah.php">+</a></button>
      </div>
      <?php $i = 1; ?>
      <?php foreach ($produk as $row) : ?>
        <div class="item">
          <p class="menu-id"><?php echo $i; ?></p>
          <img src="assets/<?php echo $row["gambar"]; ?>" width="300" alt="">
          <h4><?php echo $row["nama"]; ?></h4>
          <p><?php echo $row["harga"]; ?></p>
          <div class="btn">
            <button type="button" class="btn-hapus"> <a href="hapus.php?id=<?php echo $row["id"]; ?>">Delete</a></button>
            <button type="button" class="btn-ubah"><a href="ubah.php?id=<?php echo $row["id"]; ?>">Edit</a></button>
          </div>
        </div>
        <?php $i++; ?>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>