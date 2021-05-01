<?php require_once 'menu.php';?>
<?php $users = $this->getUsers();?>
<?php $addedUser = []; ?>

<section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                     <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Hobbies</span>
                        </div>
                        <ul>
                            <li><a href="#">Collecting</a></li>
                            <li><a href="#">Games</a></li>
                            <li><a href="#">Arts & Crafts</a></li>
                            <li><a href="#">Performing Arts</a></li>
                            <li><a href="#">Model & Electronics</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Spiritual & Mental</a></li>
                            <li><a href="#">Food & Drinks</a></li>
                            <li><a href="#">Sports & Outdoors</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">

                                <input type="text" placeholder="looking for Hobbie?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="" style="background-color: #0a0a0a70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Leisure Time</h2>
                        <div class="breadcrumb__option">
                            <a href="./homepage.php">Home</a>
                            <span>Add Friends</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">

                        </div>
                        <div class="sidebar__item">

                        </div>
                        <div class="sidebar__item sidebar__item__color--option">

                        </div>
                        <div class="sidebar__item">

                        </div>
                        <div class="sidebar__item">
                            <div class="latest-product__text">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                <?php foreach ($users->getData() as $key => $value): ?>
                    <?php if($user->userId == $value->userId){continue;} ?>
                    <?php if(in_array($value->userId,$addedUser)){continue;}
                        else{$addedUser[]=$value->userId;} ?>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <img src="<?php echo $value->profilePicture; ?>">
                            <div class="product__item__pic set-bg" data-setbg="Skin/img/product/product-6.jpg">
                                <ul class="product__item__pic__hover">
                                    <li title="friend request"><a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('sendRequest', 'User\AddFriend',['id'=>$value->userId]) ?>').load(); "><i class="fa fa-user-circle"></i></a></li>
                                    <li title="message"><a href="#"><i class="fa fa-commenting-o"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#"><?php echo $value->hobbyName; ?></a></h6>
                                <h5><?php echo $value->firstName; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                <!-- <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div> -->
                </div>
            </div>
        </div>
    </section>
