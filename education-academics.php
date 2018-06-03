<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php'; 
$course_id = "1"; //TODO Change this to get the id from runtime
?>

<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';?>
<div class="header-pagging-add"></div>
<!-- Carousel ================================================== -->
<div id="" class="inner-page-banner clearfix full-width pull-left">
	<div class="inner-page-banner-bg full-width pull-left">
    <div class="innre-bann-img"><img src="images/bgicon.png" width="2374" height="1158" alt="img" title="img"></div>
    		<div class="container">
            		<h1 class="banner-heading">Department  of Education</h1>
            </div>
    </div>
</div>
<!-- /.carousel -->
<section class="main-section section clearfix krk-bg-light">
		<div class="container  clearfix padding-off transparent-bg">
        		<div class="content-back full-width pull-left">
                
                <div class="faculties-list-row clearfix">
                		<div class="faculties-col col-lg-4 col-md-4 col-xs-12 pull-left ">
                        <div class="faculties-col-inner col-lg-12 pull-left padding-off">
                        		<div class="faculti-pic"><img src="images/fac-ben-5.jpg" width="220" height="220" alt="img" title="img"></div>
                                <h3 class="faculti-name text-gradient">Smt. Mousumi Dutta</h3>
                                <div class="faculti-qualification">M.A</div>
                                <div class="faculti-designation">Guest Lecturer</div>
                                <a class="btn-gradient btn btn-small" href="">View Resume</a>
                                </div>
                        </div>
                        	

                        <div class="faculties-col col-lg-4 col-md-4 col-xs-12 pull-left ">
                        <div class="faculties-col-inner col-lg-12 pull-left padding-off">
                        		<div class="faculti-pic"><img src="images/fac-ben-2.jpg" width="220" height="220" alt="img" title="img"></div>
                                <h3 class="faculti-name text-gradient">Habibur Rahaman Chowdhury</h3>
                                <div class="faculti-qualification">M.A</div>
                                <div class="faculti-designation">Guest Lecturer</div>
                                <a class="btn-gradient btn btn-small" href="">View Resume</a>
                                </div>
                        </div>

                        <div class="faculties-col col-lg-4 col-md-4 col-xs-12 pull-left ">
                        <div class="faculties-col-inner col-lg-12 pull-left padding-off">
                        		<div class="faculti-pic"><img src="images/fac-ben-3.jpg" width="220" height="220" alt="img" title="img"></div>
                                <h3 class="faculti-name text-gradient">Sri Achintya Santra</h3>
                                <div class="faculti-qualification">M.A</div>
                                <div class="faculti-designation">Guest Lecturer</div>
                                <a class="btn-gradient btn btn-small" href="">View Resume</a>
                                </div>
                        </div>
                        

                        
                        
                </div>
                
                </div>		
        </div>
</section>                


<section id = "section-research-activities" ><p>Loading..</p></section>
<section id = "section-academic-activities" ><p>Loading..</p></section>
<section id = "section-other-activities" ><p>Loading..</p></section>

<section id = "section-annual-assessment-report"> Loading..</section>

<section id = "section-departmental-notice" >Loading..</section>
<section id='section-other' >Loading..</section>


<div class="clearfix"></div>
<?php include_once './inc/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){
	$("#section-techer-list").addClass("main-section section clearfix krk-bg-light");
	$("#section-techer-list").load("./ajax/teacher_list.php?id=<?php echo $course_id?>");
	$("#section-research-activities").addClass("section carsoul-section-panel clrfix notcbg-bb");
	$("#section-research-activities").load("./ajax/research_activities.php?id=<?php echo $course_id?>");
	$("#section-academic-activities").addClass("section carsoul-section-panel clrfix notcbg-cc");
	$("#section-academic-activities").load("./ajax/academic_activities.php?id=<?php echo $course_id?>");
	$("#section-other-activities").addClass("section carsoul-section-panel clrfix notcbg-bb");
	$("#section-other-activities").load("./ajax/other_activities.php?id=<?php echo $course_id?>");
	$("#section-annual-assessment-report").addClass("section carsoul-section-panel clrfix notcbg-cc");
	$("#section-annual-assessment-report").load("./ajax/annual_assessment_report.php?id=<?php echo $course_id?>");
	$("#section-departmental-notice").addClass("section carsoul-section-panel clrfix notcbg-bb");
	$("#section-departmental-notice").load("./ajax/departmental_notice.php?id=<?php echo $course_id?>");
	$("#section-other").addClass("section carsoul-section-panel clrfix notcbg-cc");
	$("#section-other").load("./ajax/departmental_other.php?id=<?php echo $course_id?>");
	
});
</script>
</body>
</html>
