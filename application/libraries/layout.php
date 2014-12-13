<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{

    public $CI;

    public $layout;

    function Layout($layout = "layout")
    {
        $this->CI =& get_instance();
        $this->layout = $layout;
    }

    public function set_layout($layout='layout')
    {
        $this->layout=$layout;
    }


    function view($view, $data=null, $return=false, $is_xss=true)
    {
        if (!is_array($data)) $data = array();

        $loaded_data = array();
        $loaded_data['content_for_layout'] = $this->CI->load->view($view, $data, true);

        if($return)
        {
            return $loaded_data['content_for_layout'];
        }

        $this->CI->load->view($this->layout, $loaded_data, false);
    }

}