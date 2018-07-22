<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php';
if(isset($_GET['page_id'])){
    $page_id = $_GET['page_id'];
} else {
    $page_id = 0;
}

?>
<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';?>
<div class="header-pagging-add"></div>
<section class="inner-banner-panel clearfix">
<img src="images/about-us.jpg" width="1400" height="350" alt="img" title="img">
</section>
<section id = "info" ><p>Loading..</p></section>

<br>


<div class="clearfix"></div>
<?php include_once './inc/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){
	$("#info").addClass("section clearfix about-principal-voice krk-bg-light box-shadow");
	$("#info").load("./ajax/wp-content-gen.php?page_id=<?php echo $page_id?>");
});
</script>
</body>
</html>
