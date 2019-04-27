<div class="container-fluid pt-5 sign-in">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
            <div class="row">
                <div class="col-12 offset-md-2 col-md-8">
                    <form action="/account/signIn" method="POST" class="form-signin">
                        <div class="row mb-3">
                            <div class="col-12 text-center">
                                <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address"
                                    required="" autofocus="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"
                                    required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="text-small">
                                    <a href="/account/forgottenPassword" class="">Forgot Your Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button class="btn btn-lg btn-primary login-button btn-success" type="submit">Sign
                                    in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 offset-md-2 col-md-8">
                    <hr>
                    <a href="/account/signUp" class="btn btn-danger btn-block mb-3">Create an Account</a>
                    <p class="text-small text-bold">By making an account with us, you are agreeing to our Privacy
                        Policy.</p>
                </div>
            </div>
        </div>
    </div>
</div>