<?php
/**
 * Created by bend and orguz.
 * Main model for the posts objects, this class is mainly communicate with the DB to pull and inset data from posts table
 */

class Posts_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    function getAllPosts() {
        $query = $this->db->query('SELECT shenkardb.posts.*, shenkardb.users.email, shenkardb.users.first_name, shenkardb.users.last_name FROM shenkardb.posts
left join shenkardb.users
 on shenkardb.posts.user_id = shenkardb.users.id;');
        return $query->result();
    }

    function insertPost($subject, $content, $uid) {
        $data = array(
            'subject' => $subject,
            'content' => $content,
            'user_id' => $uid
        );
        $query = $this->db->insert('posts', $data);
        return $query;

    }

}
