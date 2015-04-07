<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        // $data['title'] = '诺亿生物-联系我们';
        $data['title'] = '联系诺亿－诺亿生物科技有限公司唯一官方网站|国产领先品牌化妆品企业,御熙妍|四川诺亿生物科技有限公司';
        $this->layout->view('contact/index', $data);
    }

    public function send_email()
    {
        date_default_timezone_set('UTC');
        // $this->load->library();
        $contact = $this->input->post('contact');

        // var_dump($contact);exit;
        $email_config = Array(        
                            'protocol' => 'smtp',
                            'smtp_host' => 'smtp.163.com',
                            'smtp_port' => 25,
                            'smtp_user' => 'scnuoyi@163.com',
                            'smtp_pass' => 'scnuoyi163',
                            'smtp_timeout' => '4',
                            'mailtype'  => 'html', 
                            'charset'   => 'utf-8'
                        );

        $msg  = '姓名: ' . $contact['name'] . '<br>';
        $msg .= '邮箱: ' . $contact['email'] . '<br>';
        $msg .= '电话: ' . $contact['phone_number'] . '<br>';
        $msg .= '主题: ' . $contact['subject'] . '<br>';
        $msg .= '内容: ' . $contact['message'] . '<br>';


        $this->load->library('email', $email_config);
        $this->email->set_newline('\r\n');

        $this->email->from('scnuoyi@163.com', '四川诺亿');
        $this->email->to(' scnuoyi@sina.com');

        $this->email->subject($contact['subject']);
        $this->email->message($msg);

        $this->email->send();

        redirect(base_url().'top/index');
    }
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */