<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }

    public function schlist()
    {
        $this->load->view('school/list', array());
    }
}
