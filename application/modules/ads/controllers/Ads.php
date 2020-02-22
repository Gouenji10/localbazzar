<?php 

/**
 * 
 */
class Ads extends Front_Controller
{
	
	function __construct()
	{
		parent::__construct();
		add_hook('add_css','ads_js',$this,'ads_css',array());
		add_hook('add_js','ads_js',$this,'ads_js',array());
		add_hook('filters','listingFilter',$this,'listingFilter',array());
		$this->load->model('ads_m');
	}
	public function index(){
		$this->template
		->set('title','All Ads')
		->set_layout('homepage')
		->set('page','listing')
		->build('ads');
	}

	public function single(){
		$this->template
		->set('title','title here')
		->set_layout('homepage')
		->set('page','singleListing')
		->build('single');	
	}

	public function addAd(){
		$categories=$this->getCategories();
		$this->template
		->set('title','title here')
		->set_layout('homepage')
		->set('categories',$categories)
		->set('page','addListing')
		->build('add');
	}

	public function saveAd(){
		// Count total files
		$countfiles = count($_FILES['images']['name']);
		// Looping all files
		for($i=0;$i<$countfiles;$i++){
			if(!empty($_FILES['images']['name'][$i])){
				$file_name = $_FILES['images']['name'][$i];
				$tmp = explode('.', $file_name);
				$type = end($tmp);
			    $base64 = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents($_FILES["images"]["tmp_name"][$i]));
				echo "<img src=".$base64." style='width:50%;'>";
			}
		}
	}

	public function listingFilter(){
		echo $this->load->view('filters');
	}

	public function getCategories(){
		$getCategories = $this->ads_m->select('id,name')->getAll(config('tbl_categories'),null,0,array());
    	$category=array();
		foreach($getCategories as $categories){
			$category[$categories->id] = $categories->name;
		}		
    	return $category;
	}

	public function getSubCategories($id){
		$getSubCategories = $this->ads_m->getBy(config('tbl_subCategories'),array('categoryId'=>$id));
		$subCategory=array();
		foreach($getSubCategories as $subCategories){
			$subCategory[$subCategories->id] = $subCategories->name;
		}
		$data['subCategory']=$subCategory;
		echo $this->load->view('templates/subCategories',$data,TRUE);
		exit();
	}
	
	public function getFields($id){
		$getSlug=$this->ads_m->getOne(config('tbl_subCategories'),array('id'=>$id));
		$data = $this->load->view('templates/'.$getSlug['slug'],array(),TRUE);
		echo $data;
		exit();
	}

	public function ads_css(){
		echo css('image-uploader.css');
	}
	public function ads_js(){
		echo js('owl.carousel.min.js');
		echo js('image-uploader.js');
		?>
		<script type="text/javascript">
			$(function(){
			    /*-------------------------------------
			    Carousel slider initiation
			    -------------------------------------*/
			    $(".rc-carousel").each(function () 
			    {
			        var carousel = $(this),
			            loop = carousel.data("loop"),
			            Canimate = carousel.data("animate"),
			            items = carousel.data("items"),
			            margin = carousel.data("margin"),
			            stagePadding = carousel.data("stage-padding"),
			            autoplay = carousel.data("autoplay"),
			            autoplayTimeout = carousel.data("autoplay-timeout"),
			            smartSpeed = carousel.data("smart-speed"),
			            dots = carousel.data("dots"),
			            nav = carousel.data("nav"),
			            navSpeed = carousel.data("nav-speed"),
			            rXsmall = carousel.data("r-x-small"),
			            rXsmallNav = carousel.data("r-x-small-nav"),
			            rXsmallDots = carousel.data("r-x-small-dots"),
			            rXmedium = carousel.data("r-x-medium"),
			            rXmediumNav = carousel.data("r-x-medium-nav"),
			            rXmediumDots = carousel.data("r-x-medium-dots"),
			            rSmall = carousel.data("r-small"),
			            rSmallNav = carousel.data("r-small-nav"),
			            rSmallDots = carousel.data("r-small-dots"),
			            rMedium = carousel.data("r-medium"),
			            rMediumNav = carousel.data("r-medium-nav"),
			            rMediumDots = carousel.data("r-medium-dots"),
			            rLarge = carousel.data("r-large"),
			            rLargeNav = carousel.data("r-large-nav"),
			            rLargeDots = carousel.data("r-large-dots"),
			            rExtraLarge = carousel.data("r-extra-large"),
			            rExtraLargeNav = carousel.data("r-extra-large-nav"),
			            rExtraLargeDots = carousel.data("r-extra-large-dots"),
			            center = carousel.data("center"),
			            custom_nav = carousel.data("custom-nav") || "";
			        carousel.addClass('owl-carousel');
			        var owl = carousel.owlCarousel({
			            loop: loop ? true : false,
			            animateOut: Canimate,
			            items: items ? items : 1,
			            lazyLoad: true,
			            margin: margin ? margin : 0,
			            autoplay: autoplay ? true : false,
			            autoplayTimeout: autoplayTimeout ? autoplayTimeout : 1000,
			            smartSpeed: smartSpeed ? smartSpeed : 250,
			            dots: dots ? true : false,
			            nav: nav ? true : false,
			            navText: [
			                '<i class="fa fa-angle-left" aria-hidden="true"></i>',
			                '<i class="fa fa-angle-right" aria-hidden="true"></i>'
			            ],
			            navSpeed: navSpeed ? true : false,
			            center: center ? true : false,
			            responsiveClass: true,
			            responsive: {
			                0: {
			                    items: rXsmall ? rXsmall : 1,
			                    nav: rXsmallNav ? true : false,
			                    dots: rXsmallDots ? true : false
			                },
			                576: {
			                    items: rXmedium ? rXmedium : 2,
			                    nav: rXmediumNav ? true : false,
			                    dots: rXmediumDots ? true : false
			                },
			                768: {
			                    items: rSmall ? rSmall : 3,
			                    nav: rSmallNav ? true : false,
			                    dots: rSmallDots ? true : false
			                },
			                992: {
			                    items: rMedium ? rMedium : 4,
			                    nav: rMediumNav ? true : false,
			                    dots: rMediumDots ? true : false
			                },
			                1200: {
			                    items: rLarge ? rLarge : 5,
			                    nav: rLargeNav ? true : false,
			                    dots: rLargeDots ? true : false
			                },
			                1240: {
			                    items: rExtraLarge ? rExtraLarge : 5,
			                    nav: rExtraLargeNav ? true : false,
			                    dots: rExtraLargeDots ? true : false
			                }
			            },
			        });

			        if (custom_nav) {
			            var nav = $(custom_nav),
			                nav_next = $(".rt-next", nav),
			                nav_prev = $(".rt-prev", nav);

			            nav_next.on("click", function (e) {
			                e.preventDefault();
			                owl.trigger('next.owl.carousel');
			                return false;
			            });

			            nav_prev.on("click", function (e) {
			                e.preventDefault();
			                owl.trigger('prev.owl.carousel');
			                return false;
			            });
			        }
			    });
			});
			$(document).ready(function(){
				$('.singleloop').owlCarousel({
				    center: true,
				    loop:true,
				    dots:false,
				    nav:true,
				    items:2,
				    loop:true,
				    margin:10,
				    responsive:{
				        600:{
				            items:4,
				            nav:true,
				        }
				    }
				});

				$('.input-images-1').imageUploader();
			});
		</script>
		<?php 
	}
}

 ?>