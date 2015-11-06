<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboards extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();

    	if(!$this->session->userdata('logged_user'))
    	{
      		redirect('/');
    	}
	}

     public function dashboard()
  	{
  		$this->load->model("User");
  		$this->load->model("Topic");
  		$user = $this->User->get_user_by_id($this->session->userdata('logged_user'));
    	$users = $this->User->get_all_users();
    	$topics = $this->Topic->get_all_topics();
      	$this->load->view('dashboard', array(
      		'user'=> $user,
      		'users'=> $users,
      		'topics'=> $topics
      		));
    }
  
}