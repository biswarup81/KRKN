<?php
if(isset($_GET['page_id'])) {
    $id = $_GET['page_id'];
    //echo "id is".$id;
} else { echo "id not set"; $id = "0"; }
?>
<?php if ($id == 1) {?>
<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">About Our College</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
          <p>Kandra Radhakanta Kundu Mahavidyalaya was established on 16 March, 2001 in the village of Kandra, a land hallowed by the memories of Jnanadas the Vaishanavite poet, and venerated as a veritable Vrindavan incognito. The only institution of higher education under the Ketugram Police Station in the district of Burdwan owes its origin to the benevolence of Sri Amarchand Kundu, an eminent social worker after whose father the college is named. </p>
<p>One looks back nostalgically to recount how the college saw the light of day with its graduation course in the morning section of Kandra Jnanadas Memorial High School in the 2001-02 session with only 145 students of the Arts stream. The college soon came to acquire its own building. It was inaugurated on 21 July 2002 by the then Minister of Higher Education, Sri Satyasadhan Chakraborty. </p>
<p>This is a UGC-recognised college. Its four main buildings proudly bear the names of saints and scholars: Jnanadas Bhavan, Chandidas Bhavan, Nayan Shah Darbesh Bhavan, and Sir Syed Ahammad Bhavan. The ground floor of the Jnanadas Bhavan has a spacious classroom named Tarashankar Hall, the NCC office at the Netaji Hall and the Vivekananda Gymnasium Hall in the Department of Physical Education. The first floor has a scientifically designed Rabindra Seminar Hall, a well equipped Office, Principal's chamber and IQAC office at the Vidyasagar Hall and the Radhakrishnan Conference Hall. The second floor of this Bhavan has the Mahaprabhu Hall and a class room named Joydeb Hall that houses the NSS section.</p>
<p>The Chandidas Bhavan has in the ground floor common rooms for boys and girls, alumni's room, and the departments of Education, Philosophy, Political Science and Economics. In the first floor we have Professors' Room and Department of English, Department of Sanskrit in the Paramahansa Hall and a modern spacious classroom in the Sharat Hall. The second floor has the Srimadhusudan Hall and the large Bankim Hall.</p>
<p>In the ground floor of the Nayan Shah Darbesh Bhavan we have Guest Room, Language Lab, Students' Union in the Azad Hall, a Geography Lab furnished with modern equipment in the Gopal Das Hall, Girish Mancha, Nibedita Hall and the Department of Geography. In the first floor we have the Department of History, Department of Bengali, a spacious classroom called Nazrul Hall, Jibanananda Examination Control Room, Computer Lab in the Aryabhatta Hall, the NAAC office, Ladies' Guest Room and the Rammohan Library. In the second floor there are classrooms. </p>
<p>The Sir Syed Ahammad Bhavan has been built under the MSDP Project of the West Bengal Government. It has got seven classrooms and the Department of Mass Communication & Journalism in the first floor. The recent addition of a scientific Audio Visual Lab has been an attractive feature of this department.</p>
<p>The Department of Physical Education is equipped with a modern multi-gymnasium and state-of-the-art sports gear. It has an added facility of physiotherapy. The GIS lab of the Department of Geography is provided with modern equipment. In Geography and other departments Smart Boards are used while giving lessons. The college library has a valuable collection, thanks to the keen interest of the authorities in its enrichment. The Rabindra Seminar Hall is another attractive feature of the college. The classrooms in the Tarashankar Hall, Nazrul Hall, Bankim Hall, and Sharat Hall are provided with microphone facility. Cultural programmes are held in the Girish Mancha. </p>
<p>The local administration has provided much help by planting numerous trees to develop the greenery in the college and also by making arrangements for drinking water supply. A nice portal has been built at the college entrance with aids from the local area development fund of the Hon'ble MLA Sheikh Shahnawaz Saheb. A new building is being constructed with the grant-in-aid of the State Government.</p>
<p>Presently this college, affiliated to the University of Burdwan, offers Graduation Pass Courses in the following subjects: Bengali, English, Sanskrit, History, Geography, Economics, Political Science, Environmental Science, Physical Education and Philosophy. Physics, Chemistry and Mathematics as the Pass Subjects would be introduced in this year. Honours Courses are offered in Bengali, English, History, Geography, Sanskrit, Mass Communication & Journalism and Education. Honours course in Mathematics would be started from this year. The undergraduate studies of the college are carried on efficiently by the able Governing Body in collaboration with its accomplished teachers.</p>
<p>The Kandra Radhakanta Kundu Mahavidyalaya aspires to play a leading role in building a progressive society by imparting proper education as well as lessons in self-reliance to bring about complete intellectual development of its students. It is a matter of pride that the college has been visited by the NAAC and accredited with Grade B. The UGC prescribed Semester system has been introduced and successfully implemented in the academic session 2017-18. Finally, it is very heartening to announce the introduction of Science stream in the coming session which will bring our beloved college at a par with other colleges in essential features.</p>

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
<div class="container clearfix padding-off">
        <div class="section-head text-center">
        		<h2 class="section-heading text-gradient">Aims and Objectives</h2>
        </div>
        <div class="col-md-12 pull-left text-justify">
<p>The Kandra Radhakanta Kundu Mahavidyalaya aspires to play a leading role in building a progressive society by imparting proper education as well as lessons in self-reliance to bring about complete intellectual development of its students. The mission of the College is to disseminate higher education to the youth, especially women and the minority community so that they can face different challenges of life with full confidence and competence. </p>        
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