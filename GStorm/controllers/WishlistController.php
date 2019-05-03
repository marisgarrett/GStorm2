<?php
    namespace GStorm\controllers;

    class WishlistController {
        private $wishlistTable;

        public function __construct($wishlistTable) {
            $this->wishlistTable = $wishlistTable;
        }
        
        public function add() {
            if ($_GET['product_id']) {
                $wishlistItems = $this->wishlistTable->find('customer_id', $_SESSION['customerId']);
                $alreadyInWishList = false;

                foreach ($wishlistItems as $wishlistItem) {
                    if ($_GET['product_id'] == $wishlistItem->product_id) {
                        $alreadyInWishList = true;
                    }
                }

                if ($alreadyInWishList == false) {
                    $this->wishlistTable->save([
                        'customer_id' => $_SESSION['customerId'],
                        'product_id' => $_GET['product_id']
                    ]);
                }

                header('location: /wishlist/my');
            }
        }

        public function my() {
            $wishlistItems = $this->wishlistTable->find('customer_id', $_SESSION['customerId']);

            return [
                'template' => 'my-wishlist.html.php',
                'title' => "My Wishlist",
                'variables' => [
                    'wishlistItems' => $wishlistItems
                ]
            ];
        }

        public function remove() {
            if ($_GET['wishlist_id']) {
                $this->wishlistTable->delete('wishlist_id', $_GET['wishlist_id']);
                
                header('location: /wishlist/my');
            }
        }
    }
?>