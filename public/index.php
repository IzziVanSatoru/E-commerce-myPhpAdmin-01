<?php
// Enable error reporting to identify issues
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include necessary files with correct paths
require_once __DIR__ . '/../src/Pages/Home.php';
require_once __DIR__ . '/../src/Pages/ProductCart.php';
require_once __DIR__ . '/../src/Pages/Payment.php';
require_once __DIR__ . '/../src/Components/Navbar.php';

use Pages\Home;
use Pages\ProductCart;
use Pages\Payment;
use Components\Navbar;

// Render the Navbar
$navbar = new Navbar();
echo $navbar->render();

// Determine the page based on the `page` parameter in the URL
$page = $_GET['page'] ?? 'home';

// Routing logic
if ($page === 'home') {
    $homePage = new Home();
    echo $homePage->render();
} elseif ($page === 'productcart') {
    $productCart = new ProductCart();
    echo $productCart->render();
} elseif ($page === 'payment') {
    $paymentPage = new Payment();
    echo $paymentPage->render();
} else {
    echo '<h1>Page Not Found</h1>';
}
