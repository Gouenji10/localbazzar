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
                <?php echo form_open_multipart(); ?>
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
                                    <?php echo form_dropdown('categories',$categories,'',array('class'=>'form-control select-box','id'=>'categories')); ?>
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
                                    <?php echo form_dropdown('expiry_day',$expiry,'',array('class'=>'form-control select-box')); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="productInformation">
                        
                    </div>                    
                    <div class="post-section post-img">
                        <div class="post-ad-title">
                            <i class="fa fa-image"></i>
                            <h3 class="item-title">Images</h3>
                        </div>
                        <div class="form-group">
                            <div class="img-gallery">
                                <div class="img-upload">
                                    <input type="file" id="file-upload" class="item-btn" name="avatar"accept="image/png, image/jpeg, image/jpg" multiple="multiple">
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
                                    State
                                    <span>*</span>
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <select class="form-control select-box">
                                        <option value="0">Select State</option>
                                        <option value="1">California</option>
                                        <option value="2">Florida</option>
                                        <option value="3">Hawaii</option>
                                        <option value="4">Indiana</option>
                                        <option value="5">Kansas</option>
                                        <option value="6">Michigan</option>
                                        <option value="7">New Jersey</option>
                                        <option value="8">New Mexico</option>
                                        <option value="9">New York</option>
                                        <option value="10">Pennsylvania</option>
                                        <option value="11">Texas</option>
                                        <option value="12">Washington</option>
                                        <option value="13">Wyoming</option>
                                    </select>
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
                                    <select class="form-control select-box">
                                        <option value="0">Select City</option>
                                        <option value="1">Los Angeles</option>
                                        <option value="2">LAX/LA Beaches</option>
                                        <option value="3">San Diego</option>
                                        <option value="4">San Jose</option>
                                        <option value="5">San Francisco</option>
                                        <option value="6">Fresno</option>
                                        <option value="7">Sacramento</option>
                                        <option value="8">Oakland</option>
                                        <option value="9">Bakersfield</option>
                                        <option value="10">Riverside</option>
                                        <option value="11">Eureka</option>
                                        <option value="12">Death Valley</option>
                                        <option value="12">Mammoth Lakes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">
                                    Zip Code
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" value="201301" class="form-control" name="zipcode" id="post-zip">
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
                                    <textarea name="address" class="form-control textarea" id="address" cols="30" rows="2">Melbourne</textarea>
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
                                    <input type="text" value="09988434436" class="form-control" name="phone" id="phone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="control-label">
                                    Whatsapp Number
                                </label>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <input type="text" value="09985434436" class="form-control" name="whatsapp" id="whatsapp">
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
                                    <input type="email" value="radiustheme@gmail.com" class="form-control" name="email" id="email">
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
                </form>
            </div>
        </div>
    </div>
</section>

