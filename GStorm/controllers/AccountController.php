<?php
    namespace GStorm\controllers;

    class AccountController {
        private $customersTable;
        private $ordersTable;

        public function __construct($customersTable, $ordersTable) {
            $this->customersTable = $customersTable;
            $this->ordersTable = $ordersTable;
        }
        
        public function addressbook() {
            $customers = $this->customersTable->find('customer_id', $_SESSION['customerId']);

            if (sizeof($customers) == 1) {
                $customer = $customers[0];
            }
            else {
                //error
            }

            return [
                'template' => 'addressbook.html.php',
                'title' => "Addressbook",
                'variables' => [
                    'customer' => $customer
                ]
            ];
        }

        public function billingAddressSubmit() {
            $customers = $this->customersTable->find('customer_id', $_SESSION['customerId']);

            if (sizeof($customers) == 1) {
                $customer = $customers[0];

                $this->customersTable->update([
                    'customer_id' => $_SESSION['customerId'],
                    'billing_address' => $_POST['billingAddress'],
                    'billing_postcode' => $_POST['billingPostcode']
                ]);
            }

            header('location: /account/addressbook');
        }

        public function deliveryAddressSubmit() {
            $customers = $this->customersTable->find('customer_id', $_SESSION['customerId']);

            if (sizeof($customers) == 1) {
                $customer = $customers[0];

                $this->customersTable->update([
                    'customer_id' => $_SESSION['customerId'],
                    'delivery_address' => $_POST['deliveryAddress'],
                    'delivery_postcode' => $_POST['deliveryPostcode']
                ]);
            }

            header('location: /account/addressbook');
        }

        public function details() {
            $customers = $this->customersTable->find('customer_id', $_SESSION['customerId']);

            if (sizeof($customers) == 1) {
                $customer = $customers[0];
            }
            else {
                //error
            }

            return [
                'template' => 'details.html.php',
                'title' => "Account Details",
                'variables' => [
                    'customer' => $customer
                ]
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

        public function personalInformationSubmit() {
            $customers = $this->customersTable->find('customer_id', $_SESSION['customerId']);

            if (sizeof($customers) == 1) {
                $customer = $customers[0];

                $this->customersTable->update([
                    'customer_id' => $_SESSION['customerId'],
                    'title' => $_POST['title'],
                    'first_name' => $_POST['first_name'],
                    'last_name' => $_POST['last_name'],
                    'phone_number' => $_POST['phone_number'],
                    'email' => $_POST['email']
                ]);
            }

            header('location: /account/details');
        }

        public function previousOrders() {
            $orders = $this->ordersTable->find('customer_id', $_SESSION['customerId']);

            return [
                'template' => 'previous_orders.html.php',
                'title' => "Previous Orders",
                'variables' => [
                    'orders' => $orders
                ]
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
                        $_SESSION['customerId'] = $customer[0]->customer_id;
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

        public function updateNewsletterPreferencesSubmit() {
            $customers = $this->customersTable->find('customer_id', $_SESSION['customerId']);

            if (sizeof($customers) == 1) {
                $customer = $customers[0];

                $this->customersTable->update([
                    'customer_id' => $_SESSION['customerId'],
                    'contact_email' => isset($_POST['contact_email']) ? $_POST['contact_email'] : 0,
                    'contact_post' => isset($_POST['contact_post']) ? $_POST['contact_post'] : 0,
                    'contact_sms' => isset($_POST['contact_sms']) ? $_POST['contact_sms'] : 0
                ]);
            }

            header('location: /account/details');
        }

        public function updatePaymentDetailsSubmit() {
            $customers = $this->customersTable->find('customer_id', $_SESSION['customerId']);

            if (sizeof($customers) == 1) {
                $customer = $customers[0];

                $this->customersTable->update([
                    'customer_id' => $_SESSION['customerId'],
                    'card_number' => $_POST['card_number'],
                    'card_name' => $_POST['card_name'],
                    'expiry_date' => $_POST['expiry_date']
                ]);
            }

            header('location: /account/details');
        }

        public function updatePasswordSubmit() {
            $customers = $this->customersTable->find('customer_id', $_SESSION['customerId']);

            if (sizeof($customers) == 1) {
                $customer = $customers[0];

                if ($customer->password == $_POST['current_password'] && $_POST['new_password'] == $_POST['confirm_new_password']) {
                    $this->customersTable->update([
                        'customer_id' => $_SESSION['customerId'],
                        'password' => $_POST['new_password']
                    ]);
                }
                else {
                    //error
                }
            }

            header('location: /account/details');
        }
    }
?>