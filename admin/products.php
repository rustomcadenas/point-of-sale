<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php   include 'links/topLinks.php'; ?>
    <title>Products</title>  
</head>
<body>
<div id="products">
    <div id="wrapper">       
<?php include 'layouts/navbar.php';?>     
        <div id="page-wrapper">
        
                <div class="container-fluid">
                    <!-- PAGE HEADER -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">{{ pageHeader }}</h1>
                        </div>                     
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6 mt-10">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-10">
                            <button type="button" class="btn btn-primary mr-10" @click="open_productModal"> Add Product </button>
                            <button type="button" class="btn btn-primary mr-10" @click="open_CategoryModal"> Category </button>
                            <button type="button" class="btn btn-primary"> Supplier </button>
                        </div>
                    </div>
                    <!-- /.row -->
                    <br>
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Username</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Mark</td>
                                                        <td>Otto</td>
                                                        <td>@mdo</td>
                                                    </tr>                                                   
                                                </tbody>
                                            </table>
                                        </div>
                        </div> 
                    </div>        
                </div> 
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper --> 
        <?php include 'layouts/modal.php'; ?>   
    </div>  
    <!-- /#Products -->    
</body>
</html>
<?php   include 'links/bottomLinks.php'; ?>
<script>
     
     var products = new Vue({
        el: "#products",
        data:{           
            productModal: false,
            categoryModal: false,
            alrt_successCategory: false,
            alrt_errorCategory: false,
            drpdwn_categoryModal: false,
            allCategory: '',
            drpdwn_allCategory: '',  
            txt_productCategory: '',      
            pageHeader: "Products",
            modalActionBtn: "Save",
            modalTitle: "Add New Product",            
            alertMessage: ""
        },
        methods:{
            fetchAllCategory: function(){
                axios.post('actions/products.php', {
                    action: 'act_fetchAllCategory'
                }).then(function(response){
                    products.allCategory = response.data;                    
                });
            },
            close_productModal: function(){
                products.productModal = false;
                products.alrt_successCategory = false;
                products.alrt_errorCategory = false;
            },
            close_categoryModal: function(){
                products.alrt_successCategory = false;
                products.alrt_errorCategory = false;
                products.categoryModal = false;
            },
            open_CategoryModal: function(){
                products.txt_productCategory = '';
                products.categoryModal = true;
            },
            open_productModal: function(){
                products.productModal = true;
            },
            open_drpdwn_categoryModal: function(){
                products.drpdwn_categoryModal = true;
                products.alrt_successCategory = false;
                products.alrt_errorCategory = false;
            },
            close_drpdwn_categoryModal: function(){
                products.drpdwn_categoryModal = false;
            },
            addCategory: function(){
                if(products.txt_productCategory == ''){
                    products.alrt_successCategory = false;
                    products.alrt_errorCategory = true;
                    products.alertMessage = "Empty Fields!";
                }else{
                    axios.post("actions/products.php", {
                    action: 'addCategory',
                    productCategory: products.txt_productCategory
                    }).then(function(response){
                    if(response.data.type == 'success'){
                        products.drpdwn_categoryModal = false;
                        products.alrt_successCategory = true;
                        products.alrt_errorCategory = false;
                    }else{
                        products.alrt_successCategory = false;
                        products.alrt_errorCategory = true;
                    }
                    products.alertMessage = response.data.message;                     
                    products.fetchAllCategory(); 
                    products.txt_productCategory = '';                 
                    });
                }
           
            },
            deleteCategory: function(id){
               if (confirm("Are you sure you want to delete? ")){
                   axios.post("actions/products.php", {
                        action: 'act_deleteCategory',
                        id: id
                   }).then (function(response){
                    if(response.data.type == "success"){
                        products.alrt_successCategory = true;
                        products.alrt_errorCategory = false;
                    }else{
                        products.alrt_successCategory = false;
                        products.alrt_errorCategory = true;
                    }
                    products.alertMessage = response.data.message;                    
                    products.fetchAllCategory();                                     
                   });
               }
            }
            
        },
        created: function(){
            this.fetchAllCategory();
        }
    });

 

</script>

