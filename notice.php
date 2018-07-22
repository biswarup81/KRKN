<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php'; ?>

<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';?>
<div class="header-pagging-add"></div>

<section id = "news" ><p>Loading..</p></section>
<br>
<div class="clearfix"></div>
<?php include_once './inc/footer.php';?>
<script type="text/javascript">
$(document).ready(function(){
	
	$("#news").load("./ajax/wp-content-notice.php?page_id=14");
});
</script>
</body>
</html>
