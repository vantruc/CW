<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo URL. 'ims/invoices/' ?>">Invoices</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Invoices manage</a></li>
    </ul>

    <!-- ROW -->
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>List of invoices</h2>
            </div>
            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Quantity</th>
                            <th>Subtotal cost</th>
                            <th>Shipping cost</th>
                            <th>Total cost</th>
                            <th>Created Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($invoices as $invoice) { ?>
                            <tr>
                                <td><?php if (isset($invoice->Id)) echo $invoice->Id; ?></td>
                                <td><?php if (isset($invoice->FullName)) echo $invoice->FullName; ?></td>
                                <td><?php if (isset($invoice->Quantity)) echo $invoice->Quantity; ?></td>
                                <td><?php if (isset($invoice->Subtotal)) echo "$" . $invoice->Subtotal; ?></td>
                                <td><?php if (isset($invoice->Shipping)) echo "$" . $invoice->Shipping; ?></td>
                                <td><?php if (isset($invoice->Total)) echo "$" . $invoice->Total; ?></td>
                                <td><?php if (isset($invoice->CreatedDate)) echo  $invoice->CreatedDate; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END ROW -->
</div>

