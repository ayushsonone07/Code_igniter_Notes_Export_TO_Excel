<!DOCTYPE html>
<?php $emp_id = $this->uri->segment(3); ?>
<html lang="en">

<style>
	::-webkit-scrollbar{
		width:5px;
	}
</style>
<body class="skin-default-dark fixed-layout">
    <div id="main-wrapper">
       <!--modal start-->
    	<div id="export" class="modal fade " role="dialog">
    <div class="modal-dialog modal-mid">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Export Patients Data </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
        	 <form action="<?php echo base_url('Casu004/ipdpat_excelData')?>" method="POST">
                <div class="row p-l-10 p-r-10 p-l-10 p-r-10">
                    <div class="col-md-3">
                        <div class="control-group">
                          
                            <div class="controls">
                                <input type="text" id="uhid_exp" placeholder="Enter UHID" name="uhid_exp"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="control-group">
                            
                            <div class="controls">
                                <input type="text" id="regno_exp" name="regno_exp" class="form-control"
                                    placeholder="Enter Reg No.">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="control-group">
                           
                            <div class="controls">
                                <input type="text" id="name_exp" placeholder="Enter Name" name="name_exp"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="control-group">
                            
                            <div class="controls">
                                <input type="text" id="phone_exp" placeholder="Enter Phone No." name="phone_exp"
                                    class="form-control">
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row p-l-10 p-r-10">
                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                           
                            <input type="text" id="disfrom_exp" placeholder="Discharge From Date" name="disfrom_exp"
                                class="form-control datep" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                          
                            <input type="text" id="distill_exp" placeholder="Discharge Till Date" name="distill_exp"
                                class="form-control datep" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                          
                            <input type="text" id="admitfromdt_exp" placeholder="Enter Admit From Date"
                                name="admitfromdt_exp" class="form-control datep" autocomplete="off">
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                          
                            <input type="text" id="admittoodt_exp" placeholder="Enter Admit To Date"
                                name="admittoodt_exp" class="form-control datep" autocomplete="off">
                        </div>
                    </div>


                </div>

                <div class="row p-l-10 p-r-10">
                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                          
                            <input type="text" id="admitdt_exp" placeholder="Select Admit Date" name="admitdt_exp"
                                class="form-control datep" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                           
                            <select name="schm_exp" id="schm_exp" class="form-control select2 select2-hidden-accessible"
                                tabindex="-1" aria-hidden="true">
                                <option value="">Select Scheme</option>
                            	  <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT misc_id,misc_name FROM `miscell_mst` Where misc_type IN(1,2,3)",'misc_id','misc_name','');
                            	  ?>
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                            
                            <select name="city_exp" id="city_exp" class="form-control select2 select2-hidden-accessible"
                                tabindex="-1" aria-hidden="true">
                                <option value="">Select City</option>
                                  <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT dist_id,dist_name FROM `coun_dist`",'dist_id','dist_name','');
                            	   ?>
                            </select>
                            
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                          
                            <select name="consul_exp" id="consul_exp"
                                class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                <option value="">Select Consultant</option>
                                 <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT emp_id,emp_name FROM `hr_empmst` Where emp_type = 117 ",'emp_id','emp_name','');
                             	  ?>
                            </select>
                            
                        </div>
                    </div>


                </div>

                <div class="row p-l-10 p-r-10">
                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                           
                            <select name="pro_exp" id="pro_exp" class="form-control select2 select2-hidden-accessible"
                                tabindex="-1" aria-hidden="true">
                                <option value="">Select Pro</option>
                                
                            </select>
                            

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                           
                            <select id="speciality_exp" name="speciality_exp"
                                class="form-control select2 select2-hidden-accessible"
                                data-placeholder="Select Speciality" tabindex="-1" aria-hidden="true">
                                <option value="">Select Speciality</option>
                            	  <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT misc_id,misc_name FROM `miscell_mst`  WHERE `misc_type` LIKE '%spec%' ",'misc_id','misc_name','');
                            	  ?>
                            </select>
                            
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                         
                            <select id="sugetype_exp" name="sugetype_exp" onchange="get_surgname(this.value);"
                                class="form-control select2 select2-multile select2-hidden-accessible" tabindex="-1"
                                aria-hidden="true">
                                <option value="">Select Type</option>
                                 <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT misc_id,misc_name FROM `miscell_mst` WHERE `misc_type` LIKE '12' ",'misc_id','misc_name','');
                            	  ?>
                            </select>
                            
                        </div>
                    </div>



                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                           
                            <select name="srgname_exp" id="srgname_exp"
                                class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                <option value="">Select Surgery</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row p-l-10 p-r-10">
                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                            <select id="diagno_exp" name="diagno_exp"
                                class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                <option value="">Select ICD</option>
                                  <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT diag_id,diag_diagnos FROM `nurs_icddiagn`",'diag_id','diag_diagnos','');
                            	  ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="control-group p-t-10">
                          
                            
                            <select name="patbill_exp" id="patbill_exp"
                                class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                <option value="">Select Patient Bill</option>
                                <option value="0">0</option>
                                <option value="500">&gt;5,00</option>
                                <option value="1000">&gt;1,000</option>
                                <option value="5000">&gt;5,000</option>
                                <option value="10000">&gt;10,000</option>
                                <option value="20000">&gt;20,000</option>
                                <option value="50000">&gt;50,000</option>
                                <option value="150000">&gt;1,50,000</option>
                                <option value="200000">&gt;2,00,000</option>
                                <option value="300000">&gt;3,00,000</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="control-group p-t-10">

                         
                            <select name="gender_exp" id="gender_exp"
                                class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                <option value="">Select Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>

                            </select>
                           
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="control-group p-t-10">

                            <select name="daycare_exp" id="daycare_exp"
                                class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                <option value="">Select Option</option>
                                <option value="">All</option>
                                <option value="1">DayCare</option>

                            </select>
                            
                        </div>
                    </div>
                </div>
            
            <!--<hr>-->
            </div>
            <div class="modal-footer">
                <!--<button type="button" onclick="export_ipdpatints();" class="btn btn-success"><i-->
                <!--        class="fa fa-ok"></i>Export</button>-->
                <button type="submit" class="btn btn-success">Export excel</button>
                <button type="button" data-dismiss="modal" class="btn btn-danger waves-effect text-left">Cancel</button>
            </div>
			</form>
        </div>
    </div>
</div>
       <!--modal end-->
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="card space">
						    <h4 class="new_title">IPD Patients
						    </h4>
						</div>
                    </div>
                </div>
 <div class="row p-t-5">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-body p-b-15">
                <div class="row p-l-30 p-r-30">
                    <div class="col-md-2">
                        <div class="form-group row">
                            <input type="text" id="srch_uhid" placeholder="Search by UHID" name="srch_uhid"
                                class="form-control">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                            <input type="text" id="srch_regno" placeholder="Search by Reg.No" name="srch_regno"
                                class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group row">
                            <input type="text" id="srch_name" placeholder="Search by Name" name="srch_name"
                                class="form-control" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                            <input type="text" id="srch_disfrmdt" placeholder="Discharge From Date" name="srch_disfrmdt"
                                class="form-control datep" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                            <input type="text" id="srch_distilldt" placeholder="Discharge To Date"
                                name="srch_distilldt" class="form-control datep" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                            <input type="text" id="srch_admfrmdt" placeholder="Admit From Date" name="srch_admfrmdt"
                                class="form-control datep" autocomplete="off">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                            <input type="text" id="srch_admtoodt" placeholder="Admit To Date" name="srch_admtoodt"
                                class="form-control datep" autocomplete="off">
                        </div>
                    </div>

                    <!--<div class="col-md-2">-->
                    <!--    <div class="form-group row">-->
                    <!--        <input type="text" id="srch_admitdt" placeholder="Admit Date" name="srch_admitdt"-->
                    <!--            class="form-control datep" autocomplete="off">-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="col-md-2">
                        <div class="form-group row">
                            <input type="text" id="srch_phno" placeholder="Phone Number" name="srch_phno"
                                class="form-control" autocomplete="off">
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="form-group row">
                            <select name="srch_schm" id="srch_schm" class="form-control select2">
                                <option value="">Select Scheme</option>
                            	<?php
                            		$this->Crud_model->FillDynamicCombo("SELECT misc_id,misc_name FROM `miscell_mst` Where misc_type IN(1,2,3)",'misc_id','misc_name','');
                            	  ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                           
                            <select name="srch_distic" id="srch_distic" class="form-control select2">
                                <option value="">Select City</option>
                            	<?php
                            		$this->Crud_model->FillDynamicCombo("SELECT dist_id,dist_name FROM `coun_dist`",'dist_id','dist_name','');
                            	?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group row">
                           
                            <select name="srch_consult" id="srch_consult" class="form-control select2">
                                <option value="">Select Consultant</option>
                                <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT emp_id,emp_name FROM `hr_empmst` Where emp_type = 117 ",'emp_id','emp_name','');
                            	?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group row">
                           
                            <select name="srch_pro" id="srch_pro" class="form-control select2">
                                <option value="">Select Pro</option>
                            	 
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                           
                            <select id="srch_speciality" name="srch_speciality" class="form-control select2">
                                <option value=''>Select Speciality</option>
                            	<?php
                            		$this->Crud_model->FillDynamicCombo("SELECT misc_id,misc_name FROM `miscell_mst`  WHERE `misc_type` LIKE '%spec%' ",'misc_id','misc_name','');
                            	  ?>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="form-group row">
                         
                            <select id="srch_sugetype" name="srch_sugetype" class="form-control select2 select2-multile"
                                onchange="get_surgname(this.value);">
                                <option value="">Select Type</option>
                                 <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT misc_id,misc_name FROM `miscell_mst` WHERE `misc_type` LIKE '12' ",'misc_id','misc_name','');
                            	  ?>
                            </select>
                        </div>
                    </div>



                    <div class="col-md-2">
                        <div class="form-group row">
                            <select name="srg_name" id="srg_name" class="form-control select2">
                                <option value="">Select Surgery</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                          
                            <select id="serch_diagn" name="serch_diagn" class="form-control select2">
                                <option value="">Select ICD</option>
                                 <?php
                            		$this->Crud_model->FillDynamicCombo("SELECT diag_id,diag_diagnos FROM `nurs_icddiagn`",'diag_id','diag_diagnos','');
                            	  ?>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                            <select name="srch_patbill" id="srch_patbill" class="form-control select2">
                                <option value="">Select Patient Bill</option>
                                <option value="0">0</option>
                                <option value="500">>5,00</option>
                                <option value="1000">>1,000</option>
                                <option value="5000">>5,000</option>
                                <option value="10000">>10,000</option>
                                <option value="20000">>20,000</option>
                                <option value="50000">>50,000</option>
                                <option value="150000">>1,50,000</option>
                                <option value="200000">>2,00,000</option>
                                <option value="300000">>3,00,000</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                            <select name="srch_gender" id="srch_gender" class="form-control select2">
                                <option value="">Select Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group row">
                            <select name="srch_daycare" id="srch_daycare" class="form-control select2">
                                <option value="">Select Option</option>
                                <option value="">All</option>
                                <option value="1">DayCare</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group row">

                            <button class="btn btn-info" onclick="filterDataipd();"
                                >Search</button>&nbsp;&nbsp;&nbsp;
                            <!--<button class="btn btn-danger"  style="margin-top:20px; margin-left:10px;">Excel</button>	    	-->
                            <!--onclick="export_ipdpatints();"	-->
                            <a class="btn btn-danger" data-toggle="modal" data-target="#export"
                               >Export</a>

                        </div>
                    </div>
                </div>
                <!--</div>-->


                <div class="row p-l-10 p-r-10">
                	<div class="col-md-12">
                    	<div class=" general-container  p-l-10">
                        <div class="table-container">
                            <table>
                                <thead class="headtable">
                                    <tr>
                                        <th width="5%">S.N</th>
                                        <th width="5%">UHID</th>
                                        <th width="5%">Reg.No</th>
                                        <th width="15%">Name</th>
                                        <th width="15%">Father/Husband</th>
                                        <th width="10%">Age</th>
                                        <th width="12%">Scheme</th>
                                        <th width="13%">Ph.No.</th>
                                        <th width="15%">Consultant</th>
                                        <th width="15%">City</th>
                                        <th width="18%">Admit Date</th>
                                        <th width="18%">Dis.Date</th>
                                        <th width="12%">Bill Amt.</th>
                                    </tr>
                                </thead>
                                <tbody id="ipdpat_data">
                                
                                </tbody>
                            </table>

                        </div>
                    </div>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
                
            </div>
        </div>
    </div>
    <!-- js start -->
    <script>
    		// search data 
    	filterDataipd()
    	function filterDataipd(){
    		let uhid  = $('#srch_uhid').val();
    		let regno  = $('#srch_regno').val();
    		let patiname  = $('#srch_name').val();
    		let srch_disfrmdt  = $('#srch_disfrmdt').val();
    		let srch_distilldt  = $('#srch_distilldt').val();
    		let srch_admfrmdt  = $('#srch_admfrmdt').val();
    		let srch_admtoodt  = $('#srch_admtoodt').val();
    		// let srch_admitdt  = $('#srch_admitdt').val();
    		let srch_phno  = $('#srch_phno').val();
    		let srch_schm  = $('#srch_schm').val();
    		let srch_distic  = $('#srch_distic').val();
    		let srch_consult  = $('#srch_consult').val();
    		let srch_pro  = $('#srch_pro').val();
    		let srch_speciality  = $('#srch_speciality').val();
    		let srch_sugetype  = $('#srch_sugetype').val();
    		let srg_name  = $('#srg_name').val();
    		let serch_diagn  = $('#serch_diagn').val();
    		let srch_patbill  = $('#srch_patbill').val();
    		let srch_gender  = $('#srch_gender').val();
    		let srch_daycare  = $('#srch_daycare').val();
    		// alert(srch_patbill);
    		// return 
	    	$.ajax({
					type:"post",
					url:"<?php echo base_url('Casu004/filteripdpat') ?>",
					data:{
						uhid:uhid,regno:regno,patiname:patiname,srch_disfrmdt:srch_disfrmdt,
						srch_distilldt:srch_distilldt,srch_admfrmdt:srch_admfrmdt,srch_admtoodt:srch_admtoodt,
						srch_phno:srch_phno,srch_schm:srch_schm,srch_distic:srch_distic,
						srch_consult:srch_consult,srch_pro:srch_pro,srch_speciality:srch_speciality,
						srch_sugetype:srch_sugetype,srg_name:srg_name,serch_diagn:serch_diagn,
						srch_patbill:srch_patbill,srch_gender:srch_gender,srch_daycare:srch_daycare
						
					},
					success: function(msg){
						// console.log(msg);
						$('#ipdpat_data').html(msg)
					}
				})
    	}
    	
    	// get_surgname
    	function get_surgname(sur_id){
    		// alert(sur_id)
    			$.ajax({
					type:"post",
					url:"<?php echo base_url('Casu004/getSurgeryname') ?>",
					data:{sur_id:sur_id},
					success: function(msg){
						// console.log(msg);
						$('#srg_name').html(msg)
						$('#srgname_exp').html(msg)
					}
				})
    	}
    </script>
    <!-- js end -->
</body>

</html>
