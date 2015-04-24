<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo URL ?>ims/users/">Users</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Edit</a></li>
    </ul>

    <!-- ROW -->
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Information of user</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" method="post" action="<?php echo URL ?>ims/users/edit">
                    <fieldset>

                        <div class="control-group">
                            <label class="control-label" for="type">Group</label>
                            <div class="controls">
                                <select id="type" name="group">
                                    <?php
                                    foreach ($groups as $g) {
                                        echo "<option value='$g->Id' ";
                                        if ($user->GroupId == $g->Id) {
                                            echo "selected='selected'";
                                        }
                                        echo "> $g->Name </option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="title">Username</label>
                            <div class="controls">
                                <input class="input-xlarge" id="title" name="username" type="text" <?php if (isset($user->Username)) echo "value='$user->Username'"; ?> disabled="disabled"/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="material">Full name</label>
                            <div class="controls">
                                <input class="input-xlarge" id="material" name="fullname" type="text" <?php if (isset($user->FullName)) echo "value='$user->FullName'"; ?>/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="year">Email</label>
                            <div class="controls">
                                <input class="input-xlarge" id="year" type="text" name="email" <?php if (isset($user->Email)) echo "value='$user->Email'"; ?>/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="price">Phone</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <input  class="input-xlarge" id="price" type="text" name="phone" <?php if (isset($user->Phone)) echo "value='$user->Phone'"; ?>/>
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="address">Address</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <input  class="input-xlarge" id="address" type="text" name="address" <?php if (isset($user->Address)) echo "value='$user->Address'"; ?>/>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <input type="hidden" name="id" <?php if (isset($user->Id)) echo "value='$user->Id'"; ?>/>
                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                        </div>
                    </fieldset>
                </form> 
            </div>
        </div>
    </div>
    <!-- END ROW -->
</div>

