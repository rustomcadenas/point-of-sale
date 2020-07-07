<div v-if="productModal">
	<!-- Modal -->
	<div class="modal-mask">
		<div class="modal-wrapper">		
			<div class="modal-dialog"> 
				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" @click="close_productModal"> &times;</button>
					<h4 class="modal-title color-blue">{{ modalTitle }}</h4>
				</div>
				<div class="modal-body">

					<div class="row">
						<div class="col-sm-6 mt-10">
							<label>Barcode: </label>
							<input type="text" class="form-control">						 								 
						</div>	
						<div class="col-sm-6 mt-10">
							<label>Supplier Name: </label>
							<input type="text" class="form-control">						 								 
						</div>						
					</div>
					<div class="row">
						<div class="col-sm-6 mt-10">
							<label>Product Name: </label>
							<input type="text" class="form-control">							 
						</div>
						<div class="col-sm-6 mt-10">
							<label>Category: </label>
							<div class="form-group input-group">								 
								<select class="form-control">								 
									<option  v-for="row in allCategory" :value="row.id"> {{ row.product_category }} </option>
								</select>														
								<span class="input-group-btn">
									<button class="btn btn-default" type="button" @click="open_drpdwn_categoryModal"><i class="fa fa-plus"></i>
									</button>
								</span>
							</div>							 
						</div>
						<div class="col-sm-12 mt-10">
							<label>Description: </label>
							<textarea class="form-control" name="" id="" ></textarea>						 
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 mt-10">
							<label>Original Price: </label>
								<div class="form-group input-group">
									<span class="input-group-addon">₱</span>
									<input type="text" class="form-control">
									<span class="input-group-addon">.00</span>
								</div>						 
						</div>
						<div class="col-sm-4 mt-10">
							<label>Selling Price: </label>
								<div class="form-group input-group">
									<span class="input-group-addon">₱</span>
									<input type="text" class="form-control">
									<span class="input-group-addon">.00</span>
								</div>						 
						</div>
						<div class="col-sm-4 mt-10">
							<label>Quantity: </label>
								<input type="text" class="form-control">						 
							</div>
					</div>
					<!-- /.row -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">{{ modalActionBtn }}</button>
				</div>
				</div>
			</div>		 
		</div>
	</div>
</div>
<!-- =============================================================================================================================== -->
<div v-if="categoryModal">
	<!-- Modal -->
	<div class="modal-mask">
		<div class="modal-wrapper">		
			<div class="modal-dialog"> 
				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" @click="close_categoryModal"> &times;</button>
					<h4 class="modal-title color-blue">Product Category</h4>
				</div>
				<div class="modal-body">

					<div class="row"> 
						<div class="col-sm-12 mt-10">
							<div class="alert alert-success alert-dismissible pd-tb-2" role="alert" v-if="alrt_successCategory">
								<button type="button" class="close" @click="alrt_successCategory=false"><span aria-hidden="true">&times;</span></button>
								{{ alertMessage }}
							</div>
							<div class="alert alert-danger alert-dismissible pd-tb-2" role="alert" v-if="alrt_errorCategory">
								<button type="button" class="close" @click="alrt_errorCategory=false"><span aria-hidden="true">&times;</span></button>
								{{ alertMessage }}
							</div>
						</div>
						<div class="col-sm-12 mt-10">
							<label>Add New Category: </label>
							<div class="form-group input-group">
								<input type="text" class="form-control" v-model="txt_productCategory" v-on:keyup.enter="addCategory">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button" @click="addCategory"><i class="fa fa-plus"></i> Add </button>
								</span>
                            </div>						 
						</div>
					</div>					
					<div class="row"> 						
						<div class="col-sm-12 mt-10">
						<div class="table-responsive table-bordered height-150 fixed-header">
                                        <table class="table">
                                            <thead>
                                                <tr>                                                    
													<th>Product Category Name</th> 
													<th>Action</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>                                                
                                                <tr v-for="row in allCategory">                                                    
													<td>{{ row.product_category }}</td> 
													<th><button type="button" class="btn btn-danger btn-xs" @click="deleteCategory(row.id)">DELETE</button></th>                                                    
                                                </tr>                                                
                                            </tbody>
                                        </table>
                                    </div>
									
						</div>	
					</div>
					<!-- /.row -->

				</div>
				<div class="modal-footer">
				 
				</div>
				</div>
			</div>		 
		</div>
	</div>
</div>
<!-- =============================================================================================================================== -->
<div v-if="drpdwn_categoryModal">
	<!-- Modal -->
	<div class="modal-mask">
		<div class="modal-wrapper">		
			<div class="modal-dialog modal-sm"> 
				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" @click="close_drpdwn_categoryModal"> &times;</button>
					<h4 class="modal-title color-blue">Add New Product Category</h4>
				</div>
				<div class="modal-body">

					<div class="row"> 
						<div class="col-sm-12 mt-10">
							<div class="alert alert-success alert-dismissible pd-tb-2" role="alert" v-if="alrt_successCategory">
								<button type="button" class="close" @click="alrt_successCategory=false"><span aria-hidden="true">&times;</span></button>
								{{ alertMessage }}
							</div>
							<div class="alert alert-danger alert-dismissible pd-tb-2" role="alert" v-if="alrt_errorCategory">
								<button type="button" class="close" @click="alrt_errorCategory=false"><span aria-hidden="true">&times;</span></button>
								{{ alertMessage }}
							</div>
						</div>
						<div class="col-sm-12 mt-10">
							<label>Add New Category: </label>
							<div class="form-group input-group">
								<input type="text" class="form-control" v-model="txt_productCategory" v-on:keyup.enter="addCategory">
								<span class="input-group-btn">
									<button class="btn btn-primary" type="button" @click="addCategory"><i class="fa fa-plus"></i> Add </button>
								</span>
                            </div>						 
						</div>
					</div> 
				</div>
				<div class="modal-footer">
				 
				</div>
				</div>
			</div>		 
		</div>
	</div>
</div>