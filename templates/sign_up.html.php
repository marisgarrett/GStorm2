<div class="container-fluid pt-5 sign-up">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
            <div class="row">
                <div class="col-12 offset-md-2 col-md-8">
                    <form action="/account/signUp" method="POST" class="form-signin">
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="inputFirstName" class="sr-only">First Name</label>
                                <input type="text" id="inputFirstName" name="user[first_name]" class="form-control" placeholder="First Name"
                                    required="" autofocus="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="inputLastName" class="sr-only">Last Name</label>
                                <input type="text" id="inputLastName" name="user[last_name]" class="form-control" placeholder="Last Name"
                                    required="" autofocus="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" name="user[email]" class="form-control" placeholder="Email address"
                                    required="" autofocus="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" id="inputPassword" name="user[password]" class="form-control" placeholder="Password"
                                    required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="inputConfirmPassword" class="sr-only">Confirm Password</label>
                                <input type="password" id="inputConfirmPassword" name="confirmPassword" class="form-control"
                                    placeholder="Confirm Password" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <button class="btn btn-lg btn-primary login-button btn-success" type="submit">Sign
                                    Up</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-small text-bold">By making an account with us, you are agreeing to our
                                    Privacy Policy.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>