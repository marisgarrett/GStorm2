<?php
    namespace GStorm\entities;

    class Order {
        private $orderItemTable;
        private $orderStatusTable;

        public $order_id;
        public $customer_id;
        public $order_status_id;
        public $order_date;
        public $shipping_address;
        public $shipping_postcode;
        public $postage_type_id;
        public $order_total;

        public function __construct($orderItemTable, $orderStatusTable){
            $this->orderItemTable = $orderItemTable;
            $this->orderStatusTable = $orderStatusTable;
        }

        public function getOrderItems() {
            return $this->orderItemTable->find('order_id', $this->order_id);
        }

        public function getOrderStatus() {
            $results = $this->orderStatusTable->find('id', $this->order_status_id);
            if (count($results)) {
                return $results[0];
            }
            else {
                return false;
            }
        }
    }
 ?>