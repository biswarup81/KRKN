<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php'; 
$page_id = "1"; //TODO Change this to get the id from runtime
?>
<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';?>
<div class="header-pagging-add"></div>
<section id = "about-us" ><p>Loading..</p></section>












<br>


<div class="clearfix"></div>
<?php include_once './inc/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){
	$("#about-us").addClass("section clearfix about-principal-voice krk-bg-light box-shadow");
	$("#about-us").load("./ajax/about_us.php?page_id=<?php echo $page_id?>");
});
</script>
</body>
</html>
