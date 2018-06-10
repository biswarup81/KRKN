<?php
if(isset($_GET['dept_id'])) {
    $dept_id = $_GET['dept_id'];
    
    $sub_query1 = "SELECT * FROM `pg_staff_dept` where dept_id = ";
    $sub_result1 = mysql_query($sub_query1) or die(mysql_error());
    if(mysql_num_rows($sub_result1)){
        while($sub_row1=mysql_fetch_array($sub_result1)){
 ?>   
    
    <div class="container  clearfix padding-off transparent-bg">
    <div class="content-back full-width pull-left">
    
    <div class="faculties-list-row clearfix">
    <div class="faculties-col col-lg-4 col-md-4 col-xs-12 pull-left ">
    <div class="faculties-col-inner col-lg-12 pull-left padding-off">
    <div class="faculti-pic"><img src="images/fac-ben-1.jpg" width="220" height="220" alt="img" title="img"></div>
    <h3 class="faculti-name text-gradient">Dr. Ananda Dulal Bagdi</h3>
    <div class="faculti-qualification">M.A, B.Ed., Ph.D</div>
    <div class="faculti-designation">Assistant Professor</div>
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