<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo URL. 'ims/arts/' ?>">Arts</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Arts manage</a></li>
    </ul>
    <!--ROW-->
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Action</h2>
            </div>
            <div class="box-content">
                <p>
                    <button class="btn btn-large btn-danger" onclick="window.location = '<?php echo URL; ?>ims/arts/create'">New art</button>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--END ROW-->

    <!-- ROW -->
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>List of arts</h2>
            </div>
            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Title</th>
                            <th>Artist</th>
                            <th>Year</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($arts as $art) { ?>
                            <tr>
                                <td><?php if (isset($art->Id)) echo $art->Id; ?></td>
                                <td><?php if (isset($art->Type)) echo $art->TypeArt; ?></td>
                                <td><?php if (isset($art->Title)) echo $art->Title; ?></td>
                                <td><?php if (isset($art->Artist)) echo $art->FullName; ?></td>
                                <td><?php if (isset($art->Year)) echo $art->Year; ?></td>
                                <td><?php if (isset($art->Price)) echo "$". $art->Price; ?></td>
                                <?php  
                                    if($art->Sold == 1)
                                    {
                                        echo "<td> <span class='btn btn-danger'>Sold</span></td>";
                                    }
                                    else
                                    {
                                        echo "<td> <span class='btn btn-success'>Selling</span></td>";
                                    }
                                ?>
                                
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="<?php echo URL . 'ims/arts/edit/'. $art->Id; ?>">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo URL . 'ims/arts/delete/'. $art->Id; ?>">
                                        <i class="halflings-icon white trash"></i>
                                    </a>
                                </td>
                            </tr>
                         <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END ROW -->
</div>

