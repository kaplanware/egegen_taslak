<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    protected $access = "*";

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata("language")) {
            $this->session->set_userdata("language", "turkish");
            $this->session->set_userdata("language_id", 1);
        }
    }

}