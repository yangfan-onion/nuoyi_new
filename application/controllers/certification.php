<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Certification extends CI_Controller {

    public function index()
    {
        // $data['title'] = '诺亿生物-正品认证';
        $data['title'] = '诺亿授权查询－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('certification/index', $data);
    }

    public function check()
    {
        $type = $this->input->post('type');
        $keyword = $this->input->post('keyword');
        
        // $qq_data = array(
        //     'qq.abc' => base_url().'static/certification/top_certification.jpg'
        // );

        $phone_data = array(
            '13776364695' => base_url().'static/certification/level_1_GIVEUP1527965269.png',
            '11122223333' => base_url().'static/certification/level_1_wlhwai2517.png',
            '13991802344' => base_url().'static/certification/top_I_Can.png',
            '13880638291' => base_url().'static/certification/top_KFmini.png',
            '15015276558' => base_url().'static/certification/top_chengguang2008.png',
            '13880132456' => base_url().'static/certification/top_sunnysunny729.png'
        );

        $wechat_data = array(
            'GIVEUP1527965269' => base_url().'static/certification/level_1_GIVEUP1527965269.png',
            'wlhwai2517' => base_url().'static/certification/level_1_wlhwai2517.png',
            'I Can' => base_url().'static/certification/top_I_Can.png',
            'KFmini' => base_url().'static/certification/top_KFmini.png',
            'chengguang2008' => base_url().'static/certification/top_chengguang2008.png',
            'sunnysunny729' => base_url().'static/certification/top_sunnysunny729.png'
        );

        $image_url = isset($wechat_data[$keyword]) ? $wechat_data[$keyword] : '';;
        
        switch ($type) {
            // case 'qq':
            //     $image_url = isset($qq_data[$keyword]) ? $qq_data[$keyword] : '';
            //     break;
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