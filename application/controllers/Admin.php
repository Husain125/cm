<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this -> load -> library('session');
        $this -> load -> helper('form');
        $this -> load -> helper('url');
        $this -> load -> database();
        $this -> load -> library('form_validation');
        $this -> load -> model('Comman_model');
        $this -> load -> model('Api_model');
        $this -> load -> helper('string');
        $this -> load -> library('pagination');
    }

    public function index()
    {
      $data['pagename'] = "login";
      $this -> load ->view('layout', $data);
    }
    public function auth()
    {

        $email= $this->input->post('username', TRUE);
        $password=$this->input->post('password', TRUE);

        $data['username']= $email;
        $data['password']= $password;
        $sess_array=array();
        $getdata=$this->Api_model->getSingleRow('admin',$data);
        if($getdata)
        {           

            if($getdata->status==1)
            {
              $this->session->unset_userdata($sess_array);
              $sess_array = array(
               'name' => $getdata->name,
               'id' => $getdata->id,
             );

             $this->session->set_userdata( $sess_array);
              $dataget['get_data'] =$getdata;
              $dataget['see_data'] =$sess_array;
              redirect('Admin/dash');    
            }
            else
            {
              $this->session->set_flashdata('msg', 'You action has been block. Contact to admin.'); 
              redirect('');
            }
        }
        else
        {
          $this->session->set_flashdata('msg', 'Please enter valid Username or Password');
          redirect('');
        }
    }    
    public function dash()
    {
       $data['pagename'] = "bill_view";
      $this->load->view('layout', $data);
    }
    public function add_new()
    {
      $data['pagename'] = "add_bill";
      $this->load->view('layout', $data);
    }
    public function addbill()
    {
       $date =  $this->input->post('date');        
       $product =  $this->input->post('product[]');        
       $qty =  $this->input->post('qty[]');        
       $amt =  $this->input->post('amt[]');
       $c = sizeof($product);
       for ($i=0; $i <= $c ; $i++) { 
         $data['date']=$date;
         $data['product']=$product;
         $data['qty']=$qty;
         $data['amt']=$amt;
         print_r($data);
       }
    }
}
?>