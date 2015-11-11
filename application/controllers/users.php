<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('new');
	}

	public function new_user()
	{
		$this->load->view('new');
	}

	public function insert_new()
	{
		$this->load->model("User");
		$user = $this->input->post();
		$this->User->insert_new($user);
		return redirect('/dashboards/dashboard');
	}

	public function signin(){
		$this->load->view('login');
	}

	public function register(){
		$this->load->library("form_validation");
		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "required|min_length[8]");
		$this->form_validation->set_rules("password_confirmation", "Password Confirmation", "required|matches[password]");

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/home');
		}
		else{
			$this->load->model("User");
			if(!$this->User->register($this->input->post())){
				$this->session->set_flashdata('errors', "An error has occured with the database");
				redirect('/home');
			}
			else{
				$this->session->set_flashdata('success', 'You are now registered!');
				redirect('/home');
			}
		}
	}

	public function login()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("password", "Password", "required");

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
			redirect('/home');
		}
		else
		{
			$this->load->model("User");
			$user = $this->User->login($this->input->post());
			if($user)
			{
				$this->session->set_userdata('logged_user', $user['id']);
				redirect('/dashboards/dashboard');
			}
			else
			{
				$this->session->set_flashdata('errors', "Invalid credentials!");
				redirect('/login');
			}
		}
	}

	public function welcome()
	{
		if(!$this->session->userdata('logged_user'))
		{
			$this->session->set_flashdata('errors', "You must be logged in!");
			redirect('/');
		}
		else
		{
			$user = $this->User->get_user_by_id($this->session->userdata('logged_user'));
			$this->load->view('welcome', array("user" => $user));
		}
	}

	public function show($id)
	{
		$this->load->model("User");
		$this->load->model("Topic");
		$user = $this->User->get_user_by_id($id);
		$this->load->view("user", array("user"=>$user));
	}

	public function delete($id)
	{
		$this->load->model("User");
		$user = $this->User->delete_user($id);
		redirect('/dashboards/dashboard');
	}

	public function edit_user($id)
	{
		$this->load->model("User");
		$user = $this->User->get_user_by_id($id);
		$this->load->view("edituser", array("user"=>$user));
	}

	public function update()
	{
		$this->load->model("User");
		$post = $this->input->post();
		$this->User->update($post);
		redirect('/dashboards/dashboard');
	}

	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}

//end of main controller