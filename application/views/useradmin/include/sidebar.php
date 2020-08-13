<?php
session_start();
 
 $id = $this->session->userdata('userid');
 
 ?>

 <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
<?php //if(isset($logo) && $logo!="") { ?><a class="navbar-brand" href="<?php echo base_url();?>useradmin/login"></a>
<a class="navbar-brand hidden" href="<?php echo base_url();?>useradmin/login"><img src="" alt="Logo"></a><?php //}?>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url();?>useradmin/login"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                   
                <li class="menu-item-has-children dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Manage Students</a>
 <ul class="sub-menu children dropdown-menu">
 <li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url();?>useradmin/addstudent">Add Students</a></li>
<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url();?>useradmin/studentlist">View Students</a>
<li><i class="menu-icon fa fa-th"></i><a href="<?php echo base_url();?>useradmin/studentsearch">Search Students</a></li>
                      
                        </ul>
                    </li>


                   
           
                  <li>
         <a href="<?php echo base_url();?>useradmin/logout"> <i class="menu-icon ti-logout"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->