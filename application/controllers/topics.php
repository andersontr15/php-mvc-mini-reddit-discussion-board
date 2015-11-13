<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics extends CI_Controller {

	public function __construct()
  	{
  		parent::__construct();

    	if(!$this->session->userdata('logged_user'))
    	{
      		redirect('/');
    	}
	}

	public function add_topic()
	{
		$this->load->model("Topic");
		$topic = $this->Topic->add_topic($this->input->post());
		redirect('/dashboard');
	}

	public function add_message()
	{
		$this->load->model("Topic");
		$this->Topic->add_message($this->input->post());
		redirect('/dashboard');
	}

	public function edit($id)
	{
		$this->load->model("Topic");
		$topic = $this->Topic->show_topic($id);
		$this->load->view("edittopic", array("topic"=>$topic));
	}

	public function delete_topic($id)
	{
		$this->load->model("Topic");
		$this->Topic->delete_topic($id);
		redirect('/dashboard');
	}

	public function add_post()
	{
		$this->load->model("Topic");
		$post = $this->Topic->add_post($this->input->post());
		redirect('/dashboard');
	}

	public function add_comment()
	{
		$this->load->model("Topic");
		$comment = $this->Topic->add_comment($this->input->post());
		redirect('/dashboard');
	}

	public function add_upvote()
	{
		$this->load->model("Topic");
		$this->Topic->add_upvote($this->input->post());
		redirect('/dashboard');
	}

	public function poke($id)
	{
		$this->load->model("Topic");
		$sessioned_id = $this->session->userdata('logged_user');
		$this->Topic->poke($sessioned_id, $id);
		redirect('/dashboard');
	}

	public function add_downvote()
	{
		$this->load->model("Topic");
		$this->Topic->add_downvote($this->input->post());
		redirect('/dashboard');
	}

	public function delete_post($id)
	{
		$this->load->model("Topic");
		$this->Topic->delete_post($id);
		redirect('/dashboard');
	}

	public function delete_comment($id)
	{
		$this->load->model("Topic");
		$this->Topic->delete_comment($id);
		redirect('/dashboard');
	}

	public function update($id)
	{
		$this->load->model("Topic");
		$post = $this->input->post();
		$this->Topic->update($post);
		redirect('/dashboard');
	}

	public function show_topic($id)
	{
		$this->load->model("Topic");
		$topic = $this->Topic->show_topic($id);
		$posts = $this->Topic->get_post_by_id($id);
		$comments = $this->Topic->get_all_comments();
		$upvotes = $this->Topic->get_all_upvotes();
		$downvotes = $this->Topic->get_all_downvotes();
		$this->load->view(
			"show", array(
			"topic"=>$topic, "posts"=> $posts,
			"comments"=>$comments,
			"upvotes"=> $upvotes,
			"downvotes"=>$downvotes
			));
	}

}