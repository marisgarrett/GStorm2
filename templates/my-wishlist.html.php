<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-12 col-lg-10 offset-lg-1">
            <h1 class="text-center">
                My Wishlist
            </h1>
            <?php if (count($wishlistItems) > 0) { ?>
                <h6 class="text-center mb-4">
                    You've added the items below to your wishlist, you can remove the item by clicking the options below.
                </h6>
            <?php } ?>

            <div class="row">
                <div class="col-12">
                    <?php if (count($wishlistItems) > 0) { ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Description</th>
                                    <th>Product Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($wishlistItems as $wishlistItem) { 
                                    $product = $wishlistItem->getProduct();
                                ?>
                                    <tr>
                                        <td><?= $product->name ?></td>
                                        <td><?= $product->description ?></td>
                                        <td>£<?= $product->price ?></td>
                                        <td>
                                            <a class="btn btn-danger mr-2" href="/wishlist/remove?wishlist_id=<?= $wishlistItem->wishlist_id ?>">Remove</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p class="font-italic text-center">
                            You have no products in your wishlist!
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>