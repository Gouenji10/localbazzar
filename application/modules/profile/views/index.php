<!--=====================================-->
<!--=        Account Page Start      	=-->
<!--=====================================-->
<section class="section-padding-equal-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar-break-sm sidebar-widget-area mt-0">
                <div class="widget-bottom-margin widget-account-menu widget-light-bg">
                    <h3 class="widget-border-title">Menu</h3>
                    <ul class="nav nav-tabs flex-column" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#dashboard" role="tab" aria-selected="true">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#my-listing" role="tab" aria-selected="false">My Listings</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#store" role="tab" aria-selected="false">Store</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#favourite" role="tab" aria-selected="false">Favourites</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#accout-detail" role="tab" aria-selected="false">Account details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>" role="tab" aria-selected="false">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                        <div class="myaccount-dashboard light-shadow-bg">
                            <div class="light-box-content">
                                <div class="media-box">
                                    <div class="item-img">
                                        <img src="<?php echo img('author/avatar.jpg',true);?>" alt="avatar">
                                    </div>
                                    <div class="item-content">
                                        <h3 class="item-title"><?php echo $userData['first_name'];?> <?php echo $userData['last_name'];?></h3>
                                        <div class="item-email"><span>Email: </span><?php echo $userData['email'];?></div>
                                        <div class="item-email"><span>Phone: </span><?php echo $userData['phone'];?></div>
                                    </div>
                                </div>
                                <div class="static-report">
                                    <h3 class="report-title">Membership Report</h3>
                                    <div class="report-list">
                                        <div class="report-item">
                                            <label>Status</label>
                                            <div class="item-value">
                                                <?php if($userData['status']=='not_verified'):?>
                                                    <a href="#" class="verify-btn"><i class="sl sl-icon-close"></i> &nbsp; Not Verified</a>
                                                <?php elseif($userData['status']=='verified'):  ?>
                                                    <a href="#" class="verified-btn"><i class="sl sl-icon-check"></i>&nbsp; Verified</a> 
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                    <?php if($userData['status']=='not_verified'):?>
                                    <div class="mt-4">
                                        <h4>To Verify Your Account:</h4>
                                        <p>
                                            <i class="fa fa-chevron-right"></i> Please confirm if you can send SMS from <?php echo $userData['phone'];?> , else change number before proceeding.<br>
                                            <i class="fa fa-chevron-right"></i> Please SMS the 6 digit code <b><?php echo $userData['activation_code'];?></b> to our offical phone number: +9779864573650 .<br>
                                            <i class="fa fa-chevron-right"></i> Our Admin will confirm your SMS and verify your account in an instant.
                                        </p>    
                                    </div>
                                    <?php elseif($userData['status']=='verified'):  ?>
                                    <div class="report-list">
                                        <div class="report-item">
                                            <label>Posted Ads</label>
                                            <div class="item-value">
                                                0<!-- TODO:: How much ad user has posted  -->
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="my-listing" role="tabpanel">
                        You do not have any ads.
                        <!-- <div class="myaccount-listing">
                            <div class="list-view-layout1">
                                <div class="product-box-layout3">
                                    <div class="item-img">
                                        <a href="single-product1.html"><img src="media/product/product19.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="single-product1.html">Galaxy Note</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>3 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New Jersey, Cape May</li>
                                                <li><i class="far fa-eye"></i>86 Views</li>
                                            </ul>
                                            <ul class="item-condition">
                                                <li><span>Condition:</span> New</li>
                                                <li><span>Brand:</span> Other Brand</li>
                                            </ul>
                                            <div class="btn-group">
                                                <a href="#">Promote</a>
                                                <a href="#">Edit</a>
                                                <a href="#">Delete</a>
                                            </div>
                                        </div>
                                        <div class="item-right">
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                1,240
                                            </div>
                                            <div class="item-btn">
                                                <a href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-layout1">
                            <div class="btn-prev disabled">
                                <a href="#"><i class="fas fa-angle-double-left"></i>Previous</a>
                            </div>
                            <div class="page-number">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                            </div>
                            <div class="btn-next">
                                <a href="#">Next<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div> -->
                    </div>
                    <!-- <div class="tab-pane fade" id="store" role="tabpanel">
                        <div class="light-shadow-bg post-ad-box-layout1 myaccount-store-settings">
                            <div class="light-box-content">
                                <form action="#">
                                    <div class="post-section store-banner">
                                        <div class="post-ad-title">
                                            <i class="far fa-image"></i>
                                            <h3 class="item-title">Store Images</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Store Banner
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <div class="store-banner-wrapper">
                                                        <div class="banenr-img">
                                                            <img src="media/figure/store-banner.jpg" alt="Store Banner">
                                                            <div class="media-action">
                                                                <a href="#" class="media-add"><i class="fas fa-plus"></i></a>
                                                                <a href="#" class="media-delete"><i class="far fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="alert alert-danger">
                                                            Recommended image size to (1180x300)px, Maximum file size 3 MB, Allowed image type (png, jpg, jpeg)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Store Logo
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <div class="store-banner-wrapper">
                                                        <div class="banenr-img">
                                                            <img src="media/figure/store10.png" alt="Store Banner">
                                                            <div class="media-action">
                                                                <a href="#" class="media-add"><i class="fas fa-plus"></i></a>
                                                                <a href="#" class="media-delete"><i class="far fa-trash-alt"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="alert alert-danger">
                                                            Recommended image size to (180x140)px, Maximum file size 3 MB, Allowed image type (png, jpg, jpeg)
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-section store-schedule">
                                        <div class="post-ad-title">
                                            <i class="far fa-calendar"></i>
                                            <h3 class="item-title">Store Schedule</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Opening Hours
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <div class="form-check form-radio-btn">
                                                        <input class="form-check-input" type="radio" id="exampleRadios1" name="exampleRadios1" value="new">
                                                        <label class="form-check-label" for="exampleRadios1">
                                                            Always open
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-radio-btn">
                                                        <input class="form-check-input" type="radio" id="exampleRadios2" name="exampleRadios1" value="used">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                            Select Opening Hours
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-section store-information">
                                        <div class="post-ad-title">
                                            <i class="fas fa-folder-open"></i>
                                            <h3 class="item-title">Store Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Id
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="123" class="form-control" name="id" id="store-id" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Name
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="Saymon" class="form-control" name="name" id="store-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Slogan
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="ok very good" class="form-control" name="slogan" id="store-slogan">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Email
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="email" value="ok@gmail.com" class="form-control" name="email" id="store-email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Email
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="123456" class="form-control" name="phone" id="store-phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Website
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="https://www.radiustheme.com" class="form-control" name="website" id="store-website">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Address
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <textarea name="address" class="form-control textarea" id="address" cols="30" rows="2">https://www.radiustheme.com</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Description
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <textarea name="discription" class="form-control textarea" id="discription" cols="30" rows="6">https://www.radiustheme.com</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Socials
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group store-social">
                                                    <input type="text" value="https://www.radiustheme.com" class="form-control" name="facebook" id="store-facebook" placeholder="Facebook">
                                                    <input type="text" class="form-control" name="twitter" id="store-twitter" placeholder="Twitter">
                                                    <input type="text" class="form-control" name="youtube" id="store-youtube" placeholder="Youtube">
                                                    <input type="text" class="form-control" name="linkedin" id="store-linkedin" placeholder="Linkedin">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">

                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="submit" class="submit-btn" value="Update Store">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->
                    <div class="tab-pane fade" id="favourite" role="tabpanel">
                        <div class="myaccount-listing">
                            <!-- <div class="list-view-layout1">
                                <div class="product-box-layout3">
                                    <div class="item-img">
                                        <a href="single-product1.html"><img src="media/product/product19.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="single-product1.html">Galaxy Note</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>3 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New Jersey, Cape May</li>
                                                <li><i class="far fa-eye"></i>86 Views</li>
                                            </ul>
                                            <ul class="item-condition">
                                                <li><span>Condition:</span> New</li>
                                                <li><span>Brand:</span> Other Brand</li>
                                            </ul>
                                            <div class="btn-group">
                                                <a href="#">Remove from Favourites</a>
                                            </div>
                                        </div>
                                        <div class="item-right">
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                1,240
                                            </div>
                                            <div class="item-btn">
                                                <a href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-view-layout1">
                                <div class="product-box-layout3">
                                    <div class="item-img">
                                        <a href="single-product1.html"><img src="media/product/product20.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="single-product1.html">China Branded Bags</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>3 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New Jersey, Cape May</li>
                                                <li><i class="far fa-eye"></i>86 Views</li>
                                            </ul>
                                            <ul class="item-condition">
                                                <li><span>Condition:</span> New</li>
                                                <li><span>Brand:</span> Other Brand</li>
                                            </ul>
                                            <div class="btn-group">
                                                <a href="#">Remove from Favourites</a>
                                            </div>
                                        </div>
                                        <div class="item-right">
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                1,240
                                            </div>
                                            <div class="item-btn">
                                                <a href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-view-layout1">
                                <div class="product-box-layout3">
                                    <div class="item-img">
                                        <a href="single-product1.html"><img src="media/product/product21.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="single-product1.html">Ultra HD Laptops</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>3 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New Jersey, Cape May</li>
                                                <li><i class="far fa-eye"></i>86 Views</li>
                                            </ul>
                                            <ul class="item-condition">
                                                <li><span>Condition:</span> New</li>
                                                <li><span>Brand:</span> Other Brand</li>
                                            </ul>
                                            <div class="btn-group">
                                                <a href="#">Remove from Favourites</a>
                                            </div>
                                        </div>
                                        <div class="item-right">
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                1,240
                                            </div>
                                            <div class="item-btn">
                                                <a href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-view-layout1">
                                <div class="product-box-layout3">
                                    <div class="item-img">
                                        <a href="single-product1.html"><img src="media/product/product22.jpg" alt="Product"></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="single-product1.html">Kids Toy Bundle</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="far fa-clock"></i>3 months ago</li>
                                                <li><i class="fas fa-map-marker-alt"></i>New Jersey, Cape May</li>
                                                <li><i class="far fa-eye"></i>86 Views</li>
                                            </ul>
                                            <ul class="item-condition">
                                                <li><span>Condition:</span> New</li>
                                                <li><span>Brand:</span> Other Brand</li>
                                            </ul>
                                            <div class="btn-group">
                                                <a href="#">Remove from Favourites</a>
                                            </div>
                                        </div>
                                        <div class="item-right">
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                1,240
                                            </div>
                                            <div class="item-btn">
                                                <a href="#">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="pagination-layout1">
                            <div class="btn-prev disabled">
                                <a href="#"><i class="fas fa-angle-double-left"></i>Previous</a>
                            </div>
                            <div class="page-number">
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                            </div>
                            <div class="btn-next">
                                <a href="#">Next<i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div> -->
                    </div>
                    
                    <div class="tab-pane fade" id="accout-detail" role="tabpanel">
                        <div class="light-shadow-bg post-ad-box-layout1 myaccount-store-settings myaccount-detail">
                            <div class="light-box-content">
                                <?php echo form_open('profile/userInfoUpdate/',array('id'=>'userInfoUpdate','data-userid'=>$userData['id']));?>
                                    <div class="post-section basic-information">
                                        <div class="post-ad-title">
                                            <i class="fa fa-user"></i>
                                            <h3 class="item-title">Basic Information</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    First Name
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $userData['first_name'];?>" class="form-control" name="first_name" placeholder="Your First Name...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Last Name
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $userData['last_name'];?>" class="form-control" name="last_name" placeholder="Your Last Name...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Email
                                                    <span>*</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="email" value="<?php echo $userData['email'];?>" class="form-control" name="email"disabled="disabled" placeholder="Your Email..">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Phone
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $userData['phone'];?>" class="form-control" name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Facebook URL
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $userMeta['facebook'];?>" class="form-control" name="facebookUrl" placeholder="Facebook Link...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Twitter URL
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $userMeta['twitter']; ?>" class="form-control" name="twitterUrl" placeholder="Twitter Link...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-section location-detail">
                                        <div class="post-ad-title">
                                            <i class="fa fa-map-marker"></i>
                                            <h3 class="item-title">Location</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Zone
                                                    <span>*</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <select class="form-control select-box" name="zone">
                                                        <option value="">Select Your Zone</option>
                                                        <option value="Mechi" <?php echo $userMeta['zone']=='Mechi'?'selected':'';?>>Mechi</option>
                                                        <option value="Koshi" <?php echo $userMeta['zone']=='Koshi'?'selected':'';?>>Koshi</option>
                                                        <option value="Sagarmatha" <?php echo $userMeta['zone']=='Sagarmatha'?'selected':'';?>>Sagarmatha</option>
                                                        <option value="Janakpur" <?php echo $userMeta['zone']=='Janakpur'?'selected':'';?>>Janakpur</option>
                                                        <option value="Bagmati" <?php echo $userMeta['zone']=='Bagmati'?'selected':'';?>>Bagmati</option>
                                                        <option value="Narayani" <?php echo $userMeta['zone']=='Narayani'?'selected':'';?>>Narayani</option>
                                                        <option value="Gandaki" <?php echo $userMeta['zone']=='Gandaki'?'selected':'';?>>Gandaki</option>
                                                        <option value="Lumbini" <?php echo $userMeta['zone']=='Lumbini'?'selected':'';?>>Lumbini</option>
                                                        <option value="Dhaulagiri" <?php echo $userMeta['zone']=='Dhaulagiri'?'selected':'';?>>Dhaulagiri</option>
                                                        <option value="Rapti" <?php echo $userMeta['zone']=='Rapti'?'selected':'';?>>Rapti</option>
                                                        <option value="Karnali" <?php echo $userMeta['zone']=='Karnali'?'selected':'';?>>Karnali</option>
                                                        <option value="Bheri" <?php echo $userMeta['zone']=='Bheri'?'selected':'';?>>Bheri</option>
                                                        <option value="Seti" <?php echo $userMeta['zone']=='Seti'?'selected':'';?>>Seti</option>
                                                        <option value="Mahakali" <?php echo $userMeta['zone']=='Mahakali'?'selected':'';?>>Mahakali</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    District
                                                    <span>*</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $userMeta['district'] ;?>" class="form-control" name="district" placeholder="Your  District...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    City
                                                    <span>*</span>
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="text" value="<?php echo $userMeta['city'] ;?>" class="form-control" name="city" placeholder="Your  City...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <label class="control-label">
                                                    Address
                                                </label>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <textarea name="address" class="form-control textarea" cols="30" rows="2" placeholder="Your Address..." value=""><?php echo $userMeta['address'];?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">

                                            </div>
                                            <div class="col-sm-9">
                                                <div class="form-group">
                                                    <input type="submit" class="submit-btn" value="Update Account">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>