<?php 

$sql_menu = "SELECT `row_id`, `par_row_id`, `has_sub_menu`, `name`, `disp_name`, `menu_type`, `url`, `order`, `active_flg`, `created`, `created_by`, `last_upd_by`, `last_upd_dt` FROM `pg_navigation_menu` WHERE `par_row_id` is NULL and `has_sub_menu` = 1";
$result = mysql_query($sql_menu) or die(mysql_error());	

$con1 = mysqli_connect("localhost","kandrark_inkandr","login@123#","kandrark_inkandra_db");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$galleries =  mysqli_query($con1,"SELECT * FROM kandrark_inkandra_db.gallery where is_deleted = 'N' order by created_on desc");


?>
<header class="navbar  navbar-fixed-top header">
<div class="container-fluid bg-blue header-top">
		<div class="container">
        		<div class="col-lg-7   header-top-col pull-left">
                <div class="site-title">Kandra Radhakanta Kundu Mahavidyalaya (NAAC Accredated B Grade College)</div>
                <!--<a href="tel:+91 (03453) 273372"><span class="glyphicon glyphicon-earphone"></span> <strong>+91 (03453) 273372</strong></a>-->
                <!--<a href="mailto:info@kandrarkkmahavidyalaya.org"><span class="glyphicon glyphicon-envelope"></span> <strong>info@kandrarkkmahavidyalaya.org</strong></a>-->
                </div>
                <div class="header-top-nav pull-right">
                		<ul class="">
                       	<li><a href="./notice.php">Notice	</a></li>
                        <li><a href="./_SSR/NAAC_SSR.pdf" target="_blank">SSR	</a></li>	 
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Photo Gallery <b class="caret"></b></a>
                        <ul class="dropdown-menu"> 
                        <?php 
                        while($rows1=mysqli_fetch_array($galleries,MYSQLI_ASSOC)){
                        ?>
                                <li><a href="./gallery.php?gallery_id=<?php echo $rows1['gallery_id']?>"><?php echo $rows1['gallery_title']?></a></li>
                        <?php }
                        
                        mysqli_close($con1);?>
							</ul>

                        </li>		
                        </ul>

                </div>
                
             
                
        </div>
</div>
<div class="container-fluid nav-wrapper navbar">

<div class="container clearfix">
    <div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      
      <a class="navbar-brand logo" href="index.php"><img src="images/logo.gif" width="195" height="50"></a> 
      </div>
    <div class="navbar-collapse collapse pull-right">
      <ul class="nav navbar-nav">
      	<li class="active"><a href="./">Home</a></li>
      	<?php if(mysql_num_rows($result)){
				
				while($row=mysql_fetch_array($result)){
					$row_id = $row['row_id'];
			?>
			<li class="dropdown"> <a href="<?php echo $row['url'];?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo htmlspecialchars($row['disp_name'])?><b class="caret"></b></a>
          <ul class="dropdown-menu">
          <?php 
          if($row['menu_type'] == "Department"){
              $sub_query1 = "SELECT * FROM `pg_department` ";
              $sub_result1 = mysql_query($sub_query1) or die(mysql_error());
              if(mysql_num_rows($sub_result1)){
                  while($sub_row1=mysql_fetch_array($sub_result1)){
                      ?>
                        <li><a href="content-department.php?dept_id=<?php echo $sub_row1['row_id'];?>"><?php echo htmlspecialchars($sub_row1['name'])?></a></li>
          <?php }}
          } else {
          $sub_query = "SELECT `row_id`, `par_row_id`, `template_id`, `has_sub_menu`, `name`, `disp_name`, `menu_type`, 
            `url`, `order`, `active_flg`, `created`, `created_by`, `last_upd_by`, `last_upd_dt` FROM `pg_navigation_menu` WHERE `par_row_id` = '".$row_id."'";
          $sub_result = mysql_query($sub_query) or die(mysql_error());
          if(mysql_num_rows($result)){
          	while($sub_row=mysql_fetch_array($sub_result)){ 
          	    ?>
          	   
           <li><a href="<?php echo $sub_row['url'];?>?page_id=<?php echo $sub_row['row_id'];?>"><?php echo htmlspecialchars($sub_row['disp_name'])?></a></li>
          <?php }}}?>  
          </ul>
</li>
			<?php }}?>

	
</ul>
    </div>
    <!--/.nav-collapse --> 
  </div>
  
  </div>
</header>