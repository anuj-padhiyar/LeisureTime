<?php require_once "menu.php" ?>
<?php $user = $this->getUser(); ?>
<?php $userHobby = $user->getUserHobby(); ?>

<section class="product-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                            src="<?php echo $user->profilePicture; ?>" alt="">
                    </div>
                    <div class="product__details__pic__slider owl-carousel">
                        </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3><?php echo $user->firstName." ".$user->lastName; ?></h3>
                    
                    <div class="product__details__price">Computer Engineer</div>
                    <p><?php echo $user->description; ?></p>
                    <ul>
                        <li><b>Connections</b> <span><?php echo $user->connections; ?></span></li>
                        <li>
                            <b>Hobbies</b>
                            <?php 
                                if($userHobby){
                                    foreach($userHobby->getData() as $key=>$hobby){
                                        echo $hobby->getHobbyNameById();
                                        echo " ";
                                    }
                                } 
                            ?>
                        </li>
                        <li><b>Age</b> <span>21 Yrs</span></li>
                        <a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('editForm'); ?>').load();">Edit Profile</a>
                        <a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('addHobby'); ?>').load();">Add Hobby</a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Infomation</h6>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor r
                                    ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                    Proin eget tortor risus.</p>
                                <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                    ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliqus
                                    nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Infomation</h6>
                                <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                    Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                    Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulu
                                    Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                    Proin eget tortor risus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Recommended Profiles</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="../Skin/img/product/product-1.jpg">
                        <ul class="product__item__pic__hover">
                            <li title="friend request"><a href="#"><i class="fa fa-user-circle"></i></a></li>
                            <li title="message"><a href="#"><i class="fa fa-commenting-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Singer</a></h6>
                        <h5>Preeti</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="../Skin/img/product/product-2.jpg">
                        <ul class="product__item__pic__hover">
                            <li title="friend request"><a href="#"><i class="fa fa-user-circle"></i></a></li>
                            <li title="message"><a href="#"><i class="fa fa-commenting-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Guitar</a></h6>
                        <h5>Amit</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="../Skin/img/product/product-3.jpg">
                        <ul class="product__item__pic__hover">
                            <li title="friend request"><a href="#"><i class="fa fa-user-circle"></i></a></li>
                            <li title="message"><a href="#"><i class="fa fa-commenting-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Soccer</a></h6>
                        <h5>Vijay</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="../Skin/img/product/product-7.jpg">
                        <ul class="product__item__pic__hover">
                            <li title="friend request"><a href="#"><i class="fa fa-user-circle"></i></a></li>
                            <li title="message"><a href="#"><i class="fa fa-commenting-o"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Reading</a></h6>
                        <h5>Sneha</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>