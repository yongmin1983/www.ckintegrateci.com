<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        if($this->session->userdata('is_user_login')){
		    $this->load->view('welcome_message');
        }else{
            $this->session->set_flashdata('msg', 'You need log in First');
            redirect('welcome/login');
        }
	}
	public function login()
	{
	    if(isset($_POST) && !empty($_POST)){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if($username === 'admin' && $password === 'admin'){
                $this->session->set_userdata('is_user_login', 'administrator');
                redirect('welcome');
            }else{
                $this->session->set_flashdata('msg', 'Incorrect username and password');
                $this->load->view('login');
            }
        }else{
	        $this->load->view('login');
        }
	}
	public function logout()
	{
        if($this->session->userdata('is_user_login')){
            $this->session->unset_userdata('is_user_login');
            $this->session->set_flashdata('msg', 'You have log out');
        }else{
            $this->session->set_flashdata('msg', 'You have not log in');
        }
        redirect('welcome/login');
	}
}
