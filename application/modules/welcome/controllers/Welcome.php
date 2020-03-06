<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller 
{
	function __construct(){
		parent::__construct();
		add_hook('add_css','home_css',$this,'home_css',array());
		add_hook('add_js','home_js',$this,'home_js',array());
		$this->load->model('welcome_m');
	}

	public function index()
	{
		if($this->ion_auth->logged_in()){
			if($this->ion_auth->is_admin()){
				// redirect to admin
			}
			else{
				$id=$this->session->userdata('user_id');
				$this->check_user_meta($id);
			}
		}
		$this->template
		->set('title','Welcome')
		->set_layout('homepage')
		->set('page','home')
		->build('welcome_message');
		
	}

	public function check_user_meta($id){
		$userData=$this->welcome_m->getOne(config('users'),array('id'=>$id));
		if($userData){
			if($userData['status']=='not_verified'){
				add_hook('add_js','alert_js',$this,'alert_js',array('Looks Like Your Account Is not Verified!','Yes,Verify Now!'));
			}
			elseif($userData['status']=='not_verified'){
				
			}
		}	
	}

	public function alert_js($text,$btn){
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				setTimeout(() => {
					swal.fire({
						title: "Hmmm...?",
						text: '<?php echo $text;?>',
						icon: 'warning',
						showConfirmButton:true,
						showCancelButton: true,
						confirmButtonColor: '#f85c70',
						cancelButtonColor: '#d33',
						confirmButtonText:'<?php echo $btn; ?>'
					}).then((result) => {
						if (result.value) {
							window.location.href = "<?php echo base_url('profile');?>";				
						}
					}); 

				}, 10000);
				
			});
		</script>
		<?php
	}

	public function home_js(){
		echo js('waypoints.min.js'); 
		echo js('jquery.counterup.min.js');
		?>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.counter-wrap-layout1').find('.counter').counterUp({
			        delay: 10,
			        time: 1000
			    });
			});
		</script>
		
		<?php		
	}
}
