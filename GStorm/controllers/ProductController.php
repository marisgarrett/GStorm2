<?php
    namespace GStorm\controllers;

    class ProductController {
        private $productsTable;
        private $categoryTable;

        public function __construct($productsTable, $categoryTable) {
            $this->productsTable = $productsTable;
            $this->categoryTable = $categoryTable;
        }

        public function category() {
            if (isset($_GET['categoryId'])) {
                $category = $this->categoryTable->find('product_category_id', $_GET['categoryId']);
                $products = $this->productsTable->find('category_id', $_GET['categoryId']);
            }
            else {
                $category = false;
                $products = false;
            }

            return [
                'template' => 'product_category.html.php',
                'title' => "Products",
                'variables' => [
                    'category' => $category,
                    'products' => $products
                ]
            ];
        }

        public function searchSubmit() {
            if ($_POST['searchTerm']) {
                $allProducts = $this->productsTable->findAll();
                $products = [];

                foreach ($allProducts as $product) {
                    if (stripos($product->name, $_POST['searchTerm']) !== FALSE) {
                        array_push($products, $product);
                    }
                }
            }

            return [
                'template' => 'search.html.php',
                'title' => "Search Results",
                'variables' => [
                    'products' => $products
                ]
            ];
        }
    }
?>