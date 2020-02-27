<!--=====================================-->
<!--=        Inner Banner Start         =-->
<!--=====================================-->
<section class="inner-page-banner" data-bg-image="media/banner/banner1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>Post an Ad</h1>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Post an Ad</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=        Post Add Start    			=-->
<!--=====================================-->
<section class="section-padding-equal-70">
    <div class="container">
        <div class="post-ad-box-layout1 light-shadow-bg">
            <div class="post-ad-form light-box-content">                
                <?php echo form_open_multipart('ads/saveAd',array('id'=>'adsForm')); ?>
                    <div class="post-section post-category">
                        <div class="post-ad-title">
                            <i class="fa fa-tags"></i>
                            <h3 class="item-title">Select Category</h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">
                                    Category
                                    <span>*</span>
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <?php array_unshift($categories,'Select a Category'); ?>
                                    <?php echo form_dropdown('category',$categories,'',array('class'=>'form-control select-box','id'=>'categories')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="subCategory">
                            <div class="col-sm-3">
                                <label class="control-label">
                                    Sub Category
                                    <span>*</span>
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select class="form-control select-box">
                                        <option value="">Select a Sub Category</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-section post-information">
                        <div class="post-ad-title">
                            <i class="fa fa-folder-open"></i>
                            <h3 class="item-title">Ad Information</h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">
                                    Title
                                    <span>*</span>
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <?php echo form_input(array('type'=>"text",'class'=>"form-control",'name'=>"title",'placeholder'=>'Ad Title ...')); ?>                                    
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
                                    <?php echo form_textarea(array('name'=>"description",'class'=>"form-control textarea",'cols'=>"30",'rows'=>"8",'placeholder'=>'Ad Description ...')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">
                                    Ad Expires After
                                    <span>*</span>
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <?php $expiry=array(
                                        0=>'Select Expiry Duration',15=>'Two Weeks',30=>'One Month',60=>'Two Months',90=>'Three Months',120=>'Four Months'
                                    );?>
                                    <?php echo form_dropdown('expiryDay',$expiry,'',array('class'=>'form-control select-box')); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="productInformation"></div>                    

                    <div class="post-section post-img">
                        <div class="post-ad-title">
                            <i class="fa fa-image"></i>
                            <h3 class="item-title">Images</h3>
                        </div>
                        <div class="form-group">
                            <div class="img-gallery">
                                 <div class="input-field">
                                    <label class="active">Photos</label>
                                    <div class="input-images-1" style="padding-top: .5rem;"></div>
                                </div>
                                <div class="img-upload-instruction alert alert-danger">
                                    <p>Recommended image size to (870x493)px</p>
                                    <p>Image maximum size 3 MB.</p>
                                    <p>Allowed image type (png, jpg, jpeg).</p>
                                    <p>You can upload up to 5 images.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-section post-contact">
                        <div class="post-ad-title">
                            <i class="fa fa-user"></i>
                            <h3 class="item-title">Contact Details</h3>
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
                                    <?php $zones =array('Select Your Zone','Mechi','Koshi','Sagarmatha','Janakpur','Bagmati','Narayani','Gandaki','Lumbini','Dhaulagiri','Rapti','Karnali','Bheri','Seti','Mahakali' ); ?>
                                                    
                                    <?php echo form_dropdown('zone',$zones,'',array('class'=>'form-control select-box')); ?>
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
                                    <?php echo form_input(array('name'=>'district','class'=>'form-control','type'=>'text','placeholder'=>'Your District ...')); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">
                                    City
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <?php echo form_input(array('name'=>'city','type'=>'text','class'=>'form-control','placeholder'=>'Your City ...')); ?>
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
                                    <textarea name="address" class="form-control textarea" cols="30" rows="2" placeholder="Your Address ..."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">
                                    Contact Number
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Your Contact Number ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="submit" class="submit-btn" value="Submit Listing">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</section>

