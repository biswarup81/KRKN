<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php'; ?>

<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';?>
<div class="header-pagging-add"></div>
<!-- Carousel ================================================== --> 

<!-- /.carousel --> 
<section class="inner-banner-panel clearfix">
<img src="images/contact-us.jpg" width="1400" height="350" alt="img" title="img">
</section>
<!-- ================================================== -->
<section class="section content-panel-sec content-page-inner-sec clearfix krk-bg-light box-shadow">
  <div class="container clearfix float-none col-lg-6 col-sm-6">
    <div class="row featurette">
      <div class="col-md-12 pull-left text-justify">
        <h2 class="featurette-heading text-gradient">Contact Us</h2>
       

     <div class="conten-block clearfix">
      <div class=" blockquote">Use the form below to send a message to us. We welcome your feedback and recommendations.  </div>
    
		<form class="form-panell">
        		<div class="form-group "><label>Name</label><input type="text" placeholder="Name" name="name" value=""></div>
                <div class="form-group"><label>Email</label><input type="email" placeholder="Email" name="email" value=""></div>
                <div class="form-group"><label>Phone</label><input type="tel" placeholder="Phone" name="phone" value=""></div>
                <div class="form-group"><label>Address</label><textarea placeholder="Address" name="address"></textarea></div>
                <div class="form-group"><label>Your Comment</label><textarea placeholder="Your Comment" name="comment"></textarea></div>
                <div class="form-group"><input type="submit" value="SUBMIT"></div>
        </form>
 
     </div>
        
        
      </div>
    </div>
  </div>
</section>
<!-- ================================================== -->

<div class="clearfix"></div>
<?php include_once './inc/footer.php';?>
</body>
</html>
