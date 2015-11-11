<?php

class User extends CI_Model {

	 public function register($post)
  	{	
    	$query = "INSERT INTO users (first_name, last_name, email, password, 
             created_at, updated_at)
              VALUES (?, ?, ?, ?, NOW(), NOW())";
    	$values = array($post['first_name'], $post['last_name'], 
              strtolower($post['email']), $post['password']);
    	return $this->db->query($query, $values);
  	}

    public function insert_new($post)
    {
      $query = "INSERT into users(first_name, last_name, email, password, created_at, updated_at)
      VALUES(?,?,?,?,NOW(),NOW())";
      $values = array($post['first_name'], $post['last_name'], strtolower($post['email']), $post['password']);
      return $this->db->query($query, $values);
    }


  	public function login($post)
  	{

    $query = "SELECT * FROM discussionboard.users WHERE email = ? AND password = ?";

    $values = array(strtolower($post['email']), $post['password']);

    return $this->db->query($query, $values)->row_array();

  	}

  	public function get_all_users()
  	{
  	$sessioned_user = $this->session->userdata('logged_user');
    $query = "SELECT users.id as id, first_name, last_name, email, created_at 
              FROM users WHERE id != $sessioned_user";

    return $this->db->query($query)->result_array();
  	}

    public function delete_user($id)
    {
       return $this->db->query("DELETE FROM users where users.id=?", $id);
    }

  	public function get_user_by_id($id)
  	{
    $query = "SELECT users.id as id, users.password, 
    pokes.user_id, pokes.poked_id, 
    pokes.created_at,pokes.updated_at,
    count(topics.counter) as topic_counter, 
    count(posts.counter) as post_counter, 
    count(comments.counter) as comment_counter, 
    count(pokes.counter) as poke_counter,
    topics.id, topics.user_id, first_name, 
    last_name, email, users.created_at
    FROM users 
    LEFT JOIN topics ON users.id = topics.user_id 
    LEFT JOIN posts ON users.id = posts.user_id
    LEFT JOIN pokes ON users.id = pokes.user_id
    LEFT JOIN comments ON users.id = comments.user_id
    WHERE users.id = ?";
    return $this->db->query($query, $id)->row_array();
  	}


    public function update($user)
    {
    $query = "UPDATE users 
              SET email=?, first_name=?, last_name=?, password=?
              WHERE users.email=?";
    $values = array($user['email'],
                    $user['first_name'], 
                    $user['last_name'], 
                    $user['password'],
                    $user['email']);
    return $this->db->query($query, $values);
    }

}