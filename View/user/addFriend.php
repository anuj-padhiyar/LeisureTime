<?php $users = $this->getUsers(); ?>

<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i></li>
                            <li>welcome to leisure time</li>
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
    <!-- Hero Section End -->

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

  
                    <div class="modal fade" id="myModal" role="dialog">
                      <div class="modal-dialog">
    
    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   
                                 </div>
                                <div class="modal-body">
                                
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="people-nearby">
              
                                                <div class="nearby-user">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-2">
                                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="user" class="profile-photo-lg">
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                                <h5><a href="#" class="profile-link">Sophia Page</a></h5>
                                                                    <p>Software Engineer</p>
                                                                    <p class="text-muted">500m away</p>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4">
                                                        <button class="btn btn-success btn-sm ">Attempt</button>
                                                        <button class="btn btn-danger btn-sm" style="float:right;">Denied</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    	                                </div>
	                                </div>


                                </div>
                                <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                 </div>
                            </div>
      
                         </div>
                     </div>
  
                </div>
                <?php foreach($users->getData() as $key=>$user): ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="Skin/img/product/product-6.jpg">
                                <ul class="product__item__pic__hover">
                                    <li title="friend request"><a href="#"><i class="fa fa-user-circle"></i></a></li>
                                    <li title="message"><a href="#"><i class="fa fa-commenting-o"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#"><?php echo $user->hobbyId; ?></a></h6>
                                <h5><?php echo $user->firstName; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
                </div>
            </div>
        </div>
    </section>
 