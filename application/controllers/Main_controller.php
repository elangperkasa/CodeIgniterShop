<?php
   class Main_controller extends CI_Controller {

      function __construct() {
         parent::__construct();
         $this->load->helper('url');
         $this->load->database();
      }

      public function index() {
        $this->db->order_by("ID","desc");
        $query = $this->db->get("products");
        $data['records'] = $query->result();

        $this->load->helper('url');;
        $this->load->view('Firstpage',$data);

        // $this->load->helper('url');;
      //   $this->load->view('Firstpage');

      }

      public function contactus() {

         $this->load->helper('url');
         $this->load->view('Contactus');
      }
      public function user() {

         $this->load->helper('url');
         $this->load->view('User');
      }
      public function login() {

         $this->load->helper('url');
         $this->load->view('Loginpage');
      }
      public function ceklogin() {
        $data['uname']=$this->input->post('uname');
        $data['psw']=$this->input->post('psw');

        $query = $this->db->get_where("login",array("username"=>$data['uname'],"password"=>$data['psw']));
        if ( $query->num_rows() > 0 )
{        $this->session->set_userdata('ceklogin', 'ok');
        $this->load->helper('url');
        $this->load->view('User');
      }else {
        {
          $this->load->helper('url');
          $this->load->view('Loginpage');
        }
      }
      }
      public function logout() {
$this->session->set_userdata('ceklogin', '');
         $this->load->helper('url');
         $this->load->view('Firstpage');
      }
   }
?>
