<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Certification extends CI_Controller {

    public function index()
    {
        $this->layout->view('certification/index');
    }

    public function check()
    {
        $keyword = $this->input->post('keyword');
        
        $data = array(
            'qq.abc' => base_url().'static/certification/default_certification.png',
            'phone.abc' => base_url().'static/certification/default_certification.png',
            'wechat.abc' => base_url().'static/certification/default_certification.png',
        );

        if(isset($data[$keyword]))
        {
            echo $data[$keyword];
        }
        else
        {
            echo '';
        }
    }
}

/* End of file certification.php */
/* Location: ./application/controllers/certification.php */