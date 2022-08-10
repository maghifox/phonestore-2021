<?php

    if(isset($_POST['register']))
    {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $name = $_POST['name'];
        if($db->register($username,$password,$name))
        {
            header('location:login.php');
        }
    }
?>

<div class="container">
    <h1 class="mt-5">Register Form</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <hr/>
    <form method="post" action="">
        <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
        </div>


        <div class="form-group row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <a href="./login.php" class="btn btn-success">Login</a>
                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </div>
        </div>
    </form>
</div>
