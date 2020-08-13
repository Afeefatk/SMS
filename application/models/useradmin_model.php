<?php
ob_start();
class useradmin_model extends CI_Model {

    function __construct() {
        parent::__construct();
          $this->db->cache_on();
    }
    function login() {
      //  session_start();
        $userName = $this->input->post('username');
       $password = $this->input->post('pass');
        // $query = $this->db->get_where('tbl_website', array('b_username' => $userName, 'b_password' => $password));
        $query = $this->db->get_where('tbl_login', array('Username' => $userName, 'Password' => $password));
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $username = $row->Username;
                 $user = $row->UserId;
                  $this->session->set_userdata('userid', $user);
            }
           
               
                $this->load->view("useradmin/index");
           

        } else {
              $pagedata = array("data" => "Username or Password is incorrect");
           $message="Username or Password is incorrect";
             $this->session->set_userdata('message2', $message);
          redirect('useradmin'); //redirects to the admin page
        }
    }

      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('tbl_branch');  
         return $query;  
      }  
   public function students()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('tbl_student');  
         return $query;  
      }  

public function checkemail($email)  
      {  

$query =$this->db->get_where('tbl_student', array('email' => $email));
//echo $this->db->last_query();
if($query->num_rows() > 0)
{
echo "Email already exists";
}
//return $query; 

}
   function searchrecords($branch,$email)
  {

if((isset($branch) && $branch!="") && (isset($email) && $email!="") )
{
   $query =$this->db->get_where('tbl_student', array('branch' => $branch,'email' => $email,));
}

else if(isset($branch) && $branch!="")
{
   $query =$this->db->get_where('tbl_student', array('branch' => $branch));
}
else if(isset($email) && $email!="")
{
  $query =$this->db->get_where('tbl_student', array('email' => $email));
}

//return $query;
  session_start();
       $this->session->set_userdata('em',$email);
            $this->session->set_userdata('br',$branch);
 $_SESSION['stDetails'] = $query->result();
redirect('useradmin/studentsearch');
  }


      function saverecords($data)
  {
      $email =  $this->input->post('email');

       $query =$this->db->get_where('tbl_student', array('email' => $email));
//echo $this->db->last_query();
if($query->num_rows() > 0)
{
echo "Email already exists";
 $message="Email already exists";
           $this->session->set_userdata('message', $message);
}
else
{
          $this->db->insert('tbl_student',$data);
         // return $this->db->insert_id();
            $message1="Data inserted successfully";
           $this->session->set_userdata('message1', $message1);
     
        }
          
  }

    function updaterecords($data)
  {
      
$email =  $this->input->post('email');

       $query =$this->db->get_where('tbl_student', array('email' => $email));
//echo $this->db->last_query();
if($query->num_rows() > 0)
{
echo "Email already exists";
 $message="Email already exists";
           $this->session->set_userdata('message', $message);
}
else
{

      $row_id= $this->input->post('row_id');
            $this->db->where('id', $row_id);
        $query = $this->db->update('tbl_student', $data);
         $message1="Data inserted successfully";
           $this->session->set_userdata('message1', $message1);
      }
  }
    
 function editstudent() {
        $Id = $this->input->post('data');
        $query = $this->db->get_where('tbl_student', array('id' => $Id));
        $row = $query->result();
        $jsonData = json_encode($row);
        echo $jsonData;
    }

 function deletestudent($id)
  {

$this->db->delete('tbl_student', array('id' => $id));

}

     function forgotpassword() {
        $email = $this->input->post('email');
        $query = $this->db->get_where('tbl_website', array('Email' => $email));
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $userName = $row->b_username;
                $password = $row->b_password;
            }
            $to = $email;
            $subject = 'Login details';
            $message = 'Hello user , Your credentials are given below <br/> <b>Username</b> :' . $userName . ' <br/> <b>Password </b>:' . $password . ' <br/> Click here to login :' . base_url() . 'useradmin/ ';
            $headers = 'From: info@fundsraja.com' . "\r\n" .
                    'Reply-To: info@fundsraja.com' . "\r\n" .
                    'MIME-Version: 1.0' . "\r\n" .
                    'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
            if (mail($to, $subject, $message, $headers)) {
                
                 $message="Login details has been sent to your email";
           $this->session->set_userdata('message2', $message);
                redirect('useradmin'); //redirects to the admin page
            }
        } else {
           
            $message="The email you entered does not exist";
             $this->session->set_userdata('message2', $message);
            redirect('useradmin'); //redirects to the admin page
        }
    }

      function logout() {
        $this->session->unset_userdata('userid');
        session_destroy();
    redirect('useradmin'); 
        // $this->load->view("admin/indexadmin");
    }
    
   

}
