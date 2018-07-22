<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php'; ?>

<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';

if(isset($_GET['gallery_id'])){
$gallery_id = $_GET['gallery_id'];
$con1 = mysqli_connect("localhost","kandrark_inkandr","login@123#","kandrark_inkandra_db");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$galleries =  mysqli_query($con1,"select * from gallery where gallery_id='".$gallery_id."' and is_deleted='N'");
$result = mysqli_query($con1,"select * from gallery_image where gallery_id='".$gallery_id."' and is_deleted='N'");
$gallery_name = "";
while($rows1=mysqli_fetch_array($galleries,MYSQLI_ASSOC)){ 
    $gallery_name = $rows1['gallery_title'];
}

?>
<div class="header-pagging-add"></div>
<!-- Carousel ================================================== --> 

<!-- /.carousel --> 
<section class="inner-banner-panel clearfix">

</section>
<!-- ================================================== -->
<section class="section content-panel-sec content-page-inner-sec clearfix krk-bg-light box-shadow">
  <div class="container clearfix">
    <div class="row featurette">
      <div class="col-md-12 pull-left text-justify">
        <h2 class="featurette-heading text-gradient"><?php echo $gallery_name;?></h2>
       

     <div class="conten-block clearfix">

 		<div class="gallery-content-panel clearfix col-lg-12 padding-off">
             <div class="gallery-img-roww clearfix ">
             <?php 
             while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
             ?>
                		<div class="gallery-col col-lg-3 pull-left">
                        		<div class="gallery-col-inner col-lg-12 pull-left padding-off">
                                	<a class="light-box galler-link" href="/sample_admin/upload/gallery/<?php echo $row['image'] ?>"><img src="/sample_admin/upload/gallery/<?php echo $row['image'] ?>" width="800" height="600" alt="img" title="img"></a>	
                                </div>
                        </div>
             <?php } mysqli_close($con1);?>           
                       
             </div>
        </div>
 
     </div>
        
        
      </div>
    </div>
  </div>
</section>
<!-- ================================================== -->

<div class="clearfix"></div>
<?php } else { echo "Page not defined"; }?>
<?php include_once './inc/footer.php';?>
</body>
</html>
