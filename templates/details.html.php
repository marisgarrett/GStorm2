<div class="container-fluid pt-5 pb-5">
    <div class="row">
        <div class="col-12 col-lg-2 offset-lg-1 pt-5">
            <?php include("my_account_menu.html.php"); ?>
        </div>
        <div class="col-12 col-lg-9">
            <h1 class="text-center">
                My Details
            </h1>

            <div class="row mb-3">
                <div class="col-12 col-lg-6 text-center">
                    <h4 class="mb-4">
                        Personal Information
                    </h4>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="title" class="sr-only">Title</label>
                            <input type="text" id="title" placeholder="Title" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="firstName" class="sr-only">First Name</label>
                            <input type="text" id="firstName" placeholder="First Name" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="surname" class="sr-only">Surname</label>
                            <input type="text" id="surname" placeholder="Surame" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="email" class="sr-only">Email</label>
                            <input type="text" id="email" placeholder="Email" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12">
                            <label for="mobileNumber" class="sr-only">Mobile Number</label>
                            <input type="text" id="mobileNumber" placeholder="Mobile Number" class="form-control" />
                        </div>
                    </div>
                    <h4 class="mb-4">
                        Change Your Password
                    </h4>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" id="password" placeholder="Password" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="confirmPassword" class="sr-only">Confirm Password</label>
                            <input type="password" id="confirmPassword" placeholder="Password" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <h4 class="mb-4">
                        Payment Details
                    </h4>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="cardNumber" class="sr-only">Card Number</label>
                            <input type="password" id="cardNumber" placeholder="Card Number" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="cardName" class="sr-only">Card Name</label>
                            <input type="password" id="cardName" placeholder="Card Name" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="expiryDate" class="sr-only">Expiry Date</label>
                            <input type="password" id="expiryDate" placeholder="Expiry Date" class="form-control" />
                        </div>
                    </div>
                    <div class="row mb-5">
                        <div class="col-12 text-center">
                            <div class="btn-group">
                                <button class="btn btn-danger">Remove</button>
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>

                    <h4 class="mb-4">
                        Newsletter Preference
                    </h4>
                    <h6 class="mb-4">
                        Select which method GStorm should contact you by
                    </h6>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="inputSameAsBilling">
                                <label class="form-check-label" for="inputSameAsBilling">
                                    Email
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="inputSameAsBilling">
                                <label class="form-check-label" for="inputSameAsBilling">
                                    Post
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="inputSameAsBilling">
                                <label class="form-check-label" for="inputSameAsBilling">
                                    SMS
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 offset-lg-2">
                    <input type="password" class="form-control" placeholder="Enter Password" />
                </div>
                <div class="col-12 col-lg-4">
                    <button class="btn btn-success">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>