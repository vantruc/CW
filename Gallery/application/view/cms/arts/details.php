<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="row">
                    <div class="span6">                    
                        <!-- Slideshow -->
                        <div class="callbacks_container">
                            <ul class="rslides pic_slider">
                                <li>
                                    <img src="<?php echo URL. 'ims/img/gallery/'. $art->Image1 ?>" alt="">
                                </li>
                                <li>
                                    <img src="<?php echo URL. 'ims/img/gallery/'. $art->Image2 ?>" alt="">
                                </li>
                                <li>
                                    <img src="<?php echo URL. 'ims/img/gallery/'. $art->Image3 ?>" alt="">
                                </li>                              
                            </ul>
                        </div>
                    </div>
                    <div class="span6">
                        <a href="<?php echo URL. "cms/cart/add/$art->Id" ?>">
                            <span class="label sale">Add to Cart</span>
                        </a>
                        <h3 class="title-property"><?php echo $art->Title ?></h3>
                        <span class="subheading"><?php echo $art->FullName ?></span>
                        <h4 class="price"><?php echo '$'. $art->Price ?></h4>
                        <div class="specs-property">
                            
                            <div class="info-listing">
                                <span class="meter">Size</span>
                                <span class="car"><?php echo $art->Size ?></span>
                            </div> 
                            <div class="info-listing">
                                <span class="meter">Color</span>
                                <span class="car"><?php echo $art->Color ?></span>
                            </div>
                            <div class="info-listing">
                                <span class="meter">Material</span>
                                <span class="car"><?php echo $art->Material ?></span>
                            </div>
                            <div class="info-listing">
                                <span class="meter">Year</span>
                                <span class="car"><?php echo $art->Year ?></span>
                            </div>
                           <div class="description">
                                <?php echo $art->Description ?>
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>                 
        </div>
    </div>
</div>