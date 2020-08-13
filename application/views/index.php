<?php
 
                        $query = $this->db->query("Select * from tbl_website");
                        foreach ($query->result() as $row) {
                             $name=$row->b_name;
                              $logo=$row->b_logo;
                            $banner1=$row->b_banner1;
                            $banner2=$row->b_banner2;
                            $banner3=$row->b_banner3;
                            $title1=$row->b_title1;
                            $title2=$row->b_title2;
                            $title3=$row->b_title3;
                             $abt_title=$row->b_abt_title;
                             $abt=$row->b_abt_desc;
                              $abt_img=$row->b_abt_image;
                             
$paragraph= substr($abt, 0, strpos($abt, "</p>"));
                        }
                        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <?php if(isset($logo) && $logo!="") {?><link rel="icon" href="<?php echo base_url();?>uploads/logo/<?php echo $logo;?>" type="image/x-icon" style="height:32px; width:32px;" /><?php } ?>
    <title><?php if(isset($name) && $name!="") echo $name;?></title>

        <!-- Required CSS files -->
    
</head>

<body>
    <div class="preloader">
        <span class="preloader-spin"></span>
    </div>
    <div class="site">
        
         <?php include_once "include/header.php"; ?>

            <div class="hero-slider">
                <?php if(isset($banner1) && $banner1!="") { ?>
            <div class="single-slide" style="background-image: url( uploads/banner/<?php echo $banner1;?>)">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slide-content">
                                    <h2><?php echo $title1;?></h2>
                                    <!--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>-->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } else { ?>
            <div class="single-slide" style="background-image: url( assets1/img/slide1.jpg)">
                <div class="inner">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <div class="slide-content">
                                    <h2>We Are Digital Product Design Agency.</h2>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                    <div class="slide-btn">
                                        <a href="#" class="button">Learn More</a>
                                        <a href="#" class="button-2">Live Preview</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
              <?php if(isset($banner2) && $banner2!="") { ?>
            <div class="single-slide" style="background-image: url( uploads/banner/<?php echo $banner2;?>)">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slide-content">
                                    <h2><?php echo $title2;?></h2>
                                    <!--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>-->
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
             <?php if(isset($banner3) && $banner3!="") { ?>
            <div class="single-slide" style="background-image: url( uploads/banner/<?php echo $banner3;?>)">
                <div class="inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slide-content">
                                    <h2><?php echo $title3;?></h2>
                                    <!--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>-->
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
           
         
        </div><div class="service-area bg2 sp">
    <div class="container">
        <div class="section-title">
            <h2>Our Service</h2>
                  </div>
        <div class="row">
          <?php
           $query1 = $this->db->query("Select * from tbl_service ");
                        $query = $this->db->query("Select * from tbl_service ORDER BY bs_date DESC LIMIT 4");
                        foreach ($query->result() as $row) {
                             $id= $row->bs_id;
                         $title= $row->bs_title;
                         $desc= $row->bs_description;
                        // $service_para= substr($desc, 0, strpos($desc, "</p>"));
                         strlen($desc);
                                 $s=0;
                           $l=105; 
                             if(strlen($desc) > 105)
                    {
                               $str =  mb_substr($desc,$s, $l, 'UTF-8') . '...';
                    } 
                    else
                    {
                          $str =  mb_substr($title,$s, $l, 'UTF-8');
                    }
                         $img= $row->bs_image;
                            ?>   
           <div class="col-lg-3 single-service">     <div class="inner">
                    <div class="title">
                       <img src="uploads/services/<?php echo $img;?>" class="img-fluid mb-3" alt=""/>
<h4  style="  text-transform:  uppercase; font-size: 17px;"><?php echo $title;?></h4>
                    </div>
                    <div class="content">
                        <p><?php echo $str;?></p>
                        <a href="service_detail/<?php echo $id;?>" class="btn-primary btn">Read More</a>
                    </div>
                </div> </div>
                <?php } ?>
                 
           
        </div>
      <?php if($query1->num_rows() > 4) { ?>   <div class="row text-center mt-3">      <a href="service" class="btn btn-danger btn-lg active" style=" margin: auto;" role="button" aria-pressed="true">View More Services</a> </div> <?php } ?>
    </div>
</div><div class="about-area sp">
    <div class="container">
          <?php if(isset($abt) && $abt!="") { ?>
        <div class="row">
            <div class="col-md-6">
              
                <div class="about-content">
                    <h2><?php echo $abt_title;?></h2>
                    <p><?php echo $paragraph;?></p>
                    <a href="<?php echo base_url();?>about" class="button">More about</a>
                </div>
               
               
            </div>
            <div class="col-md-6">
                <div class="about-img">
                    <img src="<?php echo base_url();?>uploads/about/<?php echo $abt_img;?>" alt="">
                </div>
            </div>
        </div>
         <?php } else { ?>
          <div class="row">
            <div class="col-md-6">
              
                <div class="about-content">
                    <h3>USA’s most trusted 3D and graphic designing studio, a very passionate team inside.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </p>
                    <p>Exa commodo consequat.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <a href="#" class="button">More about</a>
                </div>
               
               
            </div>
            <div class="col-md-6">
                <div class="about-img">
                    <img src=" assets1/img/about.png" alt="">
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div><div class="testimonial-area sp bg1">
    <div class="container">
        <div class="section-title white">
            <h2>Our Products</h2>
        </div>
        <div class="testimonial-slider">
             <?php
                        $query = $this->db->query("Select * from tbl_product ");
                        foreach ($query->result() as $row) {
                             $id= $row->bp_id;
                         $title= $row->bp_title;
                         $desc= $row->bp_description;
                        // $service_para= substr($desc, 0, strpos($desc, "</p>"));
                         strlen($desc);
                                 $s=0;
                          $l=100; 
                             if(strlen($desc) > 100)
                    {
                              $str =  mb_substr($desc,$s, $l, 'UTF-8') . '...';
                    } 
                    else
                    {
                          $str =  mb_substr($title,$s, $l, 'UTF-8');
                    }
                         $img= $row->bp_image;
                            ?>   
            <div class="single-slide">
                 <div class="inner1">
                    <div class="title">
                       <img src="uploads/products/<?php echo $img;?>" class="img-fluid mb-3" alt=""/>
<h4 style=" font-size:  19px; text-transform:  uppercase; line-height: 25px;    text-align: center;"><?php echo $title;?></h4>
                    </div>
                    <div class="content"  style="text-align: center;">
                        <p><?php echo $str;?></p>
                        <a href="product_detail/<?php echo $id;?>" class="btn-primary btn">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
<!--            <div class="single-slide">-->
<!--                 <div class="inner1">-->
<!--                    <div class="title">-->
<!--                       <img src="assets1/img/gallery-1.jpg" class="img-fluid mb-3" alt=""/>-->
<!--<h4>Video Making</h4>-->
<!--                    </div>-->
<!--                    <div class="content">-->
<!--                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>-->
<!--                        <a href="product_detail" class="btn-primary btn">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="single-slide">-->
<!--                     <div class="inner1">-->
<!--                    <div class="title">-->
<!--                       <img src="assets1/img/gallery-1.jpg" class="img-fluid mb-3" alt=""/>-->
<!--<h4>Video Making</h4>-->
<!--                    </div>-->
<!--                    <div class="content">-->
<!--                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>-->
<!--                        <a href="product_detail" class="btn-primary btn">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="single-slide">-->
<!--                     <div class="inner1">-->
<!--                    <div class="title">-->
<!--                       <img src="assets1/img/gallery-1.jpg" class="img-fluid mb-3" alt=""/>-->
<!--<h4>Video Making</h4>-->
<!--                    </div>-->
<!--                    <div class="content">-->
<!--                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>-->
<!--                        <a href="product_detail" class="btn-primary btn">Read More</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>
     <?php include_once "include/footer.php"; ?>  
        
    </div>

    <!--Required JS files-->

</body>

</html>