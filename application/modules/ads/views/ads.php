<!--=====================================-->
<!--=        Inner Banner Start         =-->
<!--=====================================-->
<section class="inner-page-banner" data-bg-image="<?php echo img('banner/banner1.jpg',true);?>">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumbs-area">
                    <h1>All Ads</h1>
                    <ul>
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li>All Ads</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=          Search Box Start         =-->
<!--=====================================-->
<section class="bg-accent">
    <div class="container">
        <div class="search-box-wrap-layout3">
            <div class="search-box-layout1">
                <form action="#">
                    <div class="row no-gutters">
                        <div class="col-lg-3 form-group">
                            <div class="input-search-btn search-location" data-toggle="modal" data-target="#modal-location">
                                <i class="fa fa-map-marker"></i>
                                <input type="text" class="form-control" placeholder="Enter Location">
                            </div>
                        </div>
                        <div class="col-lg-3 form-group">
                            <div class="input-search-btn search-category" data-toggle="modal" data-target="#modal-category">
                                <i class="fa fa-tags"></i>
                                <input type="text" class="form-control" placeholder="Enter Category">
                            </div>
                        </div>
                        <div class="col-lg-4 form-group">
                            <div class="input-search-btn search-keyword">
                                <i class="fa fa-text-width"></i>
                                <input type="text" class="form-control" placeholder="Enter Keyword here ..." name="keyword">
                            </div>
                        </div>
                        <div class="col-lg-2 form-group">
                            <button type="submit" class="submit-btn"><i class="fa fa-search"></i>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--=====================================-->
<!--=          Product Start         =-->
<!--=====================================-->
<section class="product-inner-wrap-layout1 bg-accent">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 sidebar-break-md sidebar-widget-area" id="accordion">
                <?php apply_hook('filters') ?>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="product-filter-heading">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="item-title">Showing 1–9 of 16 results</h2>
                        </div>
                        <div class="col-md-6 d-flex justify-content-md-end justify-content-center">
                            <div class="product-sorting">
                                <div class="ordering-controller">
                                    <button class="ordering-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                        Sort By
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">A to Z (title)</a>
                                        <a class="dropdown-item" href="#">Z to A (title)</a>
                                        <a class="dropdown-item" href="#">Data Added (oldest)</a>
                                        <a class="dropdown-item" href="#">Most Viewed</a>
                                        <a class="dropdown-item" href="#">Less Viewed</a>
                                        <a class="dropdown-item" href="#">Price (low to high)</a>
                                        <a class="dropdown-item" href="#">Price (high to low)</a>
                                    </div>
                                </div>
                                <div class="layout-switcher">
                                    <ul>
                                        <li>
                                            <a href="#" data-type="product-box-list" class="product-view-trigger">
                                                <i class="fa fa-th-list"></i>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a class="product-view-trigger" href="#" data-type="product-box-grid">
                                                <i class="fa fa-th-large"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-view" class="product-box-grid">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1 top-rated-grid">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>" class="item-trending"><img src="<?php echo img('product/product18.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Galaxy Note</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>New Jersey, Cape May</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                1,240
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3 top-rated-list">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>" class="item-trending"><img src="<?php echo img('product/product19.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Galaxy Note</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Condition:</span> New</li>
                                                    <li><span>Brand:</span> Other Brand</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>New Jersey, Cape May</li>
                                                    <li><i class="fa fa-eye"></i>86 Views</li>
                                                </ul>
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
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1 top-rated-grid">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>" class="item-trending"><img src="<?php echo img('product/product14.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">HD Camera 5100</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>Kansas, Hutchinson</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                1,780
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3 top-rated-list">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>" class="item-trending"><img src="<?php echo img('product/product23.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">HD Camera 5100</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Brand:</span> Other Brand</li>
                                                    <li><span>Condition:</span> New</li>
                                                    <li><span>Item Type:</span> Digital Camera</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>Kansas, Hutchinson</li>
                                                    <li><i class="fa fa-eye"></i>61 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    1,780
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product1.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">HD 27 inch Mac 1 year used only</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>Port Chester, New York</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                2,500
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product9.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">HD 27 inch Mac 1 year used only</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Brand:</span> Other Brand</li>
                                                    <li><span>Condition:</span> New</li>
                                                    <li><span>Item Type:</span> Digital Camera</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>Port Chester, New York</li>
                                                    <li><i class="fa fa-eye"></i>126 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    2,500
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product2.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">New Banded Smart Watch</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>Kansas, Emporia</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                47
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product10.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">New Banded Smart Watch</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Device Type:</span> Laptop</li>
                                                    <li><span>Condition:</span> New</li>
                                                    <li><span>Model:</span> ZX-4356</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, et dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>Kansas, Emporia</li>
                                                    <li><i class="fa fa-eye"></i>78 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    47
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>" class="item-trending"><img src="<?php echo img('product/product3.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">High quality brand new headphone</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>New York, Mineola</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                15
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>" class="item-trending"><img src="<?php echo img('product/product11.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">High quality brand new headphone</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Condition:</span> Used</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>New York, Mineola</li>
                                                    <li><i class="fa fa-eye"></i>40 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    15
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product4.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Running shoes imported from china</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>California, Bakersfield</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                36
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product12.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Running shoes imported from china</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Equipment Type:</span> Football</li>
                                                    <li><span>Condition:</span> New</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>California, Bakersfield</li>
                                                    <li><i class="fa fa-eye"></i>95 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    36
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product5.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Team Jersey available in reasonable price</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>New Jersey, Bloomfield</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                90
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product13.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Team Jersey available in reasonable price</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Equipment Type:</span> Fitness / gym</li>
                                                    <li><span>Condition:</span> New</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>New Jersey, Bloomfield</li>
                                                    <li><i class="fa fa-eye"></i>29 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    90
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product6.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Export quality bag pack wholesale min 100 pcs</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>Louisiana, Bogalusa</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                180
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product20.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Export quality bag pack wholesale min 100 pcs</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Condition:</span> New</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>Louisiana, Bogalusa</li>
                                                    <li><i class="fa fa-eye"></i>273 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    180
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product7.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Ultrabook 2018 core i7 with 16 GB RAM</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>Kansas, Abilene</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                1,300
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product21.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Ultrabook 2018 core i7 with 16 GB RAM</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Device Type:</span> Laptop</li>
                                                    <li><span>Condition:</span> New</li>
                                                    <li><span>Model:</span> ZX-4356</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>Kansas, Abilene</li>
                                                    <li><i class="fa fa-eye"></i>280 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    1,300
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product8.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Toy Bundle</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>New York, Brooklyn</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                230
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product22.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Toy Bundle</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Device Type:</span> Laptop</li>
                                                    <li><span>Condition:</span> New</li>
                                                    <li><span>Model:</span> ZX-4356</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                    <li><i class="fa fa-eye"></i>26 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    230
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product4.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Running shoes imported from china</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>California, Bakersfield</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                36
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product12.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Running shoes imported from china</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Equipment Type:</span> Football</li>
                                                    <li><span>Condition:</span> New</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>California, Bakersfield</li>
                                                    <li><i class="fa fa-eye"></i>95 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    36
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="product-grid-view">
                                <div class="grid-view-layout1">
                                    <div class="product-box-layout1">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product5.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="item-content">
                                            <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Team Jersey available in reasonable price</a><span>New</span></h3>
                                            <ul class="entry-meta">
                                                <li><i class="fa fa-clock-o"></i>4 months ago</li>
                                                <li><i class="fa fa-map-marker"></i>New Jersey, Bloomfield</li>
                                            </ul>
                                            <div class="item-price">
                                                <span class="currency-symbol">$</span>
                                                90
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-list-view">
                                <div class="list-view-layout1">
                                    <div class="product-box-layout3">
                                        <div class="item-img">
                                            <a href="<?php echo base_url('ads/single');?>"><img src="<?php echo img('product/product13.jpg',true);?>" alt="Product"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="item-content">
                                                <h3 class="item-title"><a href="<?php echo base_url('ads/single');?>">Team Jersey available in reasonable price</a><span>New</span></h3>
                                                <ul class="item-condition">
                                                    <li><span>Equipment Type:</span> Fitness / gym</li>
                                                    <li><span>Condition:</span> New</li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. In eu mi bibendum neque egestas…</p>
                                                <ul class="entry-meta">
                                                    <li><i class="fa fa-clock-o"></i>3 months ago</li>
                                                    <li><i class="fa fa-map-marker"></i>New Jersey, Bloomfield</li>
                                                    <li><i class="fa fa-eye"></i>29 Views</li>
                                                </ul>
                                            </div>
                                            <div class="item-right">
                                                <div class="item-price">
                                                    <span class="currency-symbol">$</span>
                                                    90
                                                </div>
                                                <div class="item-btn">
                                                    <a href="#">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-layout1">
                    <div class="btn-prev disabled">
                        <a href="#"><i class="fa fa-angle-double-left"></i>Previous</a>
                    </div>
                    <div class="page-number">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                    </div>
                    <div class="btn-next">
                        <a href="#">Next<i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>