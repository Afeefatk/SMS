<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Useradmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Your own constructor code
         $this->load->library('form_validation');
         $this->no_cache();
    }
protected function no_cache(){
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: post-check=0, pre-check=0',false);
    header('Pragma: no-cache'); 
}
    public function index() {
        $this->load->view('useradmin/login');
    }
    public function loadpages() {
       $page = $this->uri->segment('2');
   //exit();
        //  $slug = $this->uri->segment('2');
        //  $this->db->where('tn_id', urldecode($slug));
        //  $this->db->select('tbl_news');
        //   $this->db->last_query();
     // exit();
        $this->load->model('useradmin_model');  
         //load the method of model  
         $data['h']=$this->useradmin_model->select(); 
          $data['s']=$this->useradmin_model->students(); 
    
        $this->load->view('useradmin/'.$page , $data);
        
    }
     public function checkdata()

{

$email=$this->input->post('user_email');
$check = $this->useradmin_model->checkemail($email);


}


  public function ajax_signup()
    {
        
        $this->form_validation->set_rules('email', 'email', 
        'required|is_unique[tbl_student.email]');
        $this->form_validation->set_message('is_unique', 'The %s is already taken');
        if ($this->form_validation->run() == FALSE):
                echo 'The email is already taken.';          
        else :           
            unset($_POST);
            echo 'Available';
        endif;
    }
     public function search() {
      $branch =  $this->input->post('branch');
      $email =  $this->input->post('email');
     
       $this->useradmin_model->searchrecords($branch,$email);
       //  $this->useradmin_model->select(); 

      redirect('useradmin/studentsearch');
     }

     public function add_student() {
        //$this->useradmin_model->add_student();
        /*load registration view form*/
     
    
        /*Check submit button */
        if($this->input->post('save'))
        {
            $data['first_name']=$this->input->post('fname');
            $data['last_name']=$this->input->post('lname');
            $data['email']=$this->input->post('email');
             
                $ndate= $this->input->post('date');
      $news_date= date("Y-m-d", strtotime($ndate));
       $data['date']=$news_date;
                $data['branch']=$this->input->post('branch');
                  $data['grade']=$this->input->post('grade');
            $user=$this->useradmin_model->saverecords($data);
            // if($user>0){
            //         echo "Records Saved Successfully";
            // }
            // else{
            //         echo "Insert error !";
            // }
     }
     redirect('useradmin/addstudent');
       // $this->load->view('useradmin/addstudent');
    
 }

 public function editstudent() {
        $this->useradmin_model->editstudent();
     }

 public function updatestudent() {
        //$this->useradmin_model->add_student();
        /*load registration view form*/
     
    
        /*Check submit button */
        if($this->input->post('save'))
        {
            $data['first_name']=$this->input->post('fname');
            $data['last_name']=$this->input->post('lname');
            $data['email']=$this->input->post('email');
             
                $ndate= $this->input->post('date');
      $news_date= date("Y-m-d", strtotime($ndate));
       $data['date']=$news_date;
                $data['branch']=$this->input->post('branch');
                  $data['grade']=$this->input->post('grade');
            $user=$this->useradmin_model->updaterecords($data);
            if($user>0){
                    echo "Records Saved Successfully";
            }
            else{
                    echo "Insert error !";
            }
     }
       // $this->load->view('useradmin/addstudent');
      // $message="Data inserted successfully";
      //      $this->session->set_userdata('message', $message);
     redirect('useradmin/studentlist');
 }

 public function deletestudent() {
    $id=$this->input->post('data');
        $this->useradmin_model->deletestudent($id);
     }



  
     public function login() {
        $this->useradmin_model->login();
     }
     public function forgotpassword() {
        $this->useradmin_model->forgotpassword();
     }

     
     
      public function logout() {
        $this->useradmin_model->logout();
     }
}
