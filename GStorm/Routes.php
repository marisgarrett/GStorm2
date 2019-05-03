<?php
    namespace GStorm;

    class Routes implements \GStorm\IRoutes {
        public function checkLogin() {
            if (!isset($_SESSION['loggedin'])) {
              header('location: /signIn');
            }
        }

        public function getRoutes() {
            require 'database.php';

            $categoryTable = new \GStorm\DatabaseTable($pdo, 'product_category', 'product_category_id');
            $productsTable = new \GStorm\DatabaseTable($pdo, 'product', 'product_id');
            $customersTable = new \GStorm\DatabaseTable($pdo, 'customer', 'customer_id');
            $orderItemTable = new \GStorm\DatabaseTable($pdo, 'order_item', 'order_item_id');
            $orderStatusTable = new \GStorm\DatabaseTable($pdo, 'order_status', 'order_status_id');
            $ordersTable = new \GStorm\DatabaseTable($pdo, 'orders', 'order_id', '\GStorm\entities\Order', [$orderItemTable, $orderStatusTable]);
            $wishlistTable = new \GStorm\DatabaseTable($pdo, 'wishlist', 'wishlist_id', '\GStorm\entities\WishlistEntry', [$productsTable]);
            $basketTable = new \GStorm\DatabaseTable($pdo, 'basket', 'basket_id', '\GStorm\entities\BasketEntry', [$productsTable]);
            
            $accountController = new \GStorm\controllers\AccountController($customersTable, $ordersTable);
            $checkoutController = new \GStorm\controllers\CheckoutController();
            $homeController = new \GStorm\controllers\HomeController($productsTable);
            $productController = new \GStorm\controllers\ProductController($productsTable, $categoryTable);
            $wishlistController = new \GStorm\controllers\WishlistController($wishlistTable);
            $basketController = new \GStorm\controllers\BasketController($basketTable);

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
                        'function' => 'addressbook',
                        'requiresAuthentication' => true
                    ]
                ],
                'account/billingAddress' => [
                    'POST' => [
                        'controller' => $accountController,
                        'function' => 'billingAddressSubmit',
                        'requiresAuthentication' => true
                    ]
                ],
                'account/deliveryAddress' => [
                    'POST' => [
                        'controller' => $accountController,
                        'function' => 'deliveryAddressSubmit',
                        'requiresAuthentication' => true
                    ]
                ],
                'account/details' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'details',
                        'requiresAuthentication' => true
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
                        'function' => 'my',
                        'requiresAuthentication' => true
                    ]
                ],
                'account/personalInformation' => [
                    'POST' => [
                        'controller' => $accountController,
                        'function' => 'personalInformationSubmit',
                        'requiresAuthentication' => true
                    ]
                ],
                'account/previousOrders' => [
                    'GET' => [
                        'controller' => $accountController,
                        'function' => 'previousOrders',
                        'requiresAuthentication' => true
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
                'account/updateNewsletterPreferences' => [
                    'POST' => [
                        'controller' => $accountController,
                        'function' => 'updateNewsletterPreferencesSubmit',
                        'requiresAuthentication' => true
                    ]
                ],
                'account/updatePassword' => [
                    'POST' => [
                        'controller' => $accountController,
                        'function' => 'updatePasswordSubmit',
                        'requiresAuthentication' => true
                    ]
                ],
                'account/updatePaymentDetails' => [
                    'POST' => [
                        'controller' => $accountController,
                        'function' => 'updatePaymentDetailsSubmit',
                        'requiresAuthentication' => true
                    ]
                ],
                'basket/add' => [
                    'GET' => [
                        'controller' => $basketController,
                        'function' => 'add',
                        'requiresAuthentication' => true
                    ]
                ],
                'basket/decrease' => [
                    'GET' => [
                        'controller' => $basketController,
                        'function' => 'decrease',
                        'requiresAuthentication' => true
                    ]
                ],
                'basket/increase' => [
                    'GET' => [
                        'controller' => $basketController,
                        'function' => 'increase',
                        'requiresAuthentication' => true
                    ]
                ],
                'basket/my' => [
                    'GET' => [
                        'controller' => $basketController,
                        'function' => 'my',
                        'requiresAuthentication' => true
                    ]
                ],
                'basket/remove' => [
                    'GET' => [
                        'controller' => $basketController,
                        'function' => 'remove',
                        'requiresAuthentication' => true
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
                ],
                'wishlist/add' => [
                    'GET' => [
                        'controller' => $wishlistController,
                        'function' => 'add',
                        'requiresAuthentication' => true
                    ]
                ],
                'wishlist/my' => [
                    'GET' => [
                        'controller' => $wishlistController,
                        'function' => 'my',
                        'requiresAuthentication' => true
                    ]
                ],
                'wishlist/remove' => [
                    'GET' => [
                        'controller' => $wishlistController,
                        'function' => 'remove',
                        'requiresAuthentication' => true
                    ]
                ],
            ];

            return $routes;
        }        
    }
?>