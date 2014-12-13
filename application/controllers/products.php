<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    public function xmn()
    {
        $this->layout->view('products/xmn');
    }

    public function jhs()
    {
        $this->layout->view('products/jhs');
    }

    public function ry()
    {
        $this->layout->view('products/ry');
    }
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */