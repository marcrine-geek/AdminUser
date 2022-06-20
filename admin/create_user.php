<?php
include('../functions.php');
include('functions.php');
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <style>
        .header {
            background: #003366;
        }
        button[name=register_btn] {
            background: #003366;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Admin - create user</h2>
    </div>

    <form method="post" action="create_user.php">

        <?php echo display_error(); ?>

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="uname" value="<?php echo $uname; ?>">
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
        </div>
        <div class="input-group">
            <label>User type</label>
            <select name="user_type" id="user_type" >
                <option value=""></option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="register_btn"> + Create user</button>
        </div>
    </form>
</body>
</html>
