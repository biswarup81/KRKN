<?php
include_once "../inc/datacon.php";
if(isset($_GET['dept_id'])) {
    $id = $_GET['dept_id'];
    //echo "id is".$id;
} else { //echo "id not set"; 
    $id = "0"; 
    
}
?>




<?php 
   $query = "SELECT `row_id`, `parent_dept_id`, `description`, `created_by`, `last_upd_dt`, 
        `last_upd_by` FROM `pg_department_research` WHERE `parent_dept_id` = ".$id ;
   //echo $query;
   $result = mysql_query($query) or die(mysql_error());
   $description = "";
   while($row = mysql_fetch_array($result)){
       $description = $row['description'];
   }
?>

<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Research Activities</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
          <?php 
          echo html_entity_decode($description);
          ?>
</div>
               
</div>