<?php 

require_once("../../controllers/marketplace/product_controller.php");

if (isset($_POST['addToProduct'])) {
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

    $validImageExtension = ['jpg', 'jpeg', 'png'];

    // Function to handle image upload
    function handleImageUpload($imageFile, $validImageExtension, $uploadPath, $sessionErrorKey) {
        if ($imageFile["error"] == 4) {
            $_SESSION["error"] = "$sessionErrorKey Image Does Not Exist";
            header('Location: ../../view/apps/e-commerce/admin/add-product.php');
            exit();
        } else {
            $fileName = $imageFile["name"];
            $fileSize = $imageFile["size"];
            $tmpName = $imageFile["tmp_name"];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));

            if (!in_array($imageExtension, $validImageExtension)) {
                $_SESSION["error"] = "$sessionErrorKey Invalid Image Extension";
                header('Location: ../../view/apps/e-commerce/admin/add-product.php');
                exit();
            } else if ($fileSize > 1000000) {
                $_SESSION["error"] = "$sessionErrorKey Image Size Is Too Large";
                header('Location: ../../view/apps/e-commerce/admin/add-product.php');
                exit();
            } else {
                $newImageName = uniqid() . '.' . $imageExtension;
                move_uploaded_file($tmpName, $uploadPath . $newImageName);
                return $newImageName;
            }
        }
    }

    // Upload display image
    $displayImageName = handleImageUpload($_FILES["display_image"], $validImageExtension, '../../upload/marketplace/', "Display");
    echo "Equip Image Name: " . $equipImageName . "<br>";

    // Upload equip document image
    $equipImageName = handleImageUpload($_FILES["equip_image"], $validImageExtension, '../../upload/marketplace/', "Equip");
    echo "Equip Image Name: " . $equipImageName . "<br>";

    // Ensure both images are uploaded successfully
    if ($cat_id !== null && $brand_id !== null) {
        if ($displayImageName && $equipImageName) {
            // Add the product to the database
            if (add_product_ctr($cat_id, $brand_id, $product_title, $product_price, $product_desc, $displayImageName,
                $product_keywords, $product_qnty, $product_doe, $product_discount, $equipImageName)) {
                $_SESSION['success'] = "Product added successfully";
                header('Location: ../../view/apps/e-commerce/admin/add-product.php');
            } else {
                $_SESSION["error"] = "Failed to save to database";
                header('Location: ../../view/apps/e-commerce/admin/add-product.php');
            }
        } else {
            $_SESSION["error"] = "Failed to upload images";
            header('Location: ../../view/apps/e-commerce/admin/add-product.php');
        }
    } else {
        $_SESSION["error"] = "Invalid category or brand ID";
        header('Location: ../../view/apps/e-commerce/admin/add-product.php');
    }

} else {
    header('Location: ../../view/apps/e-commerce/admin/add-product.php');
}

?>