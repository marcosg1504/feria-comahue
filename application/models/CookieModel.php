<?php
class CookieModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("cookie");
    }

    public function setCookie($name, $value)
    {
        $cookie = array(
            'name'=>$name,
            'value'=>$value,
            'expire'=>'31556926',
        );
        $this->input->set_cookie($cookie);
    }

    public function getCookie($name){
        return $this->input->cookie($name, true);
    }

    public function clearCookie($name)
    {
        $cookie = array(
            'name'=>$name,
            'value'=>'',
            'expire'=>'-31556926',
        );
        $this->input->set_cookie($cookie);
    }
}