<!-- section carsoul-section-panel clrfix notcbg-bb -->
<?php 
if(isset($_GET['id'])) { 
    $id = $_GET['id'];
    echo $id;
    if($id == "techer-list"){
        include_once './ajax/teacher_list.php';
    }
}
else { echo "id not set"; $id = "0"; }
?>
