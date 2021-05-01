<?php require_once "menu.php" ?>
<?php $hobbies = $this->getHobbies(); ?>
<?php //echo "<pre>"; print_r($hobbies->getData()); die; ?>

<!-- <div id="preloder">
    <div class="loader"></div>
</div>  -->

<section class="hero">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all"> 
                        <i class="fa fa-bars"></i>
                        <span>Hobbies</span>
                    </div> 
                    <ul>
                        <?php if($hobbies): ?>
                            <?php foreach($hobbies->getData() as $key=>$hobby): ?>
                                <li><a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('friendList', 'User\AddFriend',['h'=>$hobby->hobbyId]) ?>').load(); "><?php echo $hobby->hobbyName; ?></a></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul> 
                </div>
            </div>
            <div class="col-lg-9">
                <!-- <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="looking for a Hobby?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                </div>  -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block hero__item set-bg w-100" src="Skin/img/hero/banner.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block hero__item set-bg w-100" src="Skin/img/hero/banner.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block hero__item set-bg w-100 " src="Skin/img/hero/banner.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>            
            </div>
        </div>
    </div>
</section>
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Trending Hobbies</h2>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php if($hobbies): ?>
                <?php foreach($hobbies->getData() as $key=>$hobby): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="<?php echo $hobby->hobbyImage; ?>">
                                <img src="<?php echo $hobby->hobbyImage; ?>">
                                <ul class="featured__item__pic__hover">
                                    <li title="search more"><a href="addfriends.php"><i class="fa fa-search-plus"></i></a></li>
                                </ul>
                            </div>
                            <div class="featured__item__text">
                                <h5><?php echo $hobby->hobbyName; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>