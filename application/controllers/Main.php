<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->view('templates/footer');
	}




	public function register()
	{
		// Validation code
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('rpassword', 'Password Confirmation', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[photographers.email]');
		$this->form_validation->set_message('is_unique', 'The %s is already taken');
		//is_unique check the unique email value in users table
		// capthca
		//$this->form_validation->set_rules('g-recaptcha-response', 'recaptcha validation', 'required|callback_validate_captcha');
		//$this->form_validation->set_message('validate_captcha', 'Please check the the captcha form');

		if ($this->form_validation->run() == FALSE) {

			//error message
			$data = array(
				'error_message' => validation_errors()
			);

			$this->load->view('templates/header');
			$this->load->view('pages/register', $data);
			$this->load->view('templates/footer');
			/* echo '<div class="alert alert-danger alert-dismissible fade show"><strong>Error!</strong>';
			echo validation_errors();
			echo '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; */
		} else {


			$data = array(
				'studio_name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			); //insert code
			$this->db->insert('photographers', $data);
			unset($_POST);
			//success message.
			$link = "<a href='" . base_url() . "login' /><strong>Login Now<strong></a>";
			$data = array(
				'success_message' => 'Suuccessfully registered. Please',
				'link' => $link
			);

			$this->load->view('templates/header');
			$this->load->view('pages/register', $data);
			$this->load->view('templates/footer');
			/* echo '<div class="alert alert-success alert-dismissible fade show">
			<p>You have been successfully registered.Please login to go to your dashboard.</p>';
			echo "base_url()"."main/login";
			echo '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'; */
		}
	}




	public function login()
	{
		$this->load->model("photographer", "photographer");
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');


		if ($this->form_validation->run() == FALSE) {

			if (isset($this->session->userdata['logged_in'])) {
				$this->load->view('templates/header');
				$this->load->view('pages/dashboard');
				$this->load->view('templates/footer');
			} else {

				$data = array(
					'error_message' => 'Please enter a valid email and password'
				);
				$this->load->view('templates/header');
				$this->load->view('pages/login', $data);
				$this->load->view('templates/footer');
			}
		} else {

			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
			$result = $this->photographer->login($data);
			if ($result == TRUE) {

				$email = $this->input->post('email');
				$result = $this->photographer->read_user_information($email);
				if ($result != false) {
					$session_data = array(
						'email' => $result[0]->email,
						'name' => $result[0]->studio_name,
					);
					// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);

					/* 	$this->load->view('templates/header');
					$this->load->view('pages/dashboard');
					$this->load->view('templates/footer'); */
					redirect('/dashboard', 'refresh');
				}
			} else {
				$data = array(
					'error_message' => 'Invalid email or Password'
				);
				$this->load->view('templates/header');
				$this->load->view('pages/login', $data);
				$this->load->view('templates/footer');
			}
		}
	}

	// Logout from admin page
	public function logout()
	{
		// Removing session data
		$sess_array = array(
			'email' => ''
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		redirect('/', 'refresh');
	}
	public function search()
	{
		$city_id = $this->input->post('get_value');
		$skill = $this->input->post('skill');
		$city = $this->input->post('city');
		$data = array('skill' => $skill, 'city' => $city);
	
		redirect('/main/photographers?city='.$city.'&skill='.$skill.'&city_id='.$city_id, 'refresh');
		//$this->photographers($data);
		
	}
	public function photographers()
	{		
		$city= $this->input->get('city');
		$skill= $this->input->get('skill');
		$data=array('skill'=>$skill,'city'=>$city);
		$this->load->model('photographer'); // whatever you call it
		$data['photographers'] =  $this->photographer->get_photographers($skill,$city); //call model function
	    $this->load->view('templates/header');
		$this->load->view('listing', $data);
		$this->load->view('templates/footer');
	}

	public function profile()
	{	
		$id = $this->uri->segment(3);
		
		$this->load->model('photographer'); // load model
		$data['photographers'] =  $this->photographer->get_photographer_details($id); //call model function
	    $this->load->view('templates/header');
		$this->load->view('profile');
		$this->load->view('templates/footer');
	}
}
