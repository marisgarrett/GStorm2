<div class="container-fluid pt-5 basket">
    <div class="row">
        <div class="col-12 col-lg-8 offset-xl-2">
            <div class="row">
                <div class="col-12 col-lg-5 text-center">
                    Product
                </div>
                <div class="col-12 col-lg-2">
                    Price
                </div>
                <div class="col-12 col-lg-2">
                    Quantity
                </div>
                <div class="col-12 col-lg-2"></div>
            </div>
            <hr>
            <?php 
                $total = 0;
                foreach ($basketItems as $basketItem) { 
                    $product = $basketItem->getProduct();
                    $total += ($product->price * $basketItem->quantity);
            ?>
                <div class="row">
                    <div class="col-12 col-lg-5 d-flex align-items-center">
                        <img src="/images/products/<?= $product->product_id ?>.png" alt="<?= $product->name ?>">
                        <span class="ml-3"><?= $product->name ?></span>
                    </div>
                    <div class="col-12 col-lg-2 d-flex align-items-center">
                        £<?= $product->price ?>
                    </div>
                    <div class="col-12 col-lg-2 d-flex align-items-center">
                        <a class="mr-3" href="/basket/increase?basket_id=<?= $basketItem->basket_id ?>">
                            <i class="fas fa-plus pl-3"></i>
                        </a>
                        <?= $basketItem->quantity ?>
                        <a class="ml-3" href="/basket/decrease?basket_id=<?= $basketItem->basket_id ?>">
                            <i class="fas fa-minus pr-3"></i>
                        </a>
                    </div>
                    <div class="col-12 col-lg-2 d-flex align-items-center">
                        <a class="btn btn-danger mr-2" href="/basket/remove?basket_id=<?= $basketItem->basket_id ?>">Remove</a>
                    </div>
                </div>
                <hr>
            <?php } ?>
            <div class="row text-bold">
                <div class="col-12 col-lg-9 text-right">
                    <p class="text-right mr-4">
                        Total:
                    </p>
                </div>
                <div class="col-12 col-lg-2">
                    £<?= $total ?>
                </div>
            </div>
        </div>
    </div>
</div>