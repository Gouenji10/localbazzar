<?php 

/**
 * 
 */
class Profile extends Front_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('profile_m');
		if(!$this->ion_auth->logged_in()){
			redirect('/'); 
		}
	}

	public function index(){
		$id=$this->session->userdata('user_id');
		$data=$this->profile_m->getOne(config('users'),array('id'=>$id));
		$metaData=$this->profile_m->getOne(config('tbl_user_meta'),array('user_id'=>$id));
		$this->template
		->set('title','Dashboard')
		->set_layout('homepage')
		->set('userData',$data)
		->set('userMeta',$metaData)
		->set('page','Dashboard')
		->build('index');
		
	}
	public function userInfoUpdate($id){
		$this->form_validation->set_rules('first_name','First Name','required');
		$this->form_validation->set_rules('last_name','Last Name','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('zone','Zone','required');
		$this->form_validation->set_rules('district','District','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('address','Address','required');

		if($this->input->is_ajax_request()){
			if($this->form_validation->run()==true){
				$data=array(
					'first_name'=>$this->input->post('first_name'),
					'last_name'=>$this->input->post('last_name'),
					'phone'=>$this->input->post('phone'),
				);
				$metaData=array(
					'user_id'=>$id,
					'zone'=>$this->input->post('zone'),
					'district'=>$this->input->post('district'),
					'city'=>$this->input->post('city'),
					'address'=>$this->input->post('address'),
					'facebook'=>$this->input->post('facebookUrl'),
					'twitter'=>$this->input->post('twitterUrl')
				);
				if($this->profile_m->getOne(config('tbl_user_meta'),array('user_id'=>$id))){
					
					if( $this->profile_m->update(config('tbl_users'),$data,array('id'=>$id)) && $this->profile_m->update(config('tbl_userMeta'),$metaData,array('user_id'=>$id))){
						echo "success";
						exit();
					}
				}else{
					if( $this->profile_m->update(config('tbl_users'),$data,array('id'=>$id)) && $this->profile_m->insert(config('tbl_user_meta'),$metaData)){
						echo 'success';
						exit();
					}
				}
			}else{
				echo validation_errors();
				exit();
			}
		}
	}
}
