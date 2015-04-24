<section id="featured" data-speed="1" data-type="backgroFund">
    <div class="container">
        <div class="row">
            <?php foreach ($arts as $art) { ?>
            <div class="span4">
                <div class="item">
                    <span class="label sale">FOR SALE</span>
                    <a href="<?php echo URL. "cms/arts/details/$art->Id" ?>">
                        <img src="<?php echo URL. "ims/img/gallery/$art->Image1" ?>">
                    </a>
                    <div class="info">
                        <h2><a href="<?php echo URL. "cms/arts/details/$art->Id" ?>"><?php echo $art->Title ?></a></h2> <div class="text1"><?php echo $art->FullName ?></div>
                        <div class="price"><?php echo '$'. $art->Price ?></div>
                        <div class="info-listing">
                            <span class="meter">Size</span>
                            <span class="car"><?php echo $art->Size ?></span>
                        </div>
                        <div class="info-listing">
                            <span class="meter">Color</span>
                            <span class="car"><?php echo $art->Color ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>