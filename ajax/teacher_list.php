<?php
include_once "../inc/datacon.php";
$name = "";
$qualification= "";
$desig= "";
if(isset($_GET['dept_id'])) {
    $dept_id = $_GET['dept_id'];
    
    $sub_query1 = "SELECT staff_id FROM `pg_staff_dept` where dept_id = '".$dept_id."'";
    $sub_result1 = mysql_query($sub_query1) or die(mysql_error());
    ?>
   <?php
    if(mysql_num_rows($sub_result1)){
        ?>
        <div class="container  clearfix padding-off transparent-bg">
    <div class="content-back full-width pull-left">
    
    <div class="faculties-list-row clearfix">
    <?php
        
        while($sub_row1=mysql_fetch_array($sub_result1)){
        	$staff_id= $sub_row1['staff_id'];
    	//Get Staff Details 
    	$staff_details_q = "SELECT `row_id`, `title`, `fst_name`, `middle_name`, `last_name`, `dob`, `staff_id`, 
				`email`, `mobile`, `job_role`, `created`, `created_by`, `last_upd_dt`, `last_upd_by`, `desig`, `qualification` 
				FROM `pg_staff` WHERE `row_id` = '".$staff_id."' and status = 1";
    	//echo $staff_details_q;
    	$sub_result = mysql_query($staff_details_q) or die(mysql_error());
    	if(mysql_num_rows($sub_result)){
	    	while($sub_row1=mysql_fetch_array($sub_result)){
	    	    $staff_id = $sub_row1['row_id'];
	    	    $name = $sub_row1['title']." ".$sub_row1['fst_name']." ".$sub_row1['middle_name']." ".$sub_row1['last_name'];
	    		$qualification= $sub_row1['qualification'];
	    		$desig= $sub_row1['desig'];
	    	
    ?>
    <div class="faculties-col col-lg-4 col-md-4 col-xs-12 pull-left ">
    <div class="faculties-col-inner col-lg-12 pull-left padding-off">
    <?php //Get Profile Photo
    $staff_photo_q = "SELECT `row_id`, `staff_id`, `filename`, `active_flg`, `created`, `created_by`, 
                    `last_upd_dt`, `last_upd_by` FROM `pg_staff_photo` WHERE `staff_id` = '".$staff_id."' and `active_flg` = 1";
    $sub_result_pp = mysql_query($staff_photo_q) or die(mysql_error());
    if(mysql_num_rows($sub_result_pp)){
        while($sub_row_pp=mysql_fetch_array($sub_result_pp)){
            $filename = $sub_row_pp['filename'];
    ?>
    <div class="faculti-pic"><img src="/College-Office-Maintenance/media/photos/<?php echo $filename; ?>" width="220" height="220" alt="img" title="img"></div>
    <?php }}else{?>
    <div class="faculti-pic"><img src="images/profile.png" width="220" height="220" alt="img" title="img"></div>
    <?php  }?>
    <h3 class="faculti-name text-gradient"><?php echo $name;?></h3>
    <div class="faculti-qualification"><?php echo $qualification; ?></div>
    <div class="faculti-designation"><?php echo $desig; ?></div>
    <a class="btn-gradient btn btn-small" href="./content-resume.php?staff_id=<?php echo $staff_id?>">View Resume</a>
    </div>
    </div>
    
    <?php }}
    
        } 
    ?>
    </div>
    
    </div>
    </div><?php 
    } }else { echo "id not set"; $id = "0"; ?>
<div class="container  clearfix padding-off transparent-bg">
    <div class="content-back full-width pull-left">
    
    <p>Cotent is not set</p>
    
    </div>
    </div>
<?php } ?>