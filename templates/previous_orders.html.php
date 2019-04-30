<div class="container-fluid pt-5">
    <div class="row">
        <div class="col-12 col-lg-2 offset-lg-1 pt-5">
            <?php include("my_account_menu.html.php"); ?>
        </div>
        <div class="col-12 col-lg-9">
            <h1 class="text-center">
                Previous Orders
            </h1>
            <?php if (count($orders) > 0) { ?>
                <h6 class="text-center mb-4">
                    To view the contents of an order, click the appropriate order number from the list below.
                </h6>
            <?php } ?>

            <div class="row">
                <div class="col-12">
                    <?php if (count($orders) > 0) { ?>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Date of Order</th>
                                    <th>Order Status</th>
                                    <th>Order Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order) { ?>
                                    <tr>
                                        <td><?= $order->order_number ?></td>
                                        <td><?= $order->order_date ?></td>
                                        <td><?= $order->getOrderStatus()->name ?></td>
                                        <td>£<?= $order->order_total ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <p class="font-italic text-center">
                            You have no orders!
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>