<?php $user = $this->getUser();?>
<?php $userRequest = $this->getUserRequest()->getAllRequest($user->userId); ?>
<?php //echo "<pre>"; print_r($userRequest); die; ?>

<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i><?php echo $user->emailId; ?></li>
                            <li>welcome to leisure time</li><?php echo ' ' . $user->firstName . ' ' . $user->lastName; ?>
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
                        <li><a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('home', 'User\Home',[],true); ?>').load()">Home</a></li>
                        <li><a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('friendList', 'User\AddFriend',[],true); ?>').load()">Add Friends</a></li>
                        <li><a href="javascript:void(0)" role="button" data-toggle="modal" data-target="#myModal">Friend Request</a></li>
                        <li><a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('profile', 'User\Profile',[],true); ?>').load()">Profile</a></li>
                        <li><a href="javascript:void(0)" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('logout', 'User\Profile',[],true); ?>').load()">Log Out</a></li>
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

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?php if($userRequest): ?>
                <?php foreach($userRequest as $key=>$request): ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="people-nearby">
                                    <div class="nearby-user">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                                <img src="<?php echo $request->getUserPicture(); ?>" alt="user" class="profile-photo-lg">
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                    <h5><?php echo $request->getUserName(); ?></h5>
                                                        <!-- <p>Cricket</p> -->
                                                        <!-- <p class="text-muted">500m away</p> -->
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <button class="btn btn-success btn-sm " onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('acceptRequest','user\Profile',['userId'=>$request->userId,'requestId'=>$request->requestId,'userRequestId'=>$request->userRequestId]); ?>').load();">Attempt</button>
                                                <button class="btn btn-danger btn-sm" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('rejectRequest','user\Profile',['userRequestId'=>$request->userRequestId]); ?>').load();" style="float:right;">Denied</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No Request</p>
            <?php endif; ?>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>