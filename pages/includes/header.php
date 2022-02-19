
<?php
session_start();
if(isset($_SESSION)&& isset($_SESSION['id']))
{
    $login = $_SESSION['id'];  $user = $_SESSION['user'];
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
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <style>
        .img {
            position: relative;
            width: 200px;
            height: 100px;

        }

        .smart {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }

        .img img {
            width: 100%;
            height: 100%;
            background-position: top center;
            background-size: cover;
            overflow: hidden;  border-radius: 50%;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark share">
    <div class="container ">
        <div class="img rounded-circle">
            <img src="assets/img/pori.jpg" class="img-fluid" alt="">

            <a href="action.php?pages=home" class="navbar-brand smart">Smart Fair</a>

        </div>
        <ul class="navbar-nav me-auto">
            <?php if (isset($login)) { ?>

                <li class="nav-item"><a href="action.php?pages=view-products" class="nav-link">View Product</a></li>
                <li class="nav-item"><a href="action.php?pages=add_product" class="nav-link">Add Product</a></li>
                <li class="nav-item"><span class="nav-link text-info">Hello! <?php echo $user;?></span></li>
                <li class="nav-item"><a href="action.php?pages=logout" class="nav-link btn btn-danger">logout</a></li>
            <?php }else{?>
                <li class="nav-item  mr-2"><a href="action.php?pages=login" class="nav-link btn btn-danger">Login</a></li>
                <li class="nav-item"><a href="action.php?pages=registration" class="nav-link btn btn-outline-success">Sign-up</a></li>

            <?php } ?>

        </ul>

    </div>

</nav>