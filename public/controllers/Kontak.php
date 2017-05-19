<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : BismaLabs <bismalabs@gmail.com>
 * @since    : 2017
 * @license  : https://bismalabs.co.id
 */
class Kontak extends CI_Controller {

    public function index()
    {
        $data = array(
            'kontak'    => TRUE,
            'data_js'   => '',
            'js_ready'  => '',
        );
        $this->load->view('home/part/header', $data);
        $this->load->view('home/layout/kontak/kontak');
        $this->load->view('home/part/footer');
    }
}
