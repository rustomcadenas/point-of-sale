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
						<div class="col-sm-12 mt-10">
							<label>Name: </label>
							<input type="text" class="form-control">							 
						</div>
						<div class="col-sm-12 mt-10">
							<label>Category: </label>
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
							<input type="text" class="form-control">							 
						</div>
					</div>
					<!-- /.row -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary"> </button>
				</div>
				</div>
			</div>		 
		</div>
	</div>
</div>