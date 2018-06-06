<?php
include_once "../inc/datacon.php";
if(isset($_GET['page_id'])) {
    $id = $_GET['page_id'];
    //echo "id is".$id;
    
    $sql = "select content from pg_web_content where page_id=".$id;
    echo $sql;
    $result = mysql_query($sql) or die(mysql_error());
    $content = "Content not defined.. Contact Administrator";
    while($row = mysql_fetch_array($result)){
        $content = $row['content'];
    }
} else { echo "id not set"; $id = "0"; }
?>
<?php if ($id == 1) {?>
<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">About Our College</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
          <?php 
          echo $content;
          ?>
</div>
               
</div>

<?php } else if($id == 3) {?>
<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Aims and Objectives</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
<p>The Kandra Radhakanta Kundu Mahavidyalaya aspires to play a leading role in building a progressive society by imparting proper education as well as lessons in self-reliance to bring about complete intellectual development of its students. The mission of the College is to disseminate higher education to the youth, especially women and the minority community so that they can face different challenges of life with full confidence and competence. </p>        
        </div>
               
</div>
<?php } else if($id == 4) {?>
<div class="container clearfix">
    <div class="row featurette">
      <div class="col-md-12 pull-left text-justify">
        <h2 class="featurette-heading text-gradient">Various Committees</h2>
       

     <div class="conten-block clearfix">
   
<h4>NAAC Steering Committee</h4>
<p>1.	Dr. Jyostnasis Ghosh - Coordinator</p>
<p>2.	All Full Time Teachers - Members</p>
<h4>Admission Sub-Committee</h4>
<p>3.	Dr. Jyotsnasis Ghosh - Convenor</p>
<p>4.	All Full Time Teachers - Members</p>
<h4>Academic Sub-Committee</h4>
<p>1.	Sri Subrata Mandal - Convenor</p>
<p>2.	All Full Time Teachers - Members</p>
<h4>Library Sub-Committee</h4>
<p>1.	Sri Barun Mandal- Convenor</p>
<p>2.	All Full Time Teachers-Members</p>
<h4>Examination Sub-Committee</h4>
<p>1.	Sri Barun Mandal- Convenor</p>
<p>2.	Sri Avishek Mandal-Member</p>
<p>3.	Sri Swapan Ghosh-Member</p>
<p>4.	Smt Tandra Ghosh-Member</p>
<h4>Magazine Sub-Committee (College)</h4>
<p>1.	Sri Subrata Mandal-Convenor</p>
<p>2.	Sri Chandra Tapan Pal-Edit</p>
<p>3.	Sri Prabir Datta-Edit</p>
<p>4.	All Full-time Teachrs –Members</p>
<h4>Magazine Sub-Committee (Wall)</h4>
<p>1.	Sri Krishanu Adhikari-Convenor</p>
<p>2.	Dr. Ananda Dulal Bagdi-Member</p>
<p>3.	Sri Tapan Kumar Mondal-Member</p>
<p>4.	Sri Manabendra Das-Member</p>
<h4>Concession Sub-Committee</h4>
<p>1.	Dr. Ananda Dulal Bagdi-Convenor</p>
<p>2.	Sri Subrata Mandal-Member</p>
<p>3.	Sri Atanu Chaudhery- Member</p>
<p>4.	Sri Surajit Das- Member</p>
<p>5.	Sri Barun Mandal- Member</p>

<h4>Sports Sub-Committee</h4>
<p>1.	Dr. Jyostnasis Ghosh - Convenor</p>
<p>2.	All Teaching Staff-Members</p>
<h4>Women’s Cell</h4>
<p>1. Dr. Manjari Sarkar (Basu)-Convenor</p>
<p>2. Smt. Sashirekha Sarkar-Member</p>
<p>3. Smt. Sanchita Ghosh-Member</p>
<p>4. Smt. Tandra Ghosh-Member</p>
<p>5. Dr. Santwana Mandal-Member</p>
<h4>Seminar Sub-Committee</h4>
<p>1.	Sri Goutam Mondal</p>
<p>2.	All Teaching Staff-Members</p>
<h4>Anti-ragging Sub-Committee</h4>
<p>1.	Sri Barun Mondal-Convenor</p>
<p>2.	Sri Goutam Mandal-Member</p>
<p>3.	Smt. Amrita Mitra-Member</p>
<h4>ICT Sub-Committee</h4>
<p>1.	Dr. Somnath Chattopadhyay-Convenor</p>
<p>2.	All Teaching Staff -Members</p>
<h4>Grievance Redressal Cell</h4>
<p>1.	Sri Tapan Kumar Mondal-Convenor</p>
<p>2.	Dr. Somnath Chattopadhyay-Member</p>
<p>3.	Sri Krishanu Adhikari-Member</p>
<p>4.	Sri Ramendra Nath Roy-Member</p>

<h4>Research & Culture Sub-Committee</h4>
<p>1.	Dr. Manjari Sarkar (Basu)-Convenor</p>
<p>2.	All Full-time Teachers-Members</p>
<h4>Service Book Sub-Committee</h4>
<p>1.	Dr. Jyostnasis Ghosh - Convenor</p>
<p>2.	All Full-time Teachers-Members</p>

<h4>Students' Welfare Cell</h4>
<p>1.	Dr. Ananda Dulal Bagdi-Convenor</p>
<p>2.	All Full-time Teachers -Members</p>
<p>3.	Sri Atanu Chaudhury -Member</p>
<p>4.	Sri Jagannath Pal-Member</p>

<h4>Students' Counselling</h4>
<p>1.	Dr. Ananda Dulal Bagdi-Convenor</p>
<p>2.	All Full-time Teachers -Members</p>
<p>3.	Sri Atanu Chaudhury-Member</p>
<p>4.	Sri Jagannath Pal-Member</p>
<h4>Alumni Sub-Committee</h4>
<p>Sri Subrata Mandal-Convenor</p>	
<p>All Teaching Staff-Members</p>
<h4>Scholarship Sub-Committee</h4>
<p>Sri Ramendra Nath Roy-Convenor</p>
<p>All Teaching Staff-Members</p>

    


 
     </div>
        
        
      </div>
    </div>
  </div>
<?php } else  {?>
<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Not found</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
<p>Oops !! The page you are searching for is not found int he Server.</p>
        </div>
               
</div>
<?php }?>