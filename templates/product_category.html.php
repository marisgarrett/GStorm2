<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h2>
                <?= $category[0]->name ?>
            </h2>
            <hr>
        </div>
    </div>

    <?php if (count($products) > 0) { ?>
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1 text-center d-flex flex-row">
        <?php foreach ($products as $product) { ?>
            <div class="col-4 text-center">
                <img src="/images/products/<?= $product->product_id ?>.png" alt="<?= $product->name ?>" style="height: 150px;">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>
                            <?= $product->name ?>
                        </h2>
                        <h3>
                            £<?= $product->price ?>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-danger mr-2" href="/wishlist/add?product_id=<?= $product->product_id ?>">Wishlist</a>
                        <a class="btn btn-success mr-2" href="/basket/add?product_id=<?= $product->product_id ?>">Add To Basket</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <?php } ?>
</div>