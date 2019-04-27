<?php
    namespace GStorm\controllers;

    class HomeController {
        private $productsTable;

        public function __construct($productsTable) {
            $this->productsTable = $productsTable;
        }
           
        public function about() {
            return [
                'template' => 'about_us.html.php',
                'title' => "About Us",
                'variables' => []
            ];
        }

        public function contact() {
            return [
                'template' => 'contact_us.html.php',
                'title' => "Contact Us",
                'variables' => []
            ];
        }

        public function home() {
            $featuredProducts = $this->productsTable->find('is_featured', 1);

            return [
                'template' => 'home.html.php',
                'title' => "Home",
                'variables' => [
                    'featuredProducts' => $featuredProducts
                ]
            ];
        }

        public function privacy() {
            return [
                'template' => 'privacy_policy.html.php',
                'title' => "Privacy",
                'variables' => []
            ];
        }
    }
?>