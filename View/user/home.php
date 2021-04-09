<?php $hobbies = $this->getHobbies(); ?>
<?php $user = $this->getUser(); ?>
<?php //echo "<pre>"; print_r($user); die; ?>

<!-- <div id="preloder">
    <div class="loader"></div>
</div>  -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i><?php echo $user->emailId; ?></li>
                            <li>welcome to leisure time</li><?php echo ' '.$user->firstName.' '.$user->lastName; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="javascript:void(0)"><img src="Skin/img/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('home','User\Home'); ?>').load()">Home</a></li>
                        <li><a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('friendList','user\AddFriend'); ?>').load()">Add Friends</a></li>
                
                        <li><a href="#" role="button" data-toggle="modal" data-target="#myModal">Friend Request</a></li> 
                        <li><a href="./myaccount.php">Profile</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header> 

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
                                <li><a href="#"><?php echo $hobby->hobbyName; ?></a></li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul> 
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <input type="text" placeholder="looking for a Hobby?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                </div> 
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