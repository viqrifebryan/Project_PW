<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Lemina extends CI_Controller {

    function __construct()
    {
        parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');

    }   
    /* Session */
        public function log_in($userID, $userRole, $userPassword, $userName, $userBirthDate, $userSex, $userAddress){
            $this->load->library('session');
            $data = array(
              'userID' => $userID, 
              'userRole' => $userRole, 
              'userPassword' => $userPassword, 
              'userName' => $userName, 
              'userBirthDate' => $userBirthDate, 
              'userSex' => $userSex, 
              'userAddress' => $userAddress
            );
            $this->session->set_userdata($data);
        }

        public function log_out(){
            $this->session->unset_userdata('userName');
            $this->session->sess_destroy();
            $this->load->view('inti.html');
        }
    /* Session -- End */

    /* Database */
        public function input_data()
        {
            //Retrieving
            $userName = $this->input->post('name');
            $userRole = $this->input->post('role');
            $userAddress = $this->input->post('address');
            $userSex = $this->input->post('sex');
            $userBirthDate = $this->input->post('tgl_lahir');
            $userID = $this->input->post('email');
            $userPassword = $this->input->post('psw');

            //Into database
            $this->load->model('M_Lemina');
                
            if ($this->M_Lemina->input($userID, $userRole, $userPassword, $userName, $userBirthDate, $userSex, $userAddress))
            {
                //Redirect
                $data['pegawai'] = $this->M_Lemina->getUserData($userID);
                $this->log_in($userID, $userRole, $userPassword, $userName, $userBirthDate, $userSex, $userAddress);
                var_dump($userID, $userRole, $userPassword, $userName, $userBirthDate, $userSex, $userAddress);
                $this->index();
            }
            else
                return false;   
        }         

        public function hapus_data(){
            $nip = $this->uri->segment(3);
            $this->load->model('M_Lemina');
            $this->M_Lemina->delete($nip);

            //Redirect
            $data['pegawai']=$this->M_Lemina->getUserData();
            $this->load->view('tampil_data',$data);
        }

        public function gantiPass()
        {
            $userID = $this->input->post('email');
            $userPassword = $this->input->post('psw');
            //changing
            $this->load->model('M_Lemina');
            $this->M_Lemina->gantiPass($userID, $userPassword);
            $this->load->view('inti.html');
        }

        public function authenticate(){
            $userID = $this->input->post('email');
            $userPassword = $this->input->post('psw');

            $this->load->model('M_Lemina');
            if($this->M_Lemina->auth($userID, $userPassword))
            { 
                $userRole = $this->M_Lemina->getSpesificUserData($userID, 'userRole'); 
                $userName = $this->M_Lemina->getSpesificUserData($userID, 'userName');
                $userBirthDate = $this->M_Lemina->getSpesificUserData($userID, 'userBirthDate');
                $userSex = $this->M_Lemina->getSpesificUserData($userID, 'userSex');
                $userAddress = $this->M_Lemina->getSpesificUserData($userID, 'userAddress');
                
                $this->log_in($userID, $userRole[0]->userRole, $userPassword, $userName[0]->userName, $userBirthDate[0]->userBirthDate, $userSex[0]->userSex, $userAddress[0]->userAddress);
                $this->index();
            }
            else{
                $message = "SALAH GOBLOG";
                echo "<script type='text/javascript'>alert('$message');</script>";
                $this->load->view('inti.html');
            }

        }
    /* Database -- End */

    /* Page */
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
            $this->load->view('profile');
        }
        public function forget()
        {
            $this->load->view('forget.html');
        }
    /* Page -- end*/
}
?>
