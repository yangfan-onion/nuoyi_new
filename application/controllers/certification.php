<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Certification extends CI_Controller {

    public function index()
    {
        $data['title'] = '诺亿生物-正品认证';
        $this->layout->view('certification/index', $data);
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
            'GIVEUP1527965269' => base_url().'static/certification/level_1_GIVEUP1527965269.png',
            'wlhwai2517' => base_url().'static/certification/level_1_wlhwai2517.png',
            'I Can' => base_url().'static/certification/top_I_Can.png',
            'KFmini' => base_url().'static/certification/top_KFmini.png',
            'chengguang2008' => base_url().'static/certification/top_chengguang2008.png',
            'sunnysunny729' => base_url().'static/certification/top_sunnysunny729.png'
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