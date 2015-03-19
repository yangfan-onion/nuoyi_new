<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Certification extends CI_Controller {

    public function index()
    {
        $this->layout->view('certification/index');
    }

    public function check()
    {
        // $type = $this->input->post('type');
        $keyword = $this->input->post('keyword');
        
        // $qq_data = array(
        //     'qq.abc' => base_url().'static/certification/top_certification.jpg'
        // );

        // $phone_data = array(
        //     'phone.abc' => base_url().'static/certification/top_certification.jpg'
        // );

        $wechat_data = array(
            'GIVEUP1527965269' => base_url().'static/certification/level-1_GIVEUP1527965269.jpg',
            'wlhwai2517' => base_url().'static/certification/level-1_wlhwai2517.jpg',
            'I Can' => base_url().'static/certification/top_I-Can.jpg',
            'KFmini' => base_url().'static/certification/top_KFmini.jpg',
            'chengguang2008' => base_url().'static/certification/top_chengguang2008.jpg',
            'sunnysunny729' => base_url().'static/certification/top_sunnysunny729.jpg'
        );

        $image_url = isset($wechat_data[$keyword]) ? $wechat_data[$keyword] : '';;
        
        // switch ($type) {
        //     case 'qq':
        //         $image_url = isset($qq_data[$keyword]) ? $qq_data[$keyword] : '';
        //         break;
        //     case 'phone':
        //         $image_url = isset($phone_data[$keyword]) ? $phone_data[$keyword] : '';
        //         break;
        //     case 'wechat':
        //         $image_url = isset($wechat_data[$keyword]) ? $wechat_data[$keyword] : '';
        //         break;
        //     default:
        //         $image_url = '';
        //         break;
        // }

        echo $image_url;
    }
}

/* End of file certification.php */
/* Location: ./application/controllers/certification.php */