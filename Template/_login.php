<?php

    if(isset($_SESSION['is_login']))
    {
        header('location:index.php');
    }

    if(isset($_COOKIE['username']))
    {
        $db->relogin($_COOKIE['username']);
        header('location:index.php');
    }

    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(isset($_POST['remember']))
        {
            $remember = TRUE;
        }
        else
        {
            $remember = FALSE;
        }

        if($db->login($username,$password,$remember))
        {
            header('location:index.php');
        }
    }
?>

<div class="container w-50 text-center">
    <hr class="mb-5">
        <form method="post">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" class="form-control mb-3" placeholder="Username" name="username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" class="form-control mb-3" placeholder="Password" name="password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me" name="remember"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary" type="submit" name="login">Sign in</button>
            <a href="./register.php" class="btn btn-lg btn-success">Register</a>
        </form>
    <hr class="mt-5"
</div>
