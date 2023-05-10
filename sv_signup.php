<?php
include "config/connection.php";

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = md5($_POST['fullname']);

//untuk mengecek apakah username sudah ada atau belum
$sql_check = "select * from tbuser where username='username' ";
$query_check = mysqli_query($conn, $sql_check);
$num_check = mysqli_num_rows($query_check);

if($num_check == 0) { //artinya username belum ada di db
    $sql = "insert into tbuser (username, fullname, password) values('$username','$fullname','$password')";
    $query = mysqli_query($conn, $sql);
?>
<script>
    alert("Data berhasil di registrasi");
    location.href = "index.php";
</script>

<?php
}else{ //artinya username tersebut sudah ada di db
?>
<script>
    alert("Username sudah ada");
    location.href = "signup.php";
</script>
<?php
}
?>