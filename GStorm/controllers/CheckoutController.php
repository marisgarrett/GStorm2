<?php
    namespace GStorm\controllers;

    class CheckoutController {
        public function __construct() {
        }
        
        public function account() {
            return [
                'template' => 'basket.html.php',
                'title' => "Basket",
                'variables' => []
            ];
        }

        public function basket() {
            return [
                'template' => 'basket.html.php',
                'title' => "Basket",
                'variables' => []
            ];
        }

        public function billing() {
            return [
                'template' => 'billing.html.php',
                'title' => "Billing",
                'variables' => []
            ];
        }

        public function shipping() {
            return [
                'template' => 'shipping.html.php',
                'title' => "Shipping",
                'variables' => []
            ];
        }
    }
?>