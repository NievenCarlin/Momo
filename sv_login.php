<?php
session_start();
include "config/connection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM tbuser WHERE username='$username' AND password='$password'";
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query);
$result = mysqli_fetch_array($query);

if ($num == 0) {
    ?> 
    <script>
        alert('Otentikasi Gagal');
        document.location.href = 'login.php';
    </script>
    <?php
} else {
    ?>
    <script>
        document.location.href = 'user.php';
    </script>
    <?php
    $_SESSION['uname'] = $username;
    $_SESSION['fname'] = $result['fullname'];
}
?>

<script>
    location.href = momo.php;
</script>