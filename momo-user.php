<?php
require "config/function.php";
require "config/security.php";
$produk = query("SELECT * FROM tbuser");
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
                <button id="nav-logout"><a href="login.php">LOGOUT</a></button>
            </div>
        </nav>

        <div class="sidebar">
            <ul>
                <li><a href="momo.php" class="active"><i class="fas fa-bars"></i>Menu</a></li>
                <li><a href="#"><i class="fas fa-user"></i>User</a></li>
            </ul>
        </div>
    </div>

    <div class="table-user">
        <h1>EDIT USER</h1>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">Action</th>
                <th style="text-align: center;">Username</th>
                <th style="text-align: center;">Fullname</th>
                <th style="text-align: center;">Password</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($produk as $row) : ?>
                <tr>
                    <td style="text-align: center;"><?php echo $i; ?></td>
                    <td style="text-align: center;">
                        <a href="hapus-user.php?id=<?php echo $row["id"]; ?>" class="red-link">BAN</a> | 
                        <a href="ubah-user.php?id=<?php echo $row["id"]; ?>" class="grn-link">EDIT</a>
                    </td>
                    <td style="text-align: left;"><?php echo $row["username"]; ?></td>
                    <td style="text-align: left;"><?php echo $row["fullname"]; ?></td>
                    <td style="text-align: left;"><?php echo $row["password"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <button id="add-user"><a href="signup.php">ADD USER</a></button>
    </div>


</body>

</html>