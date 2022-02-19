<?php

require_once 'vendor/autoload.php';

use App\classes\ProductUpload;
use App\classes\Auth;
use App\classes\Registration;

if (isset($_GET["pages"])) {
    if ($_GET["pages"] == "view-products") {
        $products = new ProductUpload();
        $products = $products->getAllProduct();
        include 'pages/viewProducts.php';
    } elseif ($_GET["pages"] == 'add_product') {
        include 'pages/productsUpload.php';
    } elseif ($_GET["pages"] == 'home') {
        include 'pages/home.php';
    } elseif ($_GET["pages"] == 'login') {
        include 'pages/login.php';
    } elseif ($_GET["pages"] == 'registration') {

        include 'pages/register.php';
    } elseif ($_GET["pages"] == 'logout') {
        $auth = new Auth();
        $auth->logout();
    } else {
        include 'pages/home.php';
    }

} else if (isset($_POST)) {
    if (isset($_POST['btn'])) {
        $fileUpload = new ProductUpload ($_POST, $_FILES);
        $message = $fileUpload->addProduct();
        include 'pages/productsUpload.php';

    } elseif (isset($_POST['registerBtn'])) {
        $register = new Registration();
        $register->createUser($_POST);
        include 'pages/login.php';

    } elseif (isset($_POST['loginBtn'])) {

        $auth = new Auth($_POST);
        $message = $auth->login();
        include 'pages/productsUpload.php';

    } else {
        $auth = new Auth($_POST);
        $message = $auth->login();
        include 'pages/login.php';
    }
}