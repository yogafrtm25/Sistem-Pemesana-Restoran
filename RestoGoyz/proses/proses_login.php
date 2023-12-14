<?php
include "connect.php";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])): "";
if (!empty($_POST['submit_validate'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' && password = '$password' = ");
    $hasil = mysqli_fetch_array($query);
    if ($hasil) {
        header('location:../home');
    } else { ?>
        <script>
            alert('Username atau Password yang anda masukan salah');
            window.location='../login'
        </script>
<?php
    }
}
?>