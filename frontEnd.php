<form method="post" action="<?php echo base_url()."Cas0001/studentsummry";?>">
            <div class='row'>
            	<div class="col-md-12">
            		<div class="row">
            				<div class="col-md-2">
					       <div class="form-group">
								<input class="form-control" onkeyup="getstudentsummery();"  type="text" id="stubiometric" placeholder="Enter Student Biometric" name="stubiometric"  autocomplete="off">
						   </div>
				    	</div>
					    <div class="col-md-2">
					      <div class="form-group">
								<input class="form-control" onkeyup="getstudentsummery();"  type="text" id="stuenrollmnt" placeholder="Enter Student Enrollment" name="stuenrollmnt"  autocomplete="off">
						   </div>
					     </div>
				    	<div class="col-md-2">
				      <div class="form-group">
							<input class="form-control" onkeyup="getstudentsummery();"  type="text" id="stugno" placeholder="Enter Student G. Number" 
							name="stugno" autocomplete="off">
					   </div>
				     </div>
						<div class="col-md-2">
				      <div class="form-group">
							<input class="form-control" onkeyup="getstudentsummery();"  type="text" id="studname" placeholder="Enter Student Name" name="studname"  autocomplete="off">
					   </div>
				     </div>
				    	<div class="col-md-2">
				      <div class="form-group">
							<input class="form-control" onkeyup="getstudentsummery();"  type="text" id="stufname" placeholder="Enter Father's Name" name="stufname"  autocomplete="off">
					   </div>
				     </div>
				    	<div class="col-md-2">
				      <div class="form-group">
							<input class="form-control" onkeyup="getstudentsummery();"  type="text" id="stumobile" placeholder="Enter Student Mobile" name="stumobile"  autocomplete="off">
					   </div>
				     </div>
            		</div>
            	</div>
            	<div class="col-md-12">
            		<div class="row">
            			
            			<div class="col-md-2">
					    <div class="form-group">
					    	    <?php $curr_year = date('Y');?>
								<select name="srch_session" id="srch_session" onchange="getstudentsummery();" class="form-control">
									<option value="">Select Session</option>
			                        <?php for($i=2015; $i<=$curr_year; $i++){ ?>
                                 	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                 	<?php } ?>
								</select>
						 </div>
						 </div>
            				<div class="col-md-2">
						<div class="form-group">
								<select name="stucourse" id="stucourse" onclick="getbranch(this.value);" class="form-control">
									<option value="">Select Course</option>
									<?php foreach($cource as $crs){ ?>
									<option value="<?php echo $crs['misc_id']; ?>"><?php echo $crs['misc_name']; ?></option>
									<?php }?>
								</select>
						 </div>
					</div>
						<div class="col-md-2">
						    <div class="form-group">
									<select name="fees_branch" id="fees_branch" class="form-control">
										<option value="">Select Branch</option>
									</select>
							</div>
						</div>
						
						<div class="col-md-1">
						    <div class="form-group">
									<select name="srch_idcard" id="srch_idcard" class="form-control">
										<option value="">ID Card</option>
										<option value="1">Yes</option>
										<option value="0">No</option>
									</select>
							</div>
						</div>
						
						<div class="col-md-1">
						    <div class="form-group">
									<select name="srch_bag" id="srch_bag" class="form-control">
										<option value="">Bag</option>
										<option value="1">Yes</option>
										<option value="0">No</option>
									</select>
							</div>
						</div>
						
						<div class="col-md-1">
						    <div class="form-group">
									<select name="srch_section" id="srch_section" class="form-control">
										<option value="">Section</option>
										<?php $this->Crud_model->FillDynamicCombo("SELECT misc_id, misc_name FROM miscell_mst WHERE 1 and misc_type = 'section' and misc_status = 1 order by misc_name ASC","misc_id","misc_name",'');?>
									</select>
							</div>
						</div>
						
						<div class="col-md-2">
							<div class="form-group ">
							     <button type="button" onclick="getstudentsummery();"  class="btn  btn-info "><i class="fa fa-search"></i> Search</button> &nbsp;&nbsp;
							     <button type="submit"  class="btn  btn-success "> Export <i class='fa fa-export'></i></button>
						    </div>
				</div>
            		</div>
            	</div>			
	</div>
</form>
