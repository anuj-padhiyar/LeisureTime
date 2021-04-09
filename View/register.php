<section class="checkout spad">
    <div class="container">
        <div class="row"></div>
        <div class="checkout__form">
            <h4>Registration</h4>
            <form action="<?php echo $this->getUrl()->getUrl('register'); ?>" method="POST" id="registerForm" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>First Name<span>*</span></p>
                                    <input type="text" name="user[firstName]">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text" name="user[lastName]">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Set Password<span>*</span></p>
                            <input type="password" name="user[password]">
                        </div>
                        <div class="checkout__input">
                            <p>Confirm Password<span>*</span></p>
                            <input type="password" name="user[cnfPassword]">
                        </div>
                        <div class="checkout__input">
                            <p>Town/City<span>*</span></p>
                            <input type="text" name="user[city]">
                        </div>
                        <input id="imageUpload" type="file" name="profilePicture" placeholder="Photo" capture>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="email" name="user[email]">
                                </div>
                            </div>
                            <button type="button" onclick="leisure.setImageForm('registerForm','imageUpload');" class="site-btn" >Register</button>
                            <button type="button" onclick="leisure.setUrl('<?php echo $this->getUrl()->getUrl('login'); ?>').load()">Login</button>
                        </div>
                    </div> 
                </div>
            </form>
        </div>
    </div>
</section>