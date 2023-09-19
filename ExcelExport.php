<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="UTF-8" />
 </head>
 <body>
  <table border="1" align="center">  
   <tbody>  
    <tr>
     <td colspan="13" style="background-color:#FFC;"><center><b> Student Summary </b></center></td>
    </tr>
    <tr role="row">
    	                                 	<th style="width:5%;">Sl.No.</th>
											<th style="width:7%;">Biometric</th>
											<th style="width:12%;">Enrollment</th>
											<th style="width:15%;">G. No.</th>
											<th style="width:15%;">Student Name</th> 
											<th style="width:15%;">Father's Name</th>
											<th style="width:10%;">Stu.Mobile</th>
											<th style="width:8%;">Session</th>
										    <th style="width:8%;">Course</th>
											<th style="width:8%;">Branch</th>
											<th style="width:8%;">Section</th>
											<th style="width:8%;">ID Card</th>
											<th style="width:8%;">Bag</th>
										   
    </tr>
<?php	if (empty($studnsumm)) {?>
		
		<tr><td colspan="11" style="color:red;"><b><center>No Record Found</center></b></td></tr>
	
   <?php }else{
   	
		     $sl=0;
		     foreach($studnsumm as $ds){
			 $sl++;
		     $branchid = $ds['stud_branch'];
  	         $coursid = $ds['stud_course'];
             $cource = $this->Common_model->find_query_all("select misc_sname from miscell_mst where misc_type='course' and misc_id=?", array($coursid));
             $branch = $this->Common_model->find_query_all("select misc_sname from miscell_mst where misc_uses='branch' and misc_id=?", array($branchid)); 
             $course =$cource[0]['misc_sname'];
             $branch =$branch[0]['misc_sname'];
   	    
  	?>
  	<tr>
  		<td><?php echo $sl;?></td>
        <td><?php echo $ds['stud_id']; ?></td>  		
  		<td><?php echo $ds['stud_rollno'];?></td>
  		<td><?php echo "G/".($ds['stud_session'].'/'.$course.'/'.$branch.'/'.$ds['stud_gno']) ?></td>
  		<td><?php echo  ucwords(strtolower($ds['stud_name']));?></td>
  		<td><?php echo  ucwords(strtolower($ds['stud_fname']));?></td>
  		<td><?php echo $ds['stud_mob'];?></td>
        <td><?php echo $ds['stud_session'];?></td>
        <td><?php echo $course;?></td>
  		<td><?php echo $branch;?></td>
  		<td><?php echo $this->Common_model->findfield('miscell_mst','misc_id',$ds['stud_sect'],'misc_name');?></td>
  		<td><?php if($ds['unif_idcard']==1) echo "<span style='color:green'>Yes</span>"; else echo "<span style='color:red'>No</span>";?></td>
		<td><?php if($ds['unif_bag']==1) echo "<span style='color:green'>Yes</span>"; else echo "<span style='color:red'>No</span>";?></td>
  	</tr>
  	<?php 	} 
         }
         
         ?>
   </tbody>
  </table>
 </body>
</html> 
