<?php
include_once "../inc/datacon.php";
$name = "";
$qualification= "";
$desig= "";
if(isset($_GET['dept_id'])) {
    $dept_id = $_GET['dept_id'];
    
    $sub_query1 = "SELECT staff_id FROM `pg_staff_dept` where dept_id = '".$dept_id."'";
    $sub_result1 = mysql_query($sub_query1) or die(mysql_error());
    if(mysql_num_rows($sub_result1)){
        while($sub_row1=mysql_fetch_array($sub_result1)){
        	$staff_id= $sub_row1['staff_id'];
 ?>   
    
    <div class="container  clearfix padding-off transparent-bg">
    <div class="content-back full-width pull-left">
    
    <div class="faculties-list-row clearfix">
    <div class="faculties-col col-lg-4 col-md-4 col-xs-12 pull-left ">
    <div class="faculties-col-inner col-lg-12 pull-left padding-off">
    <?php 
    	//Get Staff Details 
    	$staff_details_q = "SELECT `row_id`, `title`, `fst_name`, `middle_name`, `last_name`, `dob`, `staff_id`, 
				`email`, `mobile`, `job_role`, `created`, `created_by`, `last_upd_dt`, `last_upd_by`, `desig`, `qualification` 
				FROM `pg_staff` WHERE `row_id` = '".$staff_id."'";
    	//echo $staff_details_q;
    	$sub_result = mysql_query($staff_details_q) or die(mysql_error());
    	if(mysql_num_rows($sub_result)){
	    	while($sub_row1=mysql_fetch_array($sub_result)){
	    		$name = $sub_row1['title']." ".$sub_row1['fst_name']." ".$sub_row1['middle_name']." ".$sub_row1['last_name'];
	    		$qualification= $sub_row1['qualification'];
	    		$desig= $sub_row1['desig'];
	    	}
    	}
    ?>
    <div class="faculti-pic"><img src="images/fac-ben-1.jpg" width="220" height="220" alt="img" title="img"></div>
    <h3 class="faculti-name text-gradient"><?php echo $name;?></h3>
    <div class="faculti-qualification"><?php echo $qualification; ?></div>
    <div class="faculti-designation"><?php echo $desig; ?></div>
    <a class="btn-gradient btn btn-small" href="">View Resume</a>
    </div>
    </div>
    
    
    </div>
    
    </div>
    </div>
<?php
    
        } } }else { echo "id not set"; $id = "0"; ?>
<div class="container  clearfix padding-off transparent-bg">
    <div class="content-back full-width pull-left">
    
    <p>Cotent is not set</p>
    
    </div>
    </div>
<?php } ?>