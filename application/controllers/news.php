<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

    public function index()
    {
    	$data['title'] = '诺亿生物-新闻列表';
        $this->layout->view('news/index', $data);
    }

    public function detail($index = 1)
    {
    	$data['title'] = '诺亿生物-新闻';
        $this->layout->view("news/detail_$index", $data);
    }
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */