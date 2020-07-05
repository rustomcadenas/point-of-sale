 
<!-- modal -->
<div id="addNewUser">
   			<div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h3 class="modal-title color_428bca" id="modal_title"> <i class="fas fa-user-graduate"></i> &nbsp; Add New Student</h3>
		       </div>

				<form autocomplete="off" action="modules/students/addnewstudents.php" method="post"><!-- FORM -->

		        	<div class="modal-body">

		        		<div class="row">
				  			<div class="col-sm-8">
				  				<label>Course: </label>	

							    <select class="form-control" name="program"><!-- SELECT OF PROGRAMS -->
				 
							    </select><!-- END SELECT OF PROGRAMS -->

				  			</div> 		

				  			<div class="col-sm-4">
				  				<label>Student ID: </label>
								<input type="text" class="form-control" name="student_id" required placeholder="Student ID">
				  			</div>
						</div>	        	
			       
						<br>

						<div class="row">
				  			<div class="col-sm-4">
				  				<label>First Name: </label>
								<input type="text" class="form-control" name="first_name" placeholder="First Name" required>
				  			</div>  

				  			<div class="col-sm-4">
				  				<label>Middle Name: </label>
								<input type="text" class="form-control" name="middle_name" placeholder="Middle Name" required>
				  			</div>  

				  			<div class="col-sm-4">
				  				<label>Last Name: </label>
								<input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
				  			</div> 		 
						</div>

						<br>

						<div class="row">
				  			<div class="col-sm-4">
				  				<label>Year: </label>
								<select class="form-control" id="sel1" name="stud_year">
							        <option>First Year</option>
							        <option>Second Year</option>
							        <option>Third Year</option>
							        <option>Fourth Year</option>
							        <option>Fifth Year</option>

							    </select>
				  			</div>  

				  			<div class="col-sm-4">
				  				<label>Birth Date: </label>
								<input type="date" class="form-control" name="birth_date">
				  			</div>  

				  			<div class="col-sm-4">
								<label>Contact Number:  </label>
								<input type="text" class="form-control" name="contact" placeholder="Contact" required>
							</div>			 
						</div>

						<hr>

						<div class="row">
							<div class="col-sm-8">
								<label>Complete Address: </label>
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>

							<div class="col-sm-4">
								<label>E-mail: </label>
								<input type="email" class="form-control" name="email" placeholder="E-mail" required>
							</div>
											 
						</div>

						<br>

						<div class="row">
							<div class="col-sm-8">
								<label>Guardian full Name:   </label>
								<input type="text" class="form-control" name="guardian" placeholder="Guardian" required>
							</div>	

							<div class="col-sm-4">
								<label>Guardian Contact:   </label>
								<input type="text" class="form-control" name="guardian_contact" placeholder="Guardian Contact" required>
							</div>			
						</div>					 

			    	</div><!-- Closing modal Body -->			


			        <div class="modal-footer"><!-- MODAL FOOTER -->	          
			          	<button class="btn btn-danger float_left" type="reset"><i class="fas fa-trash-restore"></i> Reset </button>
			          	<button type="button" class="btn btn-warning" data-dismiss="modal"><i class="fas fa-window-close"></i> Close</button>
				      	<button type="submit" class="btn btn-primary" name="btn_insertStudent"><i class="fas fa-save"></i> Save</button>	   	
			        </div><!-- MODAL FOOTER -->


				</form><!-- END FORM -->

      		</div>      
    		</div>
  		</div>
  <!--End modal-->