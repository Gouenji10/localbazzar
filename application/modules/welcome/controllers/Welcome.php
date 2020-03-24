<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller
{
	function __construct(){
		parent::__construct();
		add_hook('additional_script','home_script',$this,'home_script',array());
		$this->load->model('welcome_m');
	}

	public function index()
	{
		if($this->ion_auth->logged_in()){
			if($this->ion_auth->is_admin()){
				// redirect to admin
			}
			else{
				$this->check_user_status();
			}
		}
		$categories=$this->welcome_m->getAll(config('tbl_categories'));
		$this->template
		->set('title','Welcome')
		->set_layout('homepage')
		->set('page','home')
		->set('categories',$categories)
		->build('welcome_message');

	}

	public function check_user_status(){
		$id=$this->session->userdata('user_id');;
		$userData=$this->welcome_m->getOne(config('users'),array('id'=>$id));
		if($userData){
			if($userData['status']=='not_verified'){
				$alert_data=serialize(array(
					'title'=>'Hmm..?',
					'text'=>'Looks like your account is not verified.',
					'icon'=>'warning',
					'confirm_btn'=>'Verify Now',
					'url'=>base_url('profile'),
					'time'=>7000
				));
				add_hook('alert_script','alert_function',$this,'alert_function',array('with_confirmation',$alert_data));
			}
		}
	}

	public function alert_function($type,$data){
		$data=unserialize($data);
		if($type=='with_confirmation'){
			?>
				<script type="text/javascript">
					$(document).ready(function(){
						var data = '<?php echo json_encode($data);?>';
						alert_with_confirmation(data);
					});

				</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				$(document).ready(function(){
					var data = '<?php echo json_encode($data);?>';
					alert_without_confirmation(data);
				});

			</script>
		<?php
		}
	}

	public function home_script(){
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
