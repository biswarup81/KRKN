<?php
include_once "../inc/datacon.php";

?>




<?php 
   $query = "SELECT * FROM `pg_useful_link`" ;
   //echo $query;
   $result = mysql_query($query) or die(mysql_error());
   while($row = mysql_fetch_array($result)){ ?>
       
       <div class="addre-row"><a style="color:#ffffff; background-color:#337ab7" href="<?php echo $row['url']?>"><?php echo $row['name']?></a></div>
<?php       
   }
?>


        