<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo URL ?>ims/users/">Users</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">New</a></li>
    </ul>

    <!-- ROW -->
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Information of user</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" method="post" action="<?php echo URL ?>ims/users/create">
                    <fieldset>
                        
                        <div class="control-group">
                            <label class="control-label" for="type">Group</label>
                            <div class="controls">
                                <select id="type" name="group">
                                    <?php foreach ($groups as $g) { 
                                        echo "<option value='$g->Id' ";
                                        if(isset($group) && $group == $g->Id)
                                        {
                                            echo "selected='selected'";
                                        }
                                        echo "> $g->Name </option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="title">Username</label>
                            <div class="controls">
                                <input class="input-xlarge" id="title" name="username" type="text" <?php if(isset($username)) echo "value='$username'"; ?>/>
                                <?php if(isset($usernameError)){ ?>
                                <span class="help-inline" style="color: red;"><?php echo $usernameError; ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="size">Password</label>
                            <div class="controls">
                                <input class="input-xlarge" id="size" type="password" name="password" />
                                <?php if(isset($passwordError)){ ?>
                                <span class="help-inline" style="color: red;"><?php echo $passwordError; ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="color">Confirm password</label>
                            <div class="controls">
                                <input class="input-xlarge" id="color" name="confirmpassword" type="password"/>
                                <?php if(isset($passwordConfirmError)){ ?>
                                <span class="help-inline" style="color: red;"><?php echo $passwordConfirmError; ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="material">Full name</label>
                            <div class="controls">
                                <input class="input-xlarge" id="material" name="fullname" type="text" <?php if(isset($fullname)) echo "value='$fullname'"; ?>/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="year">Email</label>
                            <div class="controls">
                                <input class="input-xlarge" id="year" type="text" name="email" <?php if(isset($email)) echo "value='$email'"; ?>/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="price">Phone</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <input  class="input-xlarge" id="price" type="text" name="phone" <?php if(isset($phone)) echo "value='$phone'"; ?>/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="address">Address</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <input  class="input-xlarge" id="address" type="text" name="address"<?php if(isset($address)) echo "value='$address'"; ?>/>
                                </div>
                            </div>
                        </div>
                                                                      
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary" name="save">Save</button>
                        </div>
                    </fieldset>
                </form> 
            </div>
        </div>
    </div>
    <!-- END ROW -->
</div>

