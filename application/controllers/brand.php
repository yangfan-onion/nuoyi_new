<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Brand extends CI_Controller {

    public function index()
    {
    	$data['title'] = '诺亿生物-企业介绍';
        $this->layout->view('brand/index', $data);
    }
}

/* End of file brand.php */
/* Location: ./application/controllers/brand.php */