<?php
session_start(); //untuk memulai sesi

if(isset($_SESSION['username'])){
    header("Location: dashboard.php");
    exit();
}

$user = [
    'admin1' => 'password123',
    'user1' => 'password321', 
];

if(isset($_POST['submit_login'])){
    //ini ambil data dari superglobal variabel $_POST
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    if(isset($user[$username]) && $user[$username] === $password){

    //Kondisi true
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
    exit();
    }else{
    //Kondisi false
    $err = "Password atau username salah.";

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php if(isset($err)): ?>
<p style="color: red; margin-bottom: 16px;"><?= $err; ?></p>
<?php endif; ?>

<form method="POST">
    <div  style="margin-buttom: 16px;">
        <label style="margin-button: 8px; display: block;">Username</label>
        <input type="text" name="txt_username" placeholder="Username"/>
    </div>
    </br>

    <div style="margin-buttom: 16px;">
        <label style="margin-button: 8px; display: block;">Password</label>
        <input type="password" name="txt_password" placeholder="Password"/>
    </div>
    </br>
    <div>
        <button type="submit" name="submit_login">Submit</button>
    </div>
</form>

</body>
</html>