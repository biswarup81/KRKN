<?php
//include_once "./inc/datacon.php";
include_once './inc/header.php'; 
$page_id = "2"; //TODO Change this to get the id from runtime
?>
<body>
<!-- Fixed navbar -->
<?php include_once './inc/topnav.php';?>
<div class="header-pagging-add"></div>

<section id = "principal_desk"  class="section clearfix about-principal-voice krk-bg-light box-shadow">
    <div class="container clearfix">
      <div class="row featurette">
        
        <div class="col-md-4 pull-right principal-img">
          <div class="prin-img-box col-lg-12 pull-left"><img class="featurette-image img-responsive" src="images/princepal-img.png" alt=""></div>

 
        </div>
        <div class="col-md-8 pull-left text-justify">
<p>The village Kandra has a rich heritage of medieval Bengali literature and culture. Kandra is the birth place of the famous Vaishnava poet Jnanadas. The place carries some religious importance as well. However, not only Kandra but the whole of Ketugram (dominated by a population of minority, SC &ST) in Burdwan district remains educationally backward especially in terms of women education.</p>          
<p>Urged by the will to kindle the light of learning in the remote backward areas of Burdwan and adjoining Birbhum and Murshidabad districts, people wanted to establish a higher education centre in this region. There had been a ceaseless effort on the part of the local people to establish an Institute of Higher education here for a long time and ultimately they succeeded in their endeavour with the help of Sri Amar Chand Kundu, the noted social worker. Under the able leadership of the local academic community and the patronage of Sri Kundu, Kandra RadhaKanta Kundu Mahavidyalaya was founded on 16th March 2001.</p>         
<p>The college has undergone a remarkable change in all respects in the last few years. From its humble beginning on 16.03.01 with 145 students in the building of Kandra J.M High School, the College is steadily progressing in its course charted by its mission of higher education for the students of Burdwan and the adjoining districts. The College was permanently shifted to its own building constructed on its sprawling 5.27 acres of land on 21st. July 2002.</p>         
<p>The mission of the College is to disseminate higher education to the youth, especially women and the minority community so that they can face different challenges of life with full confidence and competence. We are determined to realise our vision at any cost.</p>       
       <h2 class="featurette-heading text-gradient">Dr. Mrinal Kanti Chattopadhyay</h2>
        <h4>Principal</h4>
        </div>
      </div>
      </div>
      </section>










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
