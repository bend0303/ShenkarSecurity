<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('posts_model');

    }
    public function index()
    {
        echo "hello from posts";
    }

    public function get_posts() {
        $retval = $this->posts_model->getAllPosts();
        echo json_encode($retval);
    }

    public function insert_post() {
        $subject = $_POST['subject'];
        $content = $_POST['content'];
        $uid = $_POST['uid'];
        $retval = $this->posts_model->insertPost($subject, $content, $uid);
        echo json_encode($retval);
    }
}