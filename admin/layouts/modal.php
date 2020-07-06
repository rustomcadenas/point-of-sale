<div v-if="productModal">
	<!-- Modal -->
	<div class="modal-mask">
		<div class="modal-wrapper">		
			<div class="modal-dialog"> 
				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" @click="productModal=false"> &times;</button>
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
                                                    <input type="text" class="form-control">
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button" @click="categoryModal=true"><i class="fa fa-plus"></i>
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
							<label>Price: </label>
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

<div v-if="categoryModal">
	<!-- Modal -->
	<div class="modal-mask">
		<div class="modal-wrapper">		
			<div class="modal-dialog"> 
				<!-- Modal content-->
				<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" @click="categoryModal=false"> &times;</button>
					<h4 class="modal-title color-blue">Add New Category</h4>
				</div>
				<div class="modal-body">

					<div class="row"> 
						<div class="col-sm-12 mt-10">
							<label>Category: </label>
							<input type="text" class="form-control" v-model="txt_productCategory">							 
						</div>
					</div>
					<hr>
					<div class="row"> 						
						<div class="col-sm-12 mt-10">
							<label for="">List of Category</label>
							<select class="form-control" name="" id="">
								<option value="">1</option>
							</select>
						</div>	
					</div>
					<!-- /.row -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" @click="addCategory"> Save </button>
				</div>
				</div>
			</div>		 
		</div>
	</div>
</div>