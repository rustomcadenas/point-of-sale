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
                            <button type="button" class="btn btn-primary mr-10" @click="productModal = true"> Add Product</button>
                            <button type="button" class="btn btn-primary" @click="categoryModal=true">Add Category</button>
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
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Jacob</td>
                                                        <td>Thornton</td>
                                                        <td>@fat</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Larry</td>
                                                        <td>the Bird</td>
                                                        <td>@twitter</td>
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
    var application = new Vue({
        el: "#products",
        data:{
            pageHeader: "Products",
            productModal: false,
            modalActionBtn: "Save",
            modalTitle: "Add New Product",
            categoryModal: false

        },
        methods:{

        },
        created: function(){

        }
    });

</script>
