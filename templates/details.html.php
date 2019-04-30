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
                    <form id="frmPersonalInformation" action="/account/personalInformation" method="post" class="mb-5">
                        <h4 class="mb-4">
                            Personal Information
                        </h4>

                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="title" class="sr-only">Title</label>
                                <input type="text" id="title" name="title" placeholder="Title" class="form-control" value="<?= $customer->title ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="firstName" class="sr-only">First Name</label>
                                <input type="text" id="firstName" name="first_name" placeholder="First Name" class="form-control" value="<?= $customer->first_name ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="lastName" class="sr-only">Last Name</label>
                                <input type="text" id="lastName" name="last_name" placeholder="Last Name" class="form-control" value="<?= $customer->last_name ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="email" class="sr-only">Email</label>
                                <input type="text" id="email" name="email" placeholder="Email" class="form-control" value="<?= $customer->email ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="phoneNumber" class="sr-only">Phone Number</label>
                                <input type="text" id="phoneNumber" name="phone_number" placeholder="Phone Number" class="form-control" value="<?= $customer->phone_number ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success">
                                    SAVE
                                </button> 
                            </div>
                        </div>
                    </form>
                    <form id="frmUpdatePassword" action="/account/updatePassword" method="post" class="mb-5">
                        <h4 class="mb-4">
                            Change Your Password
                        </h4>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="new_password" class="sr-only">Password</label>
                                <input type="password" id="new_password" name="new_password" placeholder="New Password" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-12">
                                <label for="confirm_new_password" class="sr-only">Confirm Password</label>
                                <input type="password" id="confirm_new_password" name="confirm_new_password" placeholder="Confirm New Password" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="current_password" class="sr-only">Current Password</label>
                                <input type="password" id="current_password" name="current_password" placeholder="Current Password" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success">
                                    SAVE
                                </button> 
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <form id="frmPaymentDetails" action="/account/updatePaymentDetails" method="post" class="mb-5">
                        <h4 class="mb-4">
                            Payment Details
                        </h4>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="card_number" class="sr-only">Card Number</label>
                                <input type="text" id="card_number" name="card_number" placeholder="Card Number" class="form-control" value="<?= $customer->card_number ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="card_name" class="sr-only">Card Name</label>
                                <input type="text" id="card_name" name="card_name" placeholder="Card Name" class="form-control" value="<?= $customer->card_name ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="expiry_date" class="sr-only">Expiry Date</label>
                                <input type="text" id="expiry_date" name="expiry_date" placeholder="Expiry Date" class="form-control" value="<?= $customer->expiry_date ?>" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success">
                                    SAVE
                                </button> 
                            </div>
                        </div>
                    </form>

                    <form id="frmNewsletterPreferences" action="/account/updateNewsletterPreferences" method="post" class="mb-5">
                        <h4 class="mb-4">
                            Newsletter Preference
                        </h4>
                        <p class="mb-4">
                            Select which method GStorm should contact you by
                        </p>
                        <div class="row mb-3">
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="contact_email" name="contact_email" <?php echo($customer->contact_email == true ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="contact_email">
                                        Email
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="contact_post" name="contact_post" <?php echo($customer->contact_post == true ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="contact_post">
                                        Post
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="contact_sms" name="contact_sms" <?php echo($customer->contact_sms == true ? 'checked' : ''); ?>>
                                    <label class="form-check-label" for="contact_sms">
                                        SMS
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success">
                                    SAVE
                                </button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>