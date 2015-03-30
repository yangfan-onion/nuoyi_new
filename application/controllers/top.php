<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends CI_Controller {

    public function index()
    {
    	$data['title'] = '诺亿生物-首页';
        $this->layout->view('top/index', $data);
    }
}

/* End of file top.php */
/* Location: ./application/controllers/top.php */