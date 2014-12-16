<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Certification extends CI_Controller {

    public function index()
    {
        $this->layout->view('certification/index');
    }

    public function check()
    {
        $type = $this->input->post('type');
        $keyword = $this->input->post('keyword');
        
        $qq_data = array(
            'qq.abc' => base_url().'static/certification/default_certification.png'
        );

        $phone_data = array(
            'phone.abc' => base_url().'static/certification/default_certification.png'
        );

        $wechat_data = array(
            'wechat.abc' => base_url().'static/certification/default_certification.png'
        );

        $image_url = '';
        
        switch ($type) {
            case 'qq':
                $image_url = isset($qq_data[$keyword]) ? $qq_data[$keyword] : '';
                break;
            case 'phone':
                $image_url = isset($phone_data[$keyword]) ? $phone_data[$keyword] : '';
                break;
            case 'wechat':
                $image_url = isset($wechat_data[$keyword]) ? $wechat_data[$keyword] : '';
                break;
            default:
                $image_url = '';
                break;
        }

        echo $image_url;
    }
}

/* End of file certification.php */
/* Location: ./application/controllers/certification.php */