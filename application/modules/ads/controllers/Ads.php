<?php

/**
 *
 */
class Ads extends Front_Controller
{
	function __construct()
	{
		parent::__construct();
		add_hook('additional_style','ads_js',$this,'ads_css',array());
		add_hook('additional_script','ads_js',$this,'ads_js',array());
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
		$module_welcome = Modules::load('welcome');
		if(! $this->ion_auth->logged_in()){
			$alert_data=serialize(array(
				'title'=>'Hmm..?',
				'text'=>'Looks like you are not logged in.Please login to post your ad.',
				'icon'=>'error',
				'confirm_btn'=>'login Now',
				'url'=>base_url(),
				'time'=>1000
			));
			add_hook('alert_script','alert_function',$module_welcome,'alert_function',array('with_confirmation',$alert_data));
		}else{
			$module_welcome->check_user_status();
		}
		$categories=$this->getCategories();
		$this->template
		->set('title','title here')
		->set_layout('homepage')
		->set('categories',$categories)
		->set('page','addListing')
		->build('add');
	}

	public function saveAd(){

		if($this->input->is_ajax_request()){
			$this->form_validation->set_rules('category','Categories','required');
			$this->form_validation->set_rules('sub_category','Sub Categories','required');
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('expiryDay','Expiry Duration','required');
			$this->form_validation->set_rules('price','Price','required');
			$this->form_validation->set_rules('zone','Zone','required');
			$this->form_validation->set_rules('city','City','required');
			$this->form_validation->set_rules('address','Address','required');
			$this->form_validation->set_rules('phone','Phone','required');

			if($this->form_validation->run()==true){
				// for images
				$countfiles = count($_FILES['images']['name']);
				$images=array();
				for($i=0;$i<$countfiles;$i++){
					if(!empty($_FILES['images']['name'][$i])){
						$file_name = $_FILES['images']['name'][$i];
						$tmp = explode('.', $file_name);
						$type = end($tmp);
					    $base64 = 'data:image/' . $type . ';base64,' . base64_encode(file_get_contents($_FILES["images"]["tmp_name"][$i]));
						$images[]=$base64;
					}
				}
				$form_data=$this->input->post();
				$form_data=array_push($form_data,$images);
				$data=array(
					'category'=>$this->input->post('category'),
					'sub_category'=>$this->input->post('sub_category'),
					'title'=>$this->input->post('title') ,
					'price_type'=>$this->input->post('priceType') ,
					'price'=>$this->input->post('price') ,
					'zone'=> $this->input->post('zone'),
					'city'=>$this->input->post('city') ,
					'details'=> serialize($form_data)
				);
				if($this->ads_m->insert(config('tbl_ads'),$data)){
					echo"success";
					exit();
				}else{
					echo "errors";
					exit();
				}

			}else{
				echo validation_errors();
				exit();
			}
			exit();
		}
		exit();
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
		$getSubCategories = $this->ads_m->getBy(config('tbl_sub_categories'),array('category_id'=>$id));
		$subCategory=array();
		foreach($getSubCategories as $subCategories){
			$subCategory[$subCategories->id] = $subCategories->name;
		}
		$data['subCategory']=$subCategory;
		echo $this->load->view('templates/subCategories',$data,TRUE);
		exit();
	}

	public function getFields($id){
		$getSlug=$this->ads_m->getOne(config('tbl_sub_categories'),array('id'=>$id));
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
