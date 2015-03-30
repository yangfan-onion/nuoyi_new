<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    public function xmn()
    {
        $data['title'] = '诺亿生物-悦享青春';
        $this->layout->view('products/xmn', $data);
    }

    public function jhs()
    {
        $data['title'] = '诺亿生物-悦活水润';
        $this->layout->view('products/jhs', $data);
    }

    public function ry()
    {
        $data['title'] = '诺亿生物-悦色润养';
        $this->layout->view('products/ry', $data);
    }
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */