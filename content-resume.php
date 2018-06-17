<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php';
if(isset($_GET['staff_id'])){
    $staff_id = $_GET['staff_id'];
} else {
    $staff_id = 0;
}

?>
<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';?>
<div class="header-pagging-add"></div>

<section id = "info" ><p>Loading..</p></section>

<br>


<div class="clearfix"></div>
<?php include_once './inc/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){
	$("#info").addClass("section clearfix about-principal-voice krk-bg-light box-shadow");
	$("#info").load("./ajax/wp-content-faculty.php?staff_id=<?php echo $staff_id?>");
});
</script>
</body>
</html>
