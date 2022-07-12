<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page403 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load base_url
        $this->load->helper('url');
    }

    public function index()
    {
        $this->output->set_status_header('403');
        $this->load->view('custom_errors/v_page_403');
    }
}
