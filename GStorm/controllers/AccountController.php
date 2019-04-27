<?php
    namespace GStorm\controllers;

    class AccountController {
        private $customersTable;

        public function __construct($customersTable) {
            $this->customersTable = $customersTable;
        }
        
        public function addressbook() {
            return [
                'template' => 'addressbook.html.php',
                'title' => "Addressbook",
                'variables' => []
            ];
        }

        public function details() {
            return [
                'template' => 'details.html.php',
                'title' => "Account Details",
                'variables' => []
            ];
        }

        public function forgottenPassword() {
            return [
                'template' => 'forgotten_password.html.php',
                'title' => "Forgotten Password",
                'variables' => []
            ];
        }

        public function my() {
            return [
                'template' => 'my.html.php',
                'title' => "My Account",
                'variables' => []
            ];
        }

        public function previousOrders() {
            return [
                'template' => 'previous_orders.html.php',
                'title' => "Previous Orders",
                'variables' => []
            ];
        }

        public function signIn() {
            return [
                'template' => 'sign_in.html.php',
                'title' => "Sign In",
                'variables' => []
            ];
        }

        public function signInSubmit() {
            if ($_POST['email'] && $_POST['password']) {
                $customer = $this->customersTable->find('email', $_POST['email']);

                if (sizeof($customer) == 1) {
                    if ($customer[0]->password == $_POST['password']) {
                        $_SESSION['loggedin'] = true;
                    }
                }
            }

            if (isset($_SESSION['loggedin'])) {
                header('location: /');
            }
            else {
                return [
                    'template' => 'sign_in.html.php',
                    'title' => "Sign In",
                    'variables' => []
                ];
            }
        }

        public function signOut() {
            session_destroy();

            header('location: /account/signIn');
        }

        public function signUp() {
            return [
                'template' => 'sign_up.html.php',
                'title' => "Sign Up",
                'variables' => []
            ];
        }

        public function signUpSubmit() {
            if ($_POST['user']) {
                if ($_POST['user']['password'] != $_POST['confirmPassword']) {
                    //error
                }
                
                $this->customersTable->save($_POST['user']);
            }

            header('location: /account/signIn');
        }
    }
?>