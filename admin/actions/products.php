<?php 

$connect = new PDO("mysql:host=localhost; dbname=pos", "root", "");
$received_data = json_decode(file_get_contents("php://input"));

$data = array();

if($received_data){
    if ($received_data -> action == 'act_fetchAllCategory'){
        $query = "select id, product_category from tbl_product_category order by id desc";
        $stmt = $connect -> prepare($query);
        $stmt -> execute();
        while ($row = $stmt -> fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        echo json_encode($data);
    }
    if ($received_data -> action == 'act_deleteCategory') {
        $id = $received_data -> id;
        $query = "delete from tbl_product_category where id = '" . $id ."'";
        $stmt = $connect -> prepare($query);
        if($stmt -> execute()){
            $output = array(
                "message" => "Category Successfully Deleted.",
                "type" => "success"
            );
        }else{
            $output = array(
                "message" => "Something went wrong deleting the category. please try again later.",
                "type" => "error"
            );
        }
      
        echo json_encode($output);
    }
    // ==================================================== addCategory
    if($received_data -> action == 'addCategory'){
        $data = array(
            'productCategory' => $received_data -> productCategory            
        );
        $query = "insert into tbl_product_category (product_category) values( :productCategory)";
        $stmt = $connect -> prepare($query);
        if($stmt -> execute($data)){
            $output = array(
                'message' => 'Category Inserted',
                'type' => 'success'
            );
        }else{
             $output = array(
                'message' => 'Error. Category name might be already existed.',
                'type' => 'error'
            );
        }
       
        echo json_encode($output);
    }
}else{
    echo "Fuck that shit out of here!. ";
}
  

?>
