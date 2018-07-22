<?php 
$con1 = mysqli_connect("localhost","kandrark_inkandr","login@123#","kandrark_inkandra_db");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$news =  mysqli_query($con1,"SELECT * FROM `news` where is_deleted = 'N' and is_active='Y' order by created_on desc");

?>

<div class="container clearfix padding-off">
	<div class="section-head text-center">
		<h2 class="section-heading text-gradient">Notice</h2>
    </div>
    <div class="copyright col-lg-12 clearfix">

            <div class="container clearfix padding-off">
             <?php while($rows1=mysqli_fetch_array($news,MYSQLI_ASSOC)){?>		
            		<div class="col-lg-6"><strong><?php echo $rows1['news_title']; ?></strong></div>
            		<div class="col-lg-6"><strong><a class="btn-smll" target="_blank" href="/sample_admin/upload/news/<?php echo $rows1['poster'] ?>">DOWNLOAD</a></strong></div>
             <?php }?>      
                    
            </div>
	</div>
</div>