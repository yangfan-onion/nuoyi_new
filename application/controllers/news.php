<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

    public function index()
    {
    	// $data['title'] = '诺亿生物-新闻列表';
        $data['title'] = '诺亿新闻列表－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('news/index', $data);
    }

    public function detail($index = 1)
    {
    	// $data['title'] = '诺亿生物-新闻';
        $data['title'] = '诺亿新闻－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view("news/detail_$index", $data);
    }
}

/* End of file news.php */
/* Location: ./application/controllers/news.php */