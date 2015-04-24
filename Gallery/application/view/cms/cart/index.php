<div id="content">
    <div class="container">
        <div class="row">
        <div class="box span12">
            <span class="label sale">Cart</span><br />
            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Year</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cartArray as $item) { ?>
                            <tr>
                                <td><?php if (isset($item->Id)) echo $item->Id; ?></td>
                                <td><?php if (isset($item->Title)) echo $item->Title; ?></td>
                                <td><?php if (isset($item->Artist)) echo $item->FullName; ?></td>
                                <td><?php if (isset($item->Year)) echo $item->Year; ?></td>
                                <td><?php if (isset($item->Price)) echo "$". $item->Price; ?></td>
                                <td><a href="<?php echo URL. 'cms/cart/remove/'. $item->Id ?>"><button type="button">Remove</button></a></td>
                            </tr>
                         <?php } ?>
                            <tr>
                                <td colspan="6">Sub cost:   <?php echo '$'. $subtotal ?></td>
                            </tr>
                            <tr>
                                <td colspan="6">Shipping:   <?php echo '$'. $shipping ?></td>
                            </tr>
                            <tr>
                                <td colspan="6">Total cost: <?php echo '$'. ($subtotal + $shipping)?></td>
                            </tr>
                            <tr>
                                <td colspan="6"><a href="<?php echo URL. 'cms/cart/checkout/'. $item->Id ?>"><button type="button">Checkout</button></a></td>
                            </tr>
                    </tbody>
                </table>
            </div>
    </div>
    <!-- END ROW -->
</div>
    </div>
</div>

