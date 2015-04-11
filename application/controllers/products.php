<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    public function yxqc()
    {
        // $data['title'] = '诺亿生物-悦享青春';
        $data['title'] = '悦享青春－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('products/yxqc', $data);
    }

    public function yhsr()
    {
        // $data['title'] = '诺亿生物-悦活水润';
        $data['title'] = '悦活水润－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('products/yhsr', $data);
    }

    public function ysry()
    {
        // $data['title'] = '诺亿生物-悦色润养';
        $data['title'] = '悦色润养－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('products/ysry', $data);
    }
}

/* End of file products.php */
/* Location: ./application/controllers/products.php */