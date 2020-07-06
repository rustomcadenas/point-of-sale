<?php 

$connect = new PDO("mysql:host=localhost; dbname=pos", "root", "");
$received_data = json_decode(file_get_contents("php://input"));

$data = array();

if($received_data){
    if($received_data -> action == 'addCategory'){
        $data = array(
            'productCategory' => $received_data -> productCategory            
        );
        $query = "insert into tbl_product_category (product_category, active) values( :productCategory)";
        $stmt = $connect -> prepare($query);
        $stmt -> execute($data);
        $output = array(
            'message' => 'Category Inserted'
        );
        echo json_encode($output);
    }
}else{
    echo "Fuck that shit out of here!. ";
}
  

?>
