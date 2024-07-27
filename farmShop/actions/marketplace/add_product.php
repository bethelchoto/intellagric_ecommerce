<?php 

require_once("../../controllers/marketplace/product_controller.php");

if(isset($_POST['addToProduct'])) {
    // Retrieve form data
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];
    $product_doe = $_POST['product_doe'];
    $product_discount = $_POST['product_discount'];
    $product_qnty = $_POST['product_qnty'];
    $cat = get_cat_id_ctr($product_cat);
    $cat_id  = (int) $cat['cat_id'];
    $brand = get_brand_id_ctr($product_brand);
    $brand_id = (int) $brand['brand_id'];

    // loading img
    if ($_FILES["file"]["error"] == 4) {
        $_SESSION["error"] = "Image Does Not Exist";
        header('Location: ../../view/apps/e-commerce/admin/add-product.php');
    } else {
        $fileName = $_FILES["file"]["name"];
        $fileSize = $_FILES["file"]["size"];
        $tmpName = $_FILES["file"]["tmp_name"];
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if (!in_array($imageExtension, $validImageExtension)) {
            $_SESSION["error"] = "Invalid Image Extension";
            header('Location: ../../view/apps/e-commerce/admin/add-product.php');
        } else if ($fileSize > 1000000) {
            $_SESSION["error"] = "Image Size Is Too Large";
            header('Location: ../../view/apps/e-commerce/admin/add-product.php');
        } else {
            $newImageName = uniqid() . '.' . $imageExtension;
            move_uploaded_file($tmpName, '../../upload/marketplace/' . $newImageName);

            if ($cat_id !== null && $brand_id !== null) {
                if (add_product_ctr($cat_id, $brand_id, $product_title, $product_price, $product_desc, $newImageName,
                     $product_keywords, $product_qnty, $product_doe, $product_discount)) {
                    $_SESSION['success'] = "Product added successfully";
                    header('Location: ../../view/apps/e-commerce/admin/add-product.php');
                } else {
                    $_SESSION["error"] = "Failed to save to database";
                    header('Location: ../../view/apps/e-commerce/admin/add-product.php');
                }
            } else {
                $_SESSION["error"] = "Invalid category or brand ID";
                header('Location: ../../view/apps/e-commerce/admin/add-product.php');
            }
        }
    }
   
} else {
    header('Location: ../../view/apps/e-commerce/admin/add-product.php');
}

?>