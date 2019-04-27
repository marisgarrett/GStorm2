<?php
    namespace GStorm;

    class Routes implements \GStorm\IRoutes {
        public function checkLogin() {
            if (!isset($_SESSION['loggedin'])) {
              header('location: /signin');
            }
        }

        public function getRoutes() {
            require 'database.php';

            $categoryTable = new \GStorm\DatabaseTable($pdo, 'product_category', 'product_category_id');
            $productsTable = new \GStorm\DatabaseTable($pdo, 'product', 'product_id');
            $customersTable = new \GStorm\DatabaseTable($pdo, 'customer', 'customer_id');
            
            $accountController = new \GStorm\controllers\AccountController($customersTable);
            $checkoutController = new \GStorm\controllers\CheckoutController();
            $homeController = new \GStorm\controllers\HomeController($productsTable);
            $productController = new \GStorm\controllers\ProductController($productsTable, $categoryTable);

            $routes = [
                '' => [
                    'GET' => [
                        'controller' => $homeController,
                        'function' => 'home'
                    ]
                ],
                'about' => [
                    'GET' => [
                        'controller' => $homeController,
                        'function' => 'about'
                    ]
                ],
                'account/addressbook' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'addressbook'
                    ]
                ],
                'account/details' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'details'
                    ]
                ],
                'account/forgottenPassword' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'forgottenPassword'
                    ]
                ],
                'account/my' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'my'
                    ]
                ],
                'account/previousOrders' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'previousOrders'
                    ]
                ],
                'account/signIn' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'signIn'
                    ],
                    'POST' => [
                        'controller' => $accountController,
                        'function' => 'signInSubmit'
                    ]
                ],
                'account/signOut' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'signOut'
                    ]
                ],
                'account/signUp' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'signUp'
                    ],
                    'POST' => [
                        'controller' => $accountController,
                        'function' => 'signUpSubmit'
                    ]
                ],
                'checkout/basket' => [
                    'GET' => [
                        'controller' => $checkoutController,
                        'function' => 'basket'
                    ]
                ],
                'checkout/billing' => [
                    'GET' => [
                        'controller' => $checkoutController,
                        'function' => 'billing'
                    ]
                ],
                'checkout/shipping' => [
                    'GET' => [
                        'controller' => $checkoutController,
                        'function' => 'shipping'
                    ]
                ],
                'contact' => [
                    'GET' => [
                        'controller' => $homeController,
                        'function' => 'contact'
                    ]
                ],
                'privacy' => [
                    'GET' => [
                        'controller' => $homeController,
                        'function' => 'privacy'
                    ]
                ],
                'products/category' => [
                    'GET' => [
                        'controller' => $productController,
                        'function' => 'category'
                    ]
                ],
                'search' => [
                    'POST' => [
                        'controller' => $productController,
                        'function' => 'searchSubmit'
                    ]
                ]
            ];

            return $routes;
        }        
    }
?>