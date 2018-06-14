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

<section id = "principal_desk"  class="section clearfix about-principal-voice krk-bg-light box-shadow">
    <p>Loading..</p>
</section>
<br>
<div class="clearfix"></div>
<?php include_once './inc/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){
	$("#principal_desk").addClass("section clearfix about-principal-voice krk-bg-light box-shadow");
	$("#principal_desk").load("./ajax/wp-content-principal-desk.php?page_id=<?php echo $page_id?>");
});
</script>
</body>
</html>