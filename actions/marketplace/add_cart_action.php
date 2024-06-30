<?php
include_once("../../controllers/marketplace/product_controller.php");
include_once("../../settings/core.php");

// Function to check if a user is logged in
if (!isLogged()) {
    $_SESSION['error'] = 'Please Log in to add to cart';
    $_SESSION['id'] = -1; // Set a default id for anonymous users
}

// Function to get the user's IP address
$ip = getIPAddress(); 

if(isset($_GET['pid'])){
	$pid = $_GET['pid'];
	$quantity = $_GET['quantity'];

    // Check if user is anonymous
    $userId = $_SESSION['id'] == -1 ? 2 : $_SESSION['id'];

	// Attempt to add to cart
	if(add_to_cart_ctr($pid, $ip, $userId, $quantity) == TRUE){
        $_SESSION['successnotif'] = "Cart item added successfully";
		header('Location: ../../view/apps/e-commerce/landing/cart.php?id='.$userId);
	} else {
        // Handle the error
        $_SESSION['error'] = "Failed to add item to cart. Please try again.";

    }
}
?>

<?php if(isset($_SESSION['error'])): ?>
    <div class="error">
        <?php echo $_SESSION['error']; unset($_SESSION['error']); // Display and clear error ?>
    </div>
<?php endif; ?>

<?php if(isset($_SESSION['successnotif'])): ?>
    <div class="success">
        <?php echo $_SESSION['successnotif']; unset($_SESSION['successnotif']); // Display and clear success message ?>
    </div>
<?php endif; ?>
