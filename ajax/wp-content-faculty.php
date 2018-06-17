<?php
include_once "../inc/datacon.php";
if(isset($_GET['staff_id'])) {
    $id = $_GET['staff_id'];
    //echo "id is".$id;
    $sql ="SELECT `row_id`, `par_row_id`, `content`, `created_by`, `last_upd_dt`, `created`, `last_upd_by` FROM `pg_staff_resume` b
				where
				b.`par_row_id` = '".$id. "'" ;
    //$sql = "select content from pg_web_content where page_id=".$id;
    //echo $sql;
    $result = mysql_query($sql) or die(mysql_error());
    $content = "Content not defined.. Contact Administrator";
    $display_name = "Page is not defined.";
    if(mysql_num_rows($result)){
        while($row = mysql_fetch_array($result)){
            $content = $row['content'];
            //$display_name = htmlspecialchars($row['disp_name']);
        }
    }
    ?>

<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Resume</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
          <?php 
          echo html_entity_decode($content);
          ?>
</div>
               
</div>
<?php  
} else { echo "id not set"; $id = "0";  ?>
<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Oops !! Content not found</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
          The Page content is not found !! 
</div>
               
</div>
<?php
}
?>
