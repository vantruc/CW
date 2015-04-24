<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo URL . 'ims/users/' ?>">Users</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Users manage</a></li>
    </ul>
    <!--ROW-->
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Action</h2>
            </div>
            <div class="box-content">
                <p>
                    <button class="btn btn-large btn-danger" onclick="window.location = '<?php echo URL; ?>ims/users/create'">New user</button>
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
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>List of users</h2>
            </div>
            <div class="box-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Group</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Created  Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?php if (isset($user->Id)) echo $user->Id; ?></td>
                                <td><?php if (isset($user->Name)) echo $user->Name; ?></td>
                                <td><?php if (isset($user->FullName)) echo $user->FullName; ?></td>
                                <td><?php if (isset($user->Email)) echo $user->Email; ?></td>
                                <td><?php if (isset($user->Phone)) echo $user->Phone; ?></td>
                                <td><?php if (isset($user->Address)) echo $user->Address; ?></td>
                                <td><?php if (isset($user->CreatedDate)) echo $user->CreatedDate; ?></td>
                                <td class="center">
                                    <a class="btn btn-success" href="#">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="<?php echo URL . 'ims/users/edit/' . $user->Id; ?>">
                                        <i class="halflings-icon white edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="<?php echo URL . 'ims/users/delete/' . $user->Id; ?>">
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

