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
                Your address book contains all the addresses that you may wish to orders to be delivered to. Within this
                section you can add or edit your billing/delivery addresses.
            </h6>

            <div class="row mb-5">
                <div class="col-12 text-center">
                    <button class="btn btn-success">Add Address</button>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-6 text-center">
                    <h4 class="mb-4">
                        Billing Address
                    </h4>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="billingAddressTitle" class="sr-only">Title</label>
                            <input type="text" id="billingAddressTitle" placeholder="Title" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="billingAddressFirstName" class="sr-only">First Name</label>
                            <input type="text" id="billingAddressFirstName" placeholder="First Name"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="billingAddressSurname" class="sr-only">Surname</label>
                            <input type="text" id="billingAddressSurname" placeholder="Surname" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="billingAddressAddress1" class="sr-only">Address 1</label>
                            <input type="text" id="billingAddressAddress1" placeholder="Address 1"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="billingAddressAddress2" class="sr-only">Address 2</label>
                            <input type="text" id="billingAddressAddress2" placeholder="Address 2"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="billingAddressPostCode" class="sr-only">Postcode</label>
                            <input type="text" id="billingAddressPostCode" placeholder="Postcode"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <button class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <h4 class="mb-4">
                        Delivery Address
                    </h4>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="deliveryAddressTitle" class="sr-only">Title</label>
                            <input type="text" id="deliveryAddressTitle" placeholder="Title" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="deliveryAddressFirstName" class="sr-only">First Name</label>
                            <input type="text" id="deliveryAddressFirstName" placeholder="First Name"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="deliveryAddressSurname" class="sr-only">Surname</label>
                            <input type="text" id="deliveryAddressSurname" placeholder="Surname" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="deliveryAddressAddress1" class="sr-only">Address 1</label>
                            <input type="text" id="deliveryAddressAddress1" placeholder="Address 1"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="deliveryAddressAddress2" class="sr-only">Address 2</label>
                            <input type="text" id="deliveryAddressAddress2" placeholder="Address 2"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="deliveryAddressPostCode" class="sr-only">Postcode</label>
                            <input type="text" id="deliveryAddressPostCode" placeholder="Postcode"
                                class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="btn-group">
                                <button class="btn btn-danger">Remove</button>
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>