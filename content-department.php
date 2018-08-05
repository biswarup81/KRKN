<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php';
?>
<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';

$dept_id = "1"; 
$dept_name="Department not Defined !!";
if(isset($_REQUEST['dept_id'])){
    $dept_id = $_REQUEST['dept_id'];
    $query_dept = "SELECT `row_id`, `name`, `description`, `created_by`, `last_upd_dt`, `last_upd_by` FROM `pg_department` WHERE `row_id` = '".$dept_id."'";
    echo $query_dept;
    $result = mysql_query($query_dept) or die(mysql_error());
    while($row = mysql_fetch_array($result)){
        $dept_name = $row['description'];
    }
?>    



<div class="header-pagging-add"></div>
<!-- Carousel ================================================== -->
<div id="" class="inner-page-banner clearfix full-width pull-left">
	<div class="inner-page-banner-bg full-width pull-left">
    <div class="innre-bann-img"><img src="images/bgicon.png" width="2374" height="1158" alt="img" title="img"></div>
    		<div class="container">
            		<h1 class="banner-heading"><?php echo $dept_name?></h1>
            </div>
    </div>
</div>
<!-- /.carousel -->
<section id = "section-techer-list" ><p>Loading..</p></section>                
<section id = "section-research-activities" ><p>Loading..</p></section>
 <section id = "section-academic-activities" ><p>Loading..</p></section>


<section id = "section-departmental-notice" >Loading..</section>

<div class="clearfix"></div>


<?php include_once './inc/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){
	$("#section-techer-list").addClass("main-section section clearfix krk-bg-light");
	$("#section-techer-list").load("./ajax/teacher_list.php?dept_id=<?php echo $dept_id?>");
	$("#section-research-activities").addClass("section carsoul-section-panel clrfix notcbg-bb");
	$("#section-research-activities").load("./ajax/research_activities.php?dept_id=<?php echo $dept_id?>");
	$("#section-academic-activities").addClass("section carsoul-section-panel clrfix notcbg-cc");
	$("#section-academic-activities").load("./ajax/academic_activities.php?dept_id=<?php echo $dept_id?>");
	$("#section-other-activities").addClass("section carsoul-section-panel clrfix notcbg-bb");
	$("#section-other-activities").load("./ajax/other_activities.php?dept_id=<?php echo $dept_id?>");
	$("#section-annual-assessment-report").addClass("section carsoul-section-panel clrfix notcbg-cc");
	$("#section-annual-assessment-report").load("./ajax/annual_assessment_report.php?dept_id=<?php echo $dept_id?>");
	$("#section-departmental-notice").addClass("section carsoul-section-panel clrfix notcbg-bb");
	$("#section-departmental-notice").load("./ajax/departmental_notice.php?dept_id=<?php echo $dept_id?>");
	$("#section-other").addClass("section carsoul-section-panel clrfix notcbg-cc");
	$("#section-other").load("./ajax/departmental_other.php?dept_id=<?php echo $dept_id?>");
	
});
</script>
<?php } else {?>
<div class="header-pagging-add"></div>
<!-- Carousel ================================================== -->
<div id="" class="inner-page-banner clearfix full-width pull-left">
	<div class="inner-page-banner-bg full-width pull-left">
    <div class="innre-bann-img"><img src="images/bgicon.png" width="2374" height="1158" alt="img" title="img"></div>
    		<div class="container">
            		<h1 class="banner-heading">Opps !! Content for this page is not set !!</h1>
            </div>
    </div>
</div>
<?php }?>
</body>
</html>