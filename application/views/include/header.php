<?php
 $page = $this->uri->segment(1);
 			  
                        $query = $this->db->query("Select * from tbl_website");
                        foreach ($query->result() as $row) {
                            $logo= $row->b_logo;
                            $mobile= $row->b_mobile;
                            $email= $row->b_email;
                            $address= $row->b_address;
                            $location= $row->b_location;
                            $name= $row->b_name;
                            $fb= $row->b_facebook;
                            $youtube= $row->b_youtube;
                            $google= $row->b_google;
                            $twitter= $row->b_twitter;
                            $pin= $row->b_pinterest;
                            $instagram= $row->b_instagram;
                            $linkedin= $row->b_linkedin;
                        //      $str1 = substr($title, 0, 40) . '...';
                        //  $description=  $row->fn_description;
                        //       $str = substr($description, 0, 120) . '...';
                        }
?>
  <!-- Required CSS files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/css/barfiller.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets1/css/main.css">
    <!--<link rel="icon" href="<?php echo base_url();?>uploads/logo/<?php echo $logo;?>" type="image/x-icon" height:32px; width:32px; />-->
 <header>
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-3 logo-column ">
                        <a href="" class="logo">
                        <?php if(isset($logo) && $logo!="")
                        {
                        ?>
                            <img src="<?php echo base_url();?>uploads/logo/<?php echo $logo;?>" alt="logo">
                            <?php } else { ?>
                            <img src="<?php echo base_url();?>assets1/img/logo.png" alt="logo">
                            <?php } ?>
                        </a>
                    </div>
                    <div class="col-6 col-sm-9 nav-column clearfix mt-3">
                        <div class="right-nav">
                        
                            <div class="header-social">
                              <?php if(isset($fb) && $fb!="") { ?>  <a href="<?php echo $fb;?>" class="fa fa-facebook" target="_blank"></a> <?php } ?>
                              <?php if(isset($twitter) && $twitter!="") { ?>  <a href="<?php echo $twitter;?>" class="fa fa-twitter" target="_blank"></a> <?php } ?>
                              <?php if(isset($linkedin) && $linkedin!="") { ?>  <a href="<?php echo $linkedin;?>" class="fa fa-linkedin" target="_blank"></a><?php } ?>
                               <?php if(isset($instagram) && $instagram!="") { ?>  <a href="<?php echo $instagram;?>" class="fa fa-instagram" target="_blank"></a><?php } ?>
                              <?php if(isset($youtube) && $youtube!="") { ?>  <a href="<?php echo $youtube;?>" class="fa fa-youtube" target="_blank"></a><?php } ?>
                              <?php if(isset($pin) && $pin!="") { ?>  <a href="<?php echo $pin;?>" class="fa fa-pinterest" target="_blank"></a><?php } ?>
                              <?php if(isset($google) && $google!="") { ?>  <a href="<?php echo $google;?>" class="fa fa-google" target="_blank"></a><?php } ?>
                            </div>
                        </div>
                        <nav id="menu" class="d-none d-lg-block">
                            <ul>
                                <li class="">
                                    <a href="<?php echo base_url();?>">Home</a>
                                   <!--  <ul class="sub-menu">
                                         <li><a href="<?php echo base_url();?>">Home - 01</a></li>
                                        <li><a href="index-2.html">Home - 02</a></li>
                                        <li><a href="index-3.html">Home - 03</a></li>
                                    </ul>  -->
                                </li>
                                <li><a href="<?php echo base_url();?>about">About us</a></li>
                                <li><a href="<?php echo base_url();?>service">Services</a></li>
                                <li><a href="<?php echo base_url();?>products">Products</a></li>
                                <li><a href="<?php echo base_url();?>gallery">Gallery</a></li>
                                
                                <!--<li class="has-child">-->
                                <!--    <a href="#">Pages</a>-->
                                <!--    <ul class="sub-menu">-->
                                <!--        <li><a href="404">404</a></li>-->
                                <!--        <li><a href="about">About</a></li>-->
                                <!--        <li><a href="career">Career</a></li>-->
                                <!--        <li><a href="coming-soon">Coming Soon</a></li>-->
                                <!--        <li><a href="contact">Contact</a></li>-->
                                <!--        <li><a href="faq">Faq</a></li>-->
                                <!--        <li><a href="portfolio">Portfolio</a></li>-->
                                <!--        <li><a href="pricing">Pricing</a></li>-->
                                <!--        <li><a href="service">Service</a></li>-->
                                <!--        <li><a href="team">Team</a></li>-->
                                <!--        <li><a href="testimonial">Testimonial</a></li>-->
                                <!--    </ul>-->
                                <!--</li>-->
                                <li><a href="<?php echo base_url();?>contact">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>