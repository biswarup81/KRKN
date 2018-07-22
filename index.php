<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php'; ?>

<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';

$con1 = mysqli_connect("localhost","kandrark_inkandr","login@123#","kandrark_inkandra_db");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con1,"select * from gallery_image where gallery_id='4' and is_deleted='N'");
$count = 1;
?>

<div class="header-pagging-add"></div>
<!-- Carousel ================================================== -->
<div id="myCarousel" class="carousel slide slider-banner home-banner-slider">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <?php while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
        
        <li data-target="#myCarousel" data-slide-to="<?php echo $count; $count++;?>"></li>
       
      <?php }?>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/banner-1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
            
             <h1  class="text-gradient">Welcome to Kandra Radhakanta Kundu Mahavidyalaya</h1>
            </div>
          </div>
        </div>
        <?php $result = mysqli_query($con1,"select * from gallery_image where gallery_id='4' and is_deleted='N'");
        while($row1 = mysqli_fetch_array($result,MYSQLI_ASSOC)){?>
        <div class="item">
        
          <img  src="/sample_admin/upload/gallery/<?php echo $row1['image'] ?>" alt="<?php echo $row1['gallery_image_title']?>" >
          <div class="container">
            <div class="carousel-caption">
            <h1  class="text-gradient">Welcome to Kandra Radhakanta Kundu Mahavidyalaya</h1>
            </div>
          </div>
        </div>
        <?php } mysqli_close($con1);?>
        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><img src="images/arrow-left.png" width="20" height="37"></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><img src="images/arrow-right.png" width="20" height="37"></a>
    </div>
<!-- /.carousel -->
<!-- ================================================== -->
<section id = "principal_desk"  class="section clearfix about-principal-voice krk-bg-light box-shadow">
    <p>Loading..</p>
</section>
<!-- ================================================== -->
<!--section class="section carsoul-section-panel clrfix notcbg-aa">
		<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">General Notice</h2>
                </div>
                <div class="carsoul-wrapper-boxx clrfix carousel-panel carr-carousel slider-navigation">
                		<div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
        
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                       
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>

                </div> 
               
        </div>
</section-->

<!-- section class="section carsoul-section-panel clrfix notcbg-bb">
		<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Tender Notice</h2>
                </div>
                <div class="carsoul-wrapper-boxx clrfix carousel-panel carr-carousel slider-navigation">
                		<div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
        
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                       
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>

                </div> 
               
        </div>
</section-->

<!-- section class="section carsoul-section-panel clrfix notcbg-cc">
		<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Admission Noticee</h2>
                </div>
                <div class="carsoul-wrapper-boxx clrfix carousel-panel carr-carousel slider-navigation">
                		<div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
        
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                       
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>
                        <div class="col-lg-4 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        
                        <a href="">
                        <div class="new-notice amina">NEW</div>
                                <div class="noti-icijn"><img src="images/noticimg.png" width="313" height="319" alt="img" title="img"></div>
                        		<div class="carssu-name">Notice Name</div>
                                </a>
                                <a class="btn-smll" href="">View Notice</a>
                                </div>
                        </div>

                </div> 
               
        </div>
</section-->


<!--section class="section clearfix section-start-and-dooe">
			<div class="container clearfix padding-off">
            		<div class="col-lg-6 pull-left srt-dobn-col srt-dobn-col-left ">
                    		<div class="srt-dobn-col-inner clearfix">
                           		<div class="col-lg-6 col-sm-12 srt-dobn-img pull-left "><img src="images/bookss.png" width="250" height="187"></div>
                                <div class="col-lg-6 col-sm-12 pull-left">
                                <div class="tett">
                                			<h2>Start with a new Direction</h2>
                                            <div class="entry-content">
                                            <ul>
                                                <li>Build up career for the development of the country</li>
                                                <li>We inspire you to earn leadership</li>
                                            </ul>
                                            <a class="btn-gradient btn" href="">Learn More</a>
                                            </div>
                                            </div>
                                </div>
                            </div>
                    </div> 
                    <div class="col-lg-6 pull-right srt-dobn-col srt-dobn-col-right">
                    		<div class="srt-dobn-col-inner clearfix">
                            <div class="col-lg-6 col-sm-12 srt-dobn-img pull-right ">
                            <img src="images/report-imgg.jpg" width="1524" height="1460" alt="img" title="img">
                            </div>
                                <div class="col-lg-6 col-sm-12 pull-left">
                                <div class="tett">
                                			<h2>Click here to download self study Repodt</h2>
                                            <div class="entry-content">
                                            
                                            <a class="btn-gradient btn" href="">Download</a>
                                            </div>
                                            </div>
                                </div>
                            </div>
                    </div>
            </div>	
</section-->

<?php 
$con1 = mysqli_connect("localhost","kandrark_inkandr","login@123#","kandrark_inkandra_db");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$news =  mysqli_query($con1,"SELECT * FROM `news` where is_deleted = 'N' and is_active='Y' order by created_on desc");

?>
<section class="section news-section  clrfix" id="news_announcement">
		
                		<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">News and Announcements::</h2>
                </div>
                <div class="news-carsoul-wrapper clrfix news-carousel" >	
                <?php while($rows1=mysqli_fetch_array($news,MYSQLI_ASSOC)){?>			
					<div class="col-lg-3 carsoul-col-wrap pull-left">
                        <div class="carsoul-col-wrap-inner pull-left">
                        		<a href="">
                        		<div class="news-icon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></div>
                                <div class="news-name"><?php echo $rows1['news_title']; ?> </div>
                                </a>
                                <a class="btn-smll" target="_blank" href="/sample_admin/upload/news/<?php echo $rows1['poster'] ?>">View News</a>
                                </div>
                        </div>
                  <?php }?>      
                        
                      
                </div> 
               
        </div>

            
</section>

<br>


<div class="clearfix"></div>
<?php include_once './inc/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){
	$("#principal_desk").addClass("section clearfix about-principal-voice krk-bg-light box-shadow");
	$("#principal_desk").load("./ajax/wp-content-principal-desk.php?page_id=14");
	
});
</script>
</body>
</html>
