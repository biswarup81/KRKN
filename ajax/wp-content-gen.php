<?php
include_once "../inc/datacon.php";
if(isset($_GET['page_id'])) {
    $id = $_GET['page_id'];
    //echo "id is".$id;
    $sql ="SELECT a.`row_id`, a.`par_row_id`, a.`has_sub_menu`, a.`name`, a.`disp_name`, a.`menu_type`, a.`url`, a.`order`, a.`active_flg`, 
			a.`created`, a.`created_by`, a.`last_upd_by`, a.`last_upd_dt` , b.`content`
			FROM `pg_navigation_menu` a, pg_web_content b 
			WHERE a.`row_id`= b.`page_id` and a.`row_id` = '".$id."' and a.`active_flg` = 1";
    //$sql = "select content from pg_web_content where page_id=".$id;
    //echo $sql;
    $result = mysql_query($sql) or die(mysql_error());
    $content = "Content not defined.. Contact Administrator";
    $display_name = "Page is not defined.";
    if(mysql_num_rows($result)){
    while($row = mysql_fetch_array($result)){
        $content = $row['content'];
        $display_name = htmlspecialchars($row['disp_name']);
    }
    }
?>

<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient"><?php echo $display_name; ?></h2>
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
