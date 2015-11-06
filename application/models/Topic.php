<?php

class Topic extends CI_Model {


	   public function add_topic($post)
  	{	
  		$sessioned_user = $this->session->userdata('logged_user');
    	$query = "INSERT INTO topics (topic, description, category, 
            user_id, counter, created_at,updated_at)
              VALUES (?, ?, ?, ?, counter+1, NOW(), NOW())";
    	$values = array($post['topic'], $post['description'], 
              $post['category'], $sessioned_user);
    	return $this->db->query($query, $values);
  	}

    public function add_post($post)
    {
      $query = "INSERT INTO posts (post, topic_id, user_id, counter, created_at, updated_at)
                VALUES(?,?,?,counter+1, NOW(),NOW())";
      $values = array($post['post'], $post['topic_id'], $post['user_id']);
      return $this->db->query($query, $values);
    }

    public function add_message($post)
    {
      $query = "INSERT INTO messages (message, sender_id, receiver_id, created_at, updated_at) 
                VALUES (?,?,?,NOW(),NOW())";
      $values = array($post['message'], $post['id'], $post['user_id']);
      return $this->db->query($query, $values);
    }

    public function add_upvote($post)
    {
      $query = "INSERT INTO upvotes (user_id, post_id, created_at, updated_at, counter)
                VALUES(?,?,NOW(),NOW(),counter+1)";
      $values = array($post['user_id'], $post['post_id']);
      return $this->db->query($query, $values);
    }

    public function add_downvote($post)
    {
      $query = "INSERT INTO downvotes (user_id, post_id, created_at, updated_at, counter)
                VALUES(?,?,NOW(),NOW(),counter+1)";
      $values = array($post['user_id'], $post['post_id']);
      return $this->db->query($query, $values);
    }

    public function add_comment($comment)
    {
      $query = "INSERT INTO comments (comment, post_id, user_id, counter, created_at, updated_at)
                VALUES(?,?,?,counter+1,NOW(),NOW())";
      $values = array($comment['comment'], $comment['post_id'], $comment['user_id']);
      return $this->db->query($query, $values);
    }

    public function get_all_comments()
    {
      $query = "SELECT comments.id as comment_id, comment, 
      comments.post_id as post_id, comments.user_id as user_id,
      users.id, users.first_name, posts.id,
      comments.created_at as created_at, 
      comments.updated_at FROM comments 
      LEFT JOIN posts ON comments.post_id = posts.id
      LEFT JOIN users ON comments.user_id = users.id";
      return $this->db->query($query)->result_array();
    }

    public function get_all_upvotes()
    {
      $query = "SELECT upvotes.id as upvote_id, upvotes.counter as upvote_counter, 
      upvotes.user_id as user_id,
      upvotes.post_id as upvote_post_id, 
      posts.id, users.id
      FROM upvotes
      LEFT JOIN users ON upvotes.user_id = users.id
      LEFT JOIN posts ON upvotes.post_id = posts.id";
      return $this->db->query($query)->result_array();

    }

    public function get_all_downvotes()
    {
      $query = "SELECT downvotes.id as downvote_id, 
      downvotes.counter as downvote_counter, 
      downvotes.user_id as user_id, 
      downvotes.post_id as post_id, 
      posts.id, users.id
      FROM downvotes
      LEFT JOIN users ON downvotes.user_id = users.id
      LEFT JOIN posts ON downvotes.post_id = posts.id";
      return $this->db->query($query)->result_array();
    }

    public function delete_comment($id)
    {
      return $this->db->query("DELETE FROM comments where comments.id =?", $id);
    }

    public function get_post_by_id($id)
    {
          $query = "SELECT posts.id as post_id, post,
          posts.created_at, topics.id, users.id, users.first_name
          FROM posts LEFT JOIN topics ON posts.topic_id = topics.id
          LEFT JOIN users ON posts.user_id = users.id
          WHERE topics.id = ? ORDER BY posts.created_at DESC LIMIT 4";
          return $this->db->query($query, $id)->result_array();
    }

    public function delete_post($id)
    {
      return $this->db->query("DELETE FROM posts where posts.id=?", $id);
    }

    public function get_user_by_id($id)
    {
    $query = "SELECT users.id as id, users.password, count(topics.counter) as topics_counter, 
    topics.id, topics.user_id, first_name, last_name, email, users.created_at
    FROM users LEFT JOIN topics ON users.id = topics.user_id WHERE users.id = ?";
    return $this->db->query($query, $id)->row_array();
    }


  	public function get_all_topics()
  	{
    	$query = "SELECT topics.id as topics_id, users.id as users_id, users.first_name, 
      users.last_name, users.email, topic, description, category, topics.created_at 
      FROM topics LEFT JOIN users ON topics.user_id = users.id";
    	return $this->db->query($query)->result_array();
  	}

    public function update($post)
    {
    $query = "UPDATE topics 
              SET topic=?, category=?, description=?
              WHERE topics.id=?";
    $values = array($post['topic'],
                    $post['category'], 
                    $post['description'], 
                    $post['id']);
    return $this->db->query($query, $values);
    }

    public function delete_topic($id)
    {
      return $this->db->query("DELETE FROM topics where topics.id=?", $id);
    }

    public function show_topic($id)
    {
       $query = "SELECT topics.id as topic_id, users.first_name as first_name, 
       users.last_name, users.id as user_id, topics.topic, topics.category, 
       topics.description, topics.created_at FROM topics 
       LEFT JOIN users ON topics.user_id = users.id WHERE topics.id = ?";
       return $this->db->query($query, $id)->row_array();
    }
  }