<?php
defined('basepath') or exit ('no dirrect script access allowed');

class page extends CI_Controller
{
    public function index()
    {
        $this->load->view('_partials/header');
        $this->load->view('home');
        $this->load->view('_partials/footer');
    }
    public function profil()
    {
        $this->load->view('_partials/header');
        $this->load->view('profil');
        $this->load->view('_partials/footer');
    }
}