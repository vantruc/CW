<div id="content" class="span10">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="<?php echo URL ?>ims/arts/">Arts</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">New</a></li>
    </ul>

    <!-- ROW -->
    <div class="row-fluid">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Information of art</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal" method="post" action="<?php echo URL ?>ims/arts/create" enctype='multipart/form-data'>
                    <fieldset>
                        
                        <div class="control-group">
                            <label class="control-label" for="type">Type of art</label>
                            <div class="controls">
                                <select id="type" name="type">
                                    <?php foreach ($types as $type) { 
                                        echo "<option value='$type->Id'> $type->Name </option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="artist">Artist</label>
                            <div class="controls">
                                <select id="artist" name="artist">
                                    <?php foreach ($artists as $artist) { 
                                        echo "<option value='$artist->Id'> $artist->FullName </option>";
                                    } ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="title">Title</label>
                            <div class="controls">
                                <input class="input-xlarge" id="title" name="title" type="text" />
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="size">Size</label>
                            <div class="controls">
                                <input class="input-xlarge" id="size" type="text" name="size" />
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="color">Color</label>
                            <div class="controls">
                                <input class="input-xlarge" id="color" name="color" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="material">Material</label>
                            <div class="controls">
                                <input class="input-xlarge" id="material" name="material" type="text"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="year">Year</label>
                            <div class="controls">
                                <input class="input-xlarge" id="year" type="text" name="year">
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label" for="price">Price</label>
                            <div class="controls">
                                <div class="input-prepend">
                                    <span class="add-on">$</span><input  id="price" type="text" name="price">
                                </div>
                            </div>
                        </div>
                        
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="description">Description</label>
                            <div class="controls">
                                <textarea class="cleditor" id="description" name="description" rows="3"></textarea>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Image 1</label>
                            <div class="controls">
                                <input type="file" name="image1"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Image 2</label>
                            <div class="controls">
                                <input type="file" name="image2"/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Image 3</label>
                            <div class="controls">
                                <input type="file" name="image3"/>
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

