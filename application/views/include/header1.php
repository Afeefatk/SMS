<?php
 $page = $this->uri->segment(1);
?>
<style>
    	.burger
	{
	    padding: 12px;
    background: #000000;
    text-align: right;
    margin: 0px;
    border: 1px solid #f5ac01;
    margin-bottom: 10px;
	}
    
</style>
  <script src="<?php echo base_url();?>assets/js/vendor/jquery-2.1.4.min.js"></script>
  <script>
 
   $(document).ready(function () {
    //select the POPUP FRAME and show it
    $("#popup").hide().fadeIn(1000);

    //close the POPUP if the button with id="close" is clicked
    $("#close").on("click", function (e) {
        e.preventDefault();
        $("#popup").fadeOut(1000);
    });
});
  </script>
   <style>
  @media (max-width:768px){ 
      #popup {
   
    left: 16% !important;
    transform: translate(-9%, 1%) !important;    top: 54%!important;
}
      
  }
  .unselectable {
  -webkit-user-select: none;  /* Chrome all / Safari all */
  -moz-user-select: none;     /* Firefox all */
  -ms-user-select: none;      /* IE 10+ */
  user-select: none;          /* Likely future */       
}
/*we need to style the popup with CSS so it is placed as a popup does*/
#popup {
    display:none;
    position:absolute;
    margin:0 auto;
    top: 31%;
    left: 22%;
    transform: translate(5%, 1%);    z-index: 999;
} 
  </style>
<header class="header">
	   <!--<div id="popup" class="popup panel">-->
        
    <!--        <button id="close" style="float: right;background:  #000;border:  none;color:  #fff;padding:7px 15px  4px 15px;    text-transform: uppercase;-->
    <!--   font-size: 13px; font-family: Arial, Helvetica, sans-serif;">Close</button>-->
      
        <!-- and here comes the image -->
    <!--  <a href="https://www.amazon.in/ref=assoc_aax_fallback_300x250?tag=rbgl-21&amp;linkCode=ur8" target="_blank">  <img class="center-block" src="<?php echo base_url();?>images/popup_new.jpg" style=" width: 100%;box-shadow: 0px 0px 50px 2px #000;" alt="popup"></a>-->

            
            <!-- Now this is the button which closes the popup-->
        
						
            
            <!-- and finally we close the POPUP FRAME-->
            <!-- everything on it will show up within the popup so you can add more things not just an image -->
    <!--</div>	-->
    
			<div class="top_bar">
				<div class="container">
				    	<div class="row">
				    	    <div class="col-lg-8"></div>
				    	    <div class="col-lg-4"><p style=" float: left; color: #ccc;margin-right: 15px;padding-top: 10px;">Translate this page:</p>
                        <div id="google_translate_element"></div>
                        </div>
                        </div>
					<div class="row">
							<div class="col-lg-4">
							
										<a href="#">
									<img src="<?php echo base_url();?>images/logo.png" alt="">
										</a>
									
						</div>
						 <div class="col-lg-8">
						     <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-7424276639225433",
          enable_page_level_ads: true
     });
</script>
						      <a href="https://www.amazon.in/ref=assoc_aax_fallback_300x250?tag=rbgl-21&amp;linkCode=ur8" target="_blank"> <img src="<?php echo base_url();?>images/add_amazon.gif"  style="width: 100%" alt=""></a>
							  
							    	<div class="burger">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
					</div>
				
				</div>		
			</div>

			<!-- Main Menu -->
			<div class="main_menu">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
								<div class="main_menu_content">
									<ul class="main_menu_list">
										<!--<li class="active hassubs">-->
										<li class="<?php if($page ==''){echo 'active';}?>">
											<a href="<?php echo base_url();?>">home
											</a>
										
										</li>
										<li class="<?php if($page =='home_loan'){echo 'active';}?>"><a href="<?php echo base_url();?>home_loan">Home Loan
											
										</a></li>
										<li class="<?php if($page =='personal_loan'){echo 'active';}?>"><a href="<?php echo base_url();?>personal_loan">Personal Loan
											
										</a></li>
										<li class="<?php if($page =='loan_against_property'){echo 'active';}?>"><a href="<?php echo base_url();?>loan_against_property">LAP
											
										</a></li>
										<li class="<?php if($page =='business_loan'){echo 'active';}?>"><a href="<?php echo base_url();?>business_loan">Business Loan
											
										</a></li>
										<li class="<?php if($page =='gold_loan'){echo 'active';}?>"><a href="<?php echo base_url();?>gold_loan">Gold Loan
											
										</a></li>
										<li class="<?php if($page =='car_loan'){echo 'active';}?>"><a href="<?php echo base_url();?>car_loan">Car loan
											
										</a></li>
										<li class="<?php if($page =='credit_card'){echo 'active';}?>"><a href="<?php echo base_url();?>credit_card">Credit card
											
										</a></li>
										<li class="<?php if($page =='insurance'){echo 'active';}?>"><a href="<?php echo base_url();?>insurance">INSURANCE
											
										</a></li>
										<li class="<?php if($page =='news'){echo 'active';}?>"><a href="<?php echo base_url();?>news">News
											
										</a></li>
										<li class="<?php if($page =='about'){echo 'active';}?>"><a href="<?php echo base_url();?>about">About US 
											
										</a></li>
										<li class="<?php if($page =='contact'){echo 'active';}?>"><a href="<?php echo base_url();?>contact">contact
											
										</a></li>
									</ul>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Menu -->

			<div class="menu">
				
				<ul class="menu_list">
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>">home</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>fundsrajamanagement/home_loan">home loan</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>personal_loan">Personal loan</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>loan_against_property">Loan Against Property</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>business_loan">Business Loan</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>gold_loan">gold loan</a>
								</div>
							</div>
						</div>
					</li>
						<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>car_loan">car loan</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>credit_card">credit card</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>insurance">insurance</a>
								</div>
							</div>
						</div>
					</li>
						<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>news">News</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>about">about</a>
								</div>
							</div>
						</div>
					</li>
					<li class="menu_item">
						<div class="container">
							<div class="row">
								<div class="col">
									<a href="<?php echo base_url();?>contact">contact</a>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</header>
		<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
	
