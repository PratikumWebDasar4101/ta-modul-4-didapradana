
<?php
session_start();
$akun = array(
    array("dida","dida","user")
);  
?>
<form method="post">
    <input type="text" name="username"> Username<br>
    <input type="password" name="password"> Password<br>
    <br>
    <input type="submit" name="kirim" value="LOGIN"> 
</form>
<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
   
    $cek=0;
    for ($i = 0; $i < count($akun); $i++) { 
        if ( $akun[$i][0] == $username && $akun[$i][1] == $password) {
            if ( $akun[$i][2] == "user") {
                header("location: formawal.html");
            }
            $cek=1;
        }
    }
    if ($cek == 0) {
        ?>
        <script type="text/javascript">
        alert("Username/Password salah");
        </script>
        <?php
    }
}
?>