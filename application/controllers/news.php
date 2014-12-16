<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

    public function index()
    {
        $this->layout->view('news/index');
    }

    public function detail($index = 1)
    {
        $this->layout->view("news/detail_$index");
    }
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */