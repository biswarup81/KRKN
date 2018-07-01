<?php
include_once "../inc/datacon.php";
if(isset($_GET['staff_id'])) {
    $staff_id = $_GET['staff_id'];
    $content = "Content not defined.. Contact Administrator";
    $display_name = "Page is not defined.";
    //echo "id is".$id;
    $sql1 = "SELECT b.filename, a.`row_id`, a.`title`, a.`fst_name`, a.`middle_name`, a.`last_name`, a.`dob`, a.`staff_id`, a.`email`, a.`mobile`, a.`job_role`,
                a.`created`, a.`created_by`, a.`last_upd_dt`, a.`last_upd_by`, a.`desig`, a.`qualification` FROM `pg_staff` a
                left outer join pg_staff_photo b on a.row_id = b.staff_id where a.row_id = ".$staff_id."
			 and ifnull(b.active_flg, 1) = 1";
    //echo "<div>".$sql1."</div>";
    
    $result = mysql_query($sql1)  or die(mysql_error());
    $count = 1;
    while ($row = mysql_fetch_array($result)) {
        $display_name = $row['title']. ' ' . $row['fst_name']. ' '.$row['middle_name']. ' '.$row['last_name']. ' ';
        $filename = $row['filename'];
        
        $count = $count + 1;
    }
    
    $sql ="SELECT `row_id`, `par_row_id`, `content` FROM `pg_staff_resume` where par_row_id ='".$staff_id. "'";
    //$sql = "select content from pg_web_content where page_id=".$id;
    //echo $sql;
    $result = mysql_query($sql) or die(mysql_error());
   
    if(mysql_num_rows($result)){
        while($row = mysql_fetch_array($result)){
            $content = $row['content'];
        }
    }
    
    
    ?>
<div class="container clearfix">
		<div class="section-head text-center">
        		<h2 class="section-heading text-gradient"><?php echo $display_name; ?></h2>
        </div>
      <div class="row featurette">
        
        <div class="col-md-4 pull-right principal-img">
          <div class="prin-img-box col-lg-12 pull-left"><img class="featurette-image img-responsive" src="/College-Office-Maintenance/media/photos/<?php echo $filename; ?>" alt=""></div>

 
        </div>
        <div class="col-md-8 pull-left text-justify">
<?php 
          echo html_entity_decode($content);
          ?>
   
        </div>
      </div>
</div>

<?php  
} else { echo "id not set"; $staff_id = "0";  ?>
<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Oops !! Content not found</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
         Please upload your resume to see the details.
</div>
               
</div>
<?php
}
?>
