<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {

    public function yhsr()
    {
    	$data['title'] = '悦活水润检测报告－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('report/yhsr', $data);
    }

    public function ysry()
    {
    	$data['title'] = '悦色润养检测报告－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('report/ysry', $data);
    }

    public function yxqc()
    {
    	$data['title'] = '悦享青春检测报告－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('report/yxqc', $data);
    }
}

/* End of file report.php */
/* Location: ./application/controllers/report.php */