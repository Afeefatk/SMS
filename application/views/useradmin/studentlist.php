<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<?php 
//session_start();
 $message = $this->session->userdata('message');
 $message1 = $this->session->userdata('message1');
 $id = $this->session->userdata('userid');

if(isset($id) && $id!="")
 {
?>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>School Management System - UserAdmin Panel</title>
    <meta name="description" content="Admin Panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<script src="https://cdn.ckeditor.com/4.10.0/standard-all/ckeditor.js"></script>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->

   <?php include_once "include/sidebar.php"; ?>


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                    

                        <div class="dropdown for-message">
                          
                          
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                   

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                       <!-- <h1>Welcome to <?php if(isset($name) && $name!="") echo $name;?></h1> -->
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"><a href="#"> Students List  </a></li>
                           
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            
             <?php
           // if(isset($_SESSION['message']) && $_SESSION['message']!="")
 
           // if(isset($_SESSION['message']) && $_SESSION['message']!="")
           if(isset($message) && $message!="")
            {
            ?>
            <div id="resultblock" class="notification success hideit" style="margin-top:100px;margin-left:220px;"><strong> <?php  echo $message; ?></strong></div>
           <?php } 
          

          else if(isset($message1) && $message1!="")
            {
            ?>
            <div id="resultblock" class="notification success hideit" style="margin-top:100px;margin-left:220px;"><strong> <?php  echo $message1; ?></strong></div>
           <?php } 
           $this->session->unset_userdata('message1');
            $this->session->unset_userdata('message');
            ?>
           
           <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" id="newslist">
                            <strong class="card-title"> Students List</strong>
                        </div>
                         <div class="card-header" style="display:none;" id="edit">
                            <strong class="card-title">Edit </strong>
                        </div>
                        <div class="card-body">
       <form action="<?php echo base_url();?>useradmin/updatestudent" method="post"  id="formedit" enctype="multipart/form-data" style="display:none;">
   <div class="form-group">First name
    <input type="text" id="fname" name="fname" placeholder="First name..." class="form-control" required>
   
    </div>
    <div class="form-group">Last name
    <input type="text" id="lname" name="lname" placeholder="Last name..." class="form-control" required>
   
    </div>
    <div class="form-group">Email
    <input type="text" id="email" name="email" placeholder="Email..." class="form-control" required>
   
    </div>
     <div class="form-group"> Grade
        <select id="grade" name="grade" class="form-control" required>
            <option>Select Grade</option>
             <option value="Grade 1">Grade 1</option>
              <option value="Grade 2">Grade 2</option>
               <option value="Grade 3">Grade 3</option>
                <option value="Grade 4">Grade 4</option>
                 <option value="Grade 5">Grade 5</option>
        </select>
    <!-- <input type="text" id="nf-email" name="email" placeholder="Email..." class="form-control" required> -->
   
    </div>
 <div class="form-group"> Branch
        <select id="branch" name="branch" class="form-control" required>
            <option>Select Branch</option>
            <?php  
         foreach ($h->result() as $row)  
         {  ?>
             <option value="<?php echo $row->br_name;?>"><?php echo $row->br_name;?></option>
              <?php }  
         ?>  
              
        </select>
    <!-- <input type="text" id="nf-email" name="email" placeholder="Email..." class="form-control" required> -->
   
    </div>
    <div class="form-group">Date of join
    <input type="text" id="date" name="date" placeholder="Date of join..." class="form-control" required>
   
    </div>
<input type="hidden" name="row_id" id="row_id" value="">
<!-- <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button> -->
                         <input type="submit" name="save" value="Save Data" />
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
     </form>
                
                <div id="table"> 
                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <!-- <th>Description</th> -->
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Grade</th>
                        <th>Branch</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php
                       // $query = $this->db->query("Select * from tbl_product where bp_userid='$id'");
                        foreach ($s->result() as $row) {
                            ?>
                            <tr id="<?php echo $row->id; ?>">
                        <td><?php echo $row->first_name; ?></td>
                         <td><?php echo $row->last_name; ?></td>
                          <td><?php echo $row->email; ?></td>
                           <td><?php echo $row->grade; ?></td>
                            <td><?php echo $row->branch; ?></td>
                        <!-- <td><?php echo $row->fn_description; ?></td> -->
                         
                        <td><?php echo $row->date; ?></td>
                        <td><i id="<?php echo $row->id; ?>" class="fa fa-pencil-square-o" aria-hidden="true" onclick="Editdata(this.id)"></i></td>
                        <td><i  id="<?php echo $row->id; ?>" class="fa fa-trash-o" aria-hidden="true" onclick="Deletedata(this.id)"></i></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                   </div>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url();?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

   <script src="<?php echo base_url();?>assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/lib/data-table/datatables-init.js"></script>

 <script type="text/javascript">
        $(document).ready(function() {
             
                $("#result,#resultblock,#resultproduct,#resultAjax").click(function() {
                    //fades the notification out    
                    $(this).fadeOut(500);
                });
                var delay = 5000;
        setTimeout(function() {
            $("#result,#resultblock,#resultAjax").hide();
        }, delay);
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
      <script type="text/javascript">
            var Rowid;
           
            function Editdata(id) {
                Rowid = id;
                 // document.write(Rowid);
                $("label,#example_info,#example_next,#example_previous").hide()
                $("#example,#formaddcatgory,#add,#bootstrap-data-table,#newslist,#table").hide() //Hiding the business list table
                $("#formregister,#formedit,#edit").show() //show the edited data form 
                $("header h1").html("EDIT DATA") //change the header name
                $.post("<?php echo base_url(); ?>useradmin/editstudent", {data: Rowid}, function(result) {
                    var jsonObjArray = $.parseJSON(result);
                    //Setting all the values to the edit form
                 $("#fname").val(jsonObjArray[0].first_name);
                    $("#lname").val(jsonObjArray[0].last_name);
                       $("#email").val(jsonObjArray[0].email);
                          $("#grade").val(jsonObjArray[0].grade);
                             $("#branch").val(jsonObjArray[0].branch);
                                $("#date").val(jsonObjArray[0].date);
            
                     $("#row_id").val(jsonObjArray[0].id);
                });
            }
            
            function Deletedata(id) {
                blnConfirm = confirm("Are you sure to delete ?")
                if (blnConfirm == true) {
                    $.post("<?php echo base_url(); ?>useradmin/deletestudent", {data: id}, function(result) {
                        $("#result").show()
                        successMessage = $('<div class="notification success hideit" style="margin-top:20px;margin-left:20px;"><strong>SUCCESS: </strong>' + result + '</div>')
                        $("#email").removeClass("error")
                        $("#result").html(successMessage);
                         $('tr[id =' + id + ']').fadeOut(500);
                    });
                }
            }
        </script>
</body>
</html>
<?php } else 
{ 
$this->load->view("useradmin/login");
}
?>
