<!DOCTYPE html>
<html class="no-js" lang=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Local Bazzar | <?php echo $title;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php echo css('bootstrap.min.css');?>
    <!-- Icons -->
    <?php echo css('icons.css');?>
    <!-- website Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700&display=swap" rel="stylesheet">
     <!-- Magnific Popup CSS -->
    <?php echo css('magnific-popup.css');?>
    <!-- animatecss -->
    <?php echo css('animate.min.css'); ?>
    <!-- Owl Carousel CSS -->
    <?php echo css('owl.carousel.min.css');?>
    <?php echo css('owl.theme.default.min.css');?>
    <!-- Site Stylesheet -->
    <?php echo css('app.css');?>
    <?php apply_hook('add_css');?>
    <?php echo css('style.css');?>

    <!-- Google Web Fonts -->
    <!-- <script type="text/javascript" charset="UTF-8" src="./js/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="./js/util.js"></script> -->
</head>

<body class="sticky-header <?php echo $page!=''?$page:'';?>">
    <header class="header">
        <div id="rt-sticky-placeholder" style="height: 87px;"></div>
        <div id="header-menu" class="header-menu menu-layout1 pd-x-20 rt-sticky">
            <div class="container-fluid">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a href="#" class="temp-logo">
                                <img src="<?php echo img('main-logo.png',true);?>" alt="logo" class="img-fluid">
                            </a>
                            <a href="#" class="sticky-logo">
                                <img src="<?php echo img('logo-dark.png',true);?>" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 d-flex justify-content-end">
                        <nav id="dropdown" class="template-main-menu" style="display: block;">
                            <ul>
                                <li><a href="<?php echo base_url();?>">Home</a></li>
                                <li><a href="<?php echo base_url('ads');?>">Browse Ads</a></li>
                                <li>
                                    <a href="#" class="has-dropdown">Ads Type</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Sell</a></li>
                                        <li><a href="#">Buy</a></li>
                                        <li><a href="#">Exchange</a></li>
                                        <li><a href="#">Jobs</a></li>
                                        <li><a href="#">To-Let</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-end">
                        <div class="header-action-layout1">
                            <ul>
                                <?php if(!$this->ion_auth->logged_in()): ?>
                                <li class="header-login-icon">
                                    <a href="#"class="color-light login-popup" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login/Register" id="showFilePanel">
                                        <i class="fa fa-user"></i>
                                    </a>
                                </li>
                                <?php else: ?>
                                    <li class="custom-dropdown-menu">
                                        <a href="<?php echo base_url();?>" class="has-dropdown">MyAccount</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo base_url('profile');  ?>">Dashboard</a></li>
                                            <li><a href="#">My Listings</a></li>
                                            <li><a href="#">Favourites</a></li>
                                            <li><a href="#">Account Details</a></li>
                                            <li><a href="<?php echo base_url('auth/logout');?>">Logout</a></li>
                                        </ul>
                                    </li>
                                <?php endif; ?>
                                <li class="header-btn">
                                    <a href="<?php echo base_url('ads/addAd');?>" class="item-btn"><i class="fa fa-plus-circle"></i>Post Your Ad</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Sign In Popup -->
    <div class="login-wrapper"></div>
    <div class="login-container dismiss myaccount-login-form">        
        <!-- login form -->
        <div class="form-box" id="login-form">
            <div class="login_top">
                <h3 class="item-title">My Account</h3>
                <div class="close-cart">
                    <a href="#" class="closeFilePanel" >
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>    
                </div>
                
            </div>
            <?php echo form_open('auth/login',['id'=>'scLoginForm']) ?>
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" class="form-control" name="identity" id="login-username" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password" id="login-password" placeholder="Enter Your Password">
                </div>
                <div class="form-group">
                    <a href="#" class="forgot-password">Forgot your password?</a>
                </div>
                <div class="form-group">
                    <input type="submit" class="submit-btn" value="Login">
                </div>
                
                <div class="form-group text-center">
                    <a href="#" class="forgot-password" id="openRegisterForm">New To Store? Signup Now</a>
                </div>
            <?php echo form_close();?>
        </div>
        <!--end of login form -->
        <!-- Register form -->
        <div class="form-box" id="registerForm">
            <div class="login_top">
                <h3 class="item-title">Create Account</h3>
                <div class="close-cart">
                    <a href="#" class="closeFilePanel" >
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>    
                </div>
                
            </div>
            <?php echo form_open('auth/create_user',['id'=>'scRegisterForm']) ?>
                <div class="form-group">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Your Full Name">
                </div>
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Your Phone Number">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
                </div>
                <div class="form-group">
                    <input type="submit" class="submit-btn" value="Register">
                </div>
                
                <div class="form-group text-center">
                    <a href="#" class="forgot-password" id="openLoginForm">Have an Account? Login</a>
                </div>
            <?php echo form_close();?>
        </div>
    </div>