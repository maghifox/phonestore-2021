<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Store</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--OwlCarousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />

    <!--Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!--Custom CSS File-->
    <link rel="stylesheet" href="style.css">

    <?php
        session_start();
        require('functions.php');
    ?>

</head>
<body>

<header id="header">
    <div class="strip d-flex justify-content-between bg-light px-3 py-2">
        <p class="font-rale text-black-50 font-size-12 m-0">Jalan Kemang RT004/011 No. 59 Kalisari Pasar Rebo</p>
        <div class="font-rale font-size-14" >
            <?php
            if(isset($_SESSION['is_login']))
            {
                echo "<a href='logout.php' class='px-3 border-right text-dark' style='text-decoration: none;'>Logout</a>";
            }else{
                echo '<a href="login.php" class="px-3 border-right border-left text-dark" style="text-decoration: none;">Login</a>';
                echo '<a href="register.php" class="px-3 border-right text-dark" style="text-decoration: none;">Sign Up</a>';
            }
            ?>
        </div>
    </div>


    <!--NavBar-->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="index.php">Phone Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#">On Sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 color-primary-bg rounded-pill">
                    <span class="font-size-16 text-white px-3"><i class="fas fa-shopping-cart"></i></span>
                    <span class="rounded-pill text-dark bg-light px-3 py-2"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>
        </div>
    </nav>
</header>

<main id="main-site">
