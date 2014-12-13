<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function index()
    {
        $this->layout->view('contact/index');
    }

    public function send_email()
    {
        // $this->load->library();
    }
}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */