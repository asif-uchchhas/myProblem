
<?php
//Include database configuration file
include_once 'database.php';
?>

<?php



/*if(isset($_POST["container_name"]) && !empty($_POST["container_name"])){
$sql = "SELECT * FROM tbl_purchase_stock WHERE container_name = '".$_POST['container_name']."'";
$result = $mysqli->query($sql);

if (!$result) {
    trigger_error('Invalid query: ' . $mysqli->error);
}

}
*/


if(isset($_POST["container_name"]) && !empty($_POST["container_name"])){
    

               
    
    //Get all state data
    $query = $mysqli->query("SELECT * FROM tbl_purchase_stock WHERE container_name = '".$_POST['container_name']."' ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select a container</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['supplier_name'].'">'.$row['supplier_name'].'</option>';
        }
    }
    
 else{
        echo '<option value="">supplier not available</option>';
    }
}


if(isset($_POST["supplier_name"]) && !empty($_POST["supplier_name"])){
    //Get all city data
    $query = $mysqli->query("SELECT * FROM tbl_purchase_stock WHERE supplier_name = '".$_POST['supplier_name']."' ");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display cities list
    if($rowCount > 0){
        echo '<option value="">Select product</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['product_name'].'">'.$row['product_name'].'</option>';
        }
    }else{
        echo '<option value="">product not available</option>';
    }
}
?>
