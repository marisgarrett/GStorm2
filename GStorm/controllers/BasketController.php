<?php
    namespace GStorm\controllers;

    class BasketController {
        private $basketTable;

        public function __construct($basketTable) {
            $this->basketTable = $basketTable;
        }
        
        public function add() {
            if ($_GET['product_id']) {
                $basketItems = $this->basketTable->find('customer_id', $_SESSION['customerId']);
                $alreadyInBasket = false;

                foreach ($basketItems as $basketItem) {
                    if ($_GET['product_id'] == $basketItem->product_id) {
                        $alreadyInBasket = true;
                    }
                }

                if ($alreadyInBasket == false) {
                    $this->basketTable->save([
                        'customer_id' => $_SESSION['customerId'],
                        'product_id' => $_GET['product_id']
                    ]);
                }

                header('location: /basket/my');
            }
        }

        public function decrease() {
            if ($_GET['basket_id']) {
                $basketItems = $this->basketTable->find('basket_id', $_GET['basket_id']);

                if (count($basketItems) == 1) {
                    $basketItem = $basketItems[0];
                    
                    $this->basketTable->save([
                        'basket_id' => $basketItem->basket_id,
                        'customer_id' => $basketItem->customer_id,
                        'product_id' => $basketItem->product_id,
                        'quantity' => $basketItem->quantity-1
                    ]);
                }

                header('location: /basket/my');
            }
        }

        public function increase() {
            if ($_GET['basket_id']) {
                $basketItems = $this->basketTable->find('basket_id', $_GET['basket_id']);

                if (count($basketItems) == 1) {
                    $basketItem = $basketItems[0];
                    
                    $this->basketTable->save([
                        'basket_id' => $basketItem->basket_id,
                        'customer_id' => $basketItem->customer_id,
                        'product_id' => $basketItem->product_id,
                        'quantity' => $basketItem->quantity+1
                    ]);
                }

                header('location: /basket/my');
            }
        }

        public function my() {
            $basketItems = $this->basketTable->find('customer_id', $_SESSION['customerId']);

            return [
                'template' => 'basket.html.php',
                'title' => "My Basket",
                'variables' => [
                    'basketItems' => $basketItems
                ]
            ];
        }

        public function remove() {
            if ($_GET['basket_id']) {
                $this->basketTable->delete('basket_id', $_GET['basket_id']);
                
                header('location: /basket/my');
            }
        }
    }
?>