<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-12 col-lg-2 offset-lg-1 pt-5">
            <?php include("my_account_menu.html.php"); ?>
        </div>
        <div class="col-12 col-lg-9">
            <h1 class="text-center">
                Address Book
            </h1>
            <h6>
                Your address book contains all the addresses that you may wish orders to be delivered to. Within this section you can add or edit your billing/delivery addresses.
            </h6>

            <!-- <div class="row mb-5">
                <div class="col-12 text-center">
                    <button class="btn btn-success">Add Address</button>
                </div>
            </div> -->

            <div class="row">
                <div class="col-12 col-lg-6 text-center">
                    <h4 class="mb-4">
                        Billing Address
                    </h4>
                    <form id="frmBillingAddress" action="/account/billingAddress" method="post">
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="billingAddress" class="sr-only">Address</label>
                                <textarea id="billingAddress" name="billingAddress" placeholder="Address" class="form-control"><?= $customer->billing_address ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="billingPostCode" class="sr-only">Postcode</label>
                                <input type="text" id="billingPostCode" name="billingPostcode" placeholder="Postcode" class="form-control" value="<?= $customer->billing_postcode ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <h4 class="mb-4">
                        Delivery Address
                    </h4>
                    <form id="frmDeliveryAddress" action="/account/deliveryAddress" method="post">
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="deliveryAddress" class="sr-only">Address</label>
                                <textarea id="deliveryAddress" name="deliveryAddress" placeholder="Address" class="form-control"><?= $customer->delivery_address ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="deliveryPostcode" class="sr-only">Postcode</label>
                                <input type="text" id="deliveryPostcode" name="deliveryPostcode" placeholder="Postcode" class="form-control" value="<?= $customer->delivery_postcode ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>