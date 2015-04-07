<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends CI_Controller {

    public function index()
    {
    	// $data['title'] = '诺亿生物-首页';
    	$data['title'] = '【诺亿官网】诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('top/index', $data);
    }
}

/* End of file top.php */
/* Location: ./application/controllers/top.php */