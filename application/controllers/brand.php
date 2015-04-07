<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brand extends CI_Controller {

    public function index()
    {
    	// $data['title'] = '诺亿生物-企业介绍';
    	$data['title'] = '诺亿介绍－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('brand/index', $data);
    }
}

/* End of file brand.php */
/* Location: ./application/controllers/brand.php */