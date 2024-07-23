<?php

include_once dirname(__DIR__)."\..\controllers\marketplace\product_controller.php";

global $total;
function show_cart_full($id){
	$ip = $_SERVER['REMOTE_ADDR'];

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}

	$result=show_cart_ctr($id,$ip);
	$i=0;
	$total=0;
    $discount=0;
    ?>	
	
    <div class="row g-5">
        <div class="col-12 col-lg-8">
            <div id="cartTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
            <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table fs-9 mb-0 border-top border-translucent">
                <thead>
                    <tr>
                    <th class="sort white-space-nowrap align-middle fs-10" scope="col"></th>
                    <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
                    <th class="sort align-middle" scope="col" style="width:80px;">DESCRIPTION</th>
                    <th class="sort align-middle" scope="col" style="width:150px;">DISCOUNT</th>
                    <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE</th>
                    <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY</th>
                    <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                    <th class="sort text-end align-middle pe-0" scope="col"></th>
                    </tr>
                </thead>
                <tbody class="list" id="cart-table-body">

    <?php
	if ($result!=false) {
		while($i<count($result))
		{
			$product=get_product_by_id_ctr($result[$i]['p_id']);
	?>

            <tr class="cart-table-row btn-reveal-trigger">
                <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="product-details.html"><img src="../../../../upload/marketplace/<?= $product["product_image"]?>" alt="" width="53" /></a></td>
                <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="product-details.html"><?= $product["product_title"]?></a></td>
                <td class="color align-middle white-space-wrap fs-9 text-body">
                    <?php
                    $words = explode(' ', $product["product_desc"]);
                    $short_desc = implode(' ', array_slice($words, 0, 10));
                    echo htmlspecialchars($short_desc);
                    ?>
                </td>
                <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold"><?= $product["product_discount"]?></td>
                <td class="price align-middle text-body fs-9 fw-semibold text-end"><?= $product["product_price"]?></td>
                <td class="quantity align-middle fs-8 ps-5">
                    <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity"><button class="btn btn-sm px-2" data-type="minus">-</button><input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="<?php echo $result[$i]['qty']; ?>" aria-label="Amount (to the nearest dollar)" /><button class="btn btn-sm px-2" data-type="plus">+</button></div>
                </td>
                <td class="total align-middle fw-bold text-body-highlight text-end">$<?= floatVal($result[$i]['qty']) * floatVal($product["product_price"])?></td>
                <td class="align-middle white-space-nowrap text-end pe-0 ps-3"><button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button></td>
                <td class="product-remove"><a href="../../../../actions/marketplace/deletecartitem_action.php?c_id=<?=$result[$i]['u_id']?>&p_id=<?=$result[$i]['p_id']?>">X</a></td>
            </tr>
			

    <?php 

    $total+=($product['product_price'])*($result[$i]['qty']);
    $discount+=($product['product_discount']);
    $i++;
}

?>
	
<?php
} else{
	echo "Your Cart is Empty";
}


?>
                <tr class="cart-table-row btn-reveal-trigger">
                <td class="text-body-emphasis fw-semibold ps-0 fs-8" colspan="6">Items subtotal :</td>
                <td class="text-body-emphasis fw-bold text-end fs-8">$<?= $total ?></td>
                <td></td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
    <div class="col-12 col-lg-4">
        <div class="card">
        <div class="card-body">
            <div class="d-flex flex-between-center mb-3">
            <h3 class="card-title mb-0">Summary</h3><a class="btn btn-link p-0" href="#!">Edit cart </a>
            </div><select class="form-select mb-3" aria-label="delivery type">
            <option value="cod">Cash on Delivery</option>
            <option value="card">Card</option>
            <option value="paypal">Paypal</option>
            </select>
            <div>
            <div class="d-flex justify-content-between">
                <p class="text-body fw-semibold">Items subtotal :</p>
                <p class="text-body-emphasis fw-semibold">$<?= $total ?></p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="text-body fw-semibold">Discount :</p>
                <p class="text-danger fw-semibold">-$<?= $discount ?></p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="text-body fw-semibold">Tax :</p>
                <p class="text-body-emphasis fw-semibold">$0.00</p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="text-body fw-semibold">Subtotal :</p>
                <p class="text-body-emphasis fw-semibold">$<?= $total - $discount?></p>
            </div>
            <div class="d-flex justify-content-between">
                <p class="text-body fw-semibold">Shipping Cost :</p>
                <p class="text-body-emphasis fw-semibold">$0.00</p>
            </div>
            </div>
            <div class="input-group mb-3"><input class="form-control" type="text" placeholder="Voucher" /><button class="btn btn-phoenix-primary px-5">Apply</button></div>
            <div class="d-flex justify-content-between border-y border-dashed py-3 mb-4">
            <h4 class="mb-0">Total :</h4>
            <h4 class="mb-">$<?= $total - $discount?></h4>
            </div>
                <form id="checkoutFormCart" action="checkout.php" method="post" style="display: none;">
                    <input type="hidden" id ="amount" name="amount" value="<?= $total - $discount ?>">
                    <input type="hidden" name="result" value='<?php echo json_encode($result);?>'>
                </form>
                <button class="btn btn-primary w-100" id="checkoutLinkCart">Proceed to check out<span class="fas fa-chevron-right ms-1 fs-10"></span>
            
            </button>
        </div>
        </div>
    </div>
    </div>

<?php } ?>


<?php

function show_invoice($id) {
    $bestoffers = get_all_products_ctr(); 

    $ip = $_SERVER['REMOTE_ADDR'];

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}

	$result=show_cart_ctr($id,$ip);

    foreach ($bestoffers as $bestoffer): ?>
       
    <?php endforeach;
}

?>



