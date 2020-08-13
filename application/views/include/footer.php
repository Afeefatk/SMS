<?php
 
 			  
                        $query = $this->db->query("Select * from tbl_website");
                        foreach ($query->result() as $row) {
                            $abt= $row->b_abt_desc;
                             $address= $row->b_address;
                             $paragraph= substr($abt, 0, strpos($abt, "</p>"));
                        //      $str1 = substr($title, 0, 40) . '...';
                        //  $description=  $row->fn_description;
                        //       $str = substr($description, 0, 120) . '...';
                        }
?>
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 footer_widget">
                    <div class="inner">
                        <h4>About Us</h4>
                        <p><?php if(isset($paragraph) && $paragraph!="") echo $paragraph;?></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 footer_widget">
                    <div class="inner">
                        <h4>QUICK LINKS</h4>
                        <ul>
                            <li><i class="fa fa-arrow-right"  style=" padding-right: 5px;"></i> <a href="<?php echo base_url();?>">Home</a></li>
                            <li> <i class="fa fa-arrow-right"  style=" padding-right: 5px;"></i><a href="<?php echo base_url();?>about">About</a></li>
                            <li><i class="fa fa-arrow-right"  style=" padding-right: 5px;"></i> <a href="<?php echo base_url();?>service">Services</a></li>
                            <li><i class="fa fa-arrow-right" style=" padding-right: 5px;"></i> <a href="<?php echo base_url();?>products">Products</a></li>
                            <li><i class="fa fa-arrow-right " style=" padding-right: 5px;"> </i> <a href="<?php echo base_url();?>gallery">Gallery</a></li>
                            <li><i class="fa fa-arrow-right" style=" padding-right: 5px;"></i> <a href="<?php echo base_url();?>contact">Contact Us</a></li>
                            <!--<li><a href="#">Terms of Use</a></li>-->
                        </ul>
                    </div>
                </div>
                <!--<div class="col-md-6 col-lg-3 footer_widget">-->
                <!--    <div class="inner">-->
                <!--        <h4>Recent Posts</h4>-->
                <!--        <div class="media">-->
                <!--            <a href="#">-->
                <!--                <img src="assets1/img/recent1.jpg" class="d-flex mr-3" alt="">-->
                <!--            </a>-->
                <!--            <div class="media-body">-->
                <!--                <h5>-->
                <!--                    <a href="#">Curling irons are as individual as the women</a>-->
                <!--                </h5>-->
                <!--                <span>June 22, 2017</span>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="media">-->
                <!--            <a href="#">-->
                <!--                <img src="assets1/img/recent2.jpg" class="d-flex mr-3" alt="">-->
                <!--            </a>-->
                <!--            <div class="media-body">-->
                <!--                <h5>-->
                <!--                    <a href="#">Curling irons are as individual as the women</a>-->
                <!--                </h5>-->
                <!--                <span>June 22, 2017</span>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--        <div class="media">-->
                <!--            <a href="#">-->
                <!--                <img src="assets1/img/recent3.jpg" class="d-flex mr-3" alt="">-->
                <!--            </a>-->
                <!--            <div class="media-body">-->
                <!--                <h5>-->
                <!--                    <a href="#">Curling irons are as individual as the women</a>-->
                <!--                </h5>-->
                <!--                <span>June 22, 2017</span>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="col-md-6 col-lg-4 footer_widget">
                    <div class="inner">
                        <h4>STAY IN TOUCH</h4>
                        <!--<h5>Flat Pro, Inc.</h5>-->
                        <p><?php if(isset($address) && $address!="") echo $address;?></p>
                        <h4>Newsletter</h4>
                        <form action="<?php echo base_url();?>website/subscribe" method="post" class="nw_form">
                            <input placeholder="Enter your email" type="email" name="email">
                            <button><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright-txt">
                        © 2019 <?php if(isset($name) && $name!="") echo $name;?>. All Rights Reserved.
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                   <p>Powered By:<a href="https://redberryglobals.com/">Redberry Global Solution LLP</a> </p>
                </div>
            </div>
        </div>
    </div>
</footer>
         <!--Required JS files-->
<script src="<?php echo base_url();?>assets1/js/jquery-2.2.4.min.js"></script>
<script src="<?php echo base_url();?>assets1/js/vendor/popper.min.js"></script>
<script src="<?php echo base_url();?>assets1/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets1/js/vendor/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets1/js/vendor/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets1/js/vendor/jquery.barfiller.js"></script>
<script src="<?php echo base_url();?>assets1/js/vendor/loopcounter.js"></script>
<script src="<?php echo base_url();?>assets1/js/vendor/slicknav.min.js"></script>
<script src="<?php echo base_url();?>assets1/js/active.js"></script>