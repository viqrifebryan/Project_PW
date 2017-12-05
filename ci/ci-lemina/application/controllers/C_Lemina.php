<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Lemina extends CI_Controller {

    function __construct()
    {
        parent::__construct();
            $this->load->helper('url');

    }   
    public function index()
    {
        $this->load->view('inti.html');
    }
	public function model()
    {
        $this->load->view('model.html');
    }
	public function model_gauss()
    {
        $this->load->view('model_gauss.html');
    }
	public function model_newton()
    {
        $this->load->view('model_newton.html');
    }
	public function model_pascal()
    {
        $this->load->view('model_pascal.html');
    }
	public function merch_jacket()
    {
        $this->load->view('merch_jacket.html');
    }
	public function merch_shirt()
    {
        $this->load->view('merch_shirt.html');
    }
	public function merch_watch()
    {
        $this->load->view('merch_watch.html');
    }
	public function spare_brake()
    {
        $this->load->view('spare_brake.html');
    }
	public function spare_engine()
    {
        $this->load->view('spare_engine.html');
    }
	public function spare_tyres()
    {
        $this->load->view('spare_tyres.html');
    }
	public function about()
    {
        $this->load->view('about.html');
    }
	public function SignIn()
    {
        $this->load->view('SignIn.html');
    }
	public function SignUp()
    {
        $this->load->view('SignUp.html');
    }
	public function search()
    {
        $this->load->view('search.html');
    }
    public function profile()
    {
        $this->load->view('profile.html');
    }
}
?>
