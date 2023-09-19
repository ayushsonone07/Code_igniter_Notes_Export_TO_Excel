public function studentsummry(){
 	$condition="";   
 	
 	if($_POST['stubiometric']!='')
		{
			$fees_student = $_POST['stubiometric'];
			$condi .= "and stud_id like '%$fees_student%'";	
		}
		if($_POST['stuenrollmnt']!='')
		{
			$fees_student = $_POST['stuenrollmnt'];
			$condi .= "and stud_rollno like '%$fees_student%'";	
		}
	    if($_POST['stugno']!='')
		{
			$fees_student = $_POST['stugno'];
			$condi .= "and stud_gno like '%$fees_student%'";	
		}
		if($_POST['studname']!='')
		{
			$fees_student = $_POST['studname'];
			$condi .= "and stud_name like '%$fees_student%'";	
		}
		if($_POST['stufname']!='')
		{
			$fees_student = $_POST['stufname'];
			$condi .= "and stud_fname like '%$fees_student%'";	
		}
		if($_POST['stumobile']!='')
		{
			$fees_student = $_POST['stumobile'];
			$condi .= "and stud_mob like '%$fees_student%'";	
		}
		if($_POST['stucourse']!='')
		{
			$fees_cource = $_POST['stucourse'];
			$condi .= "and stud_course = $fees_cource ";	
		}
		if($_POST['fees_branch']!='')
		{
			$fees_branch = $_POST['fees_branch'];
			$condi .= "and stud_branch = $fees_branch ";	
		}
		if($_POST['srch_session']!='')
		{
			$stud_session = $_POST['srch_session'];
			$condi .= "and stud_session = $stud_session ";	
		}
		
		if($_POST['srch_idcard']!='')
		{
			$srch_idcard = $_POST['srch_idcard'];
			$condi .= "and unif_idcard = $srch_idcard ";
		}
		
		if($_POST['srch_bag']!='')
		{
			$srch_bag = $_POST['srch_bag'];
			$condi .= "and unif_bag = $srch_bag ";	
		}
		if($_POST['srch_section']!='')
		{
			$srch_section = $_POST['srch_section'];
			$condi .= "and stud_sect = $srch_section ";	
		}
		
		
	//$studnsumm = $this->Common_model->find_query_all("select * from  stud_mst 
	//	where stud_status=? $condi order by stud_name asc limit 100",array(1));

    
		$studnsumm = $this->Common_model->find_query_all("select * from  stud_mst s 
		left join hr_uniform u on u.unif_empid=s.stud_id
		where stud_status=? $condi order by stud_name asc limit 1000",array(1));
	
		
	// $sbjctdata = $this->Common_model->get_data_by_query("select *,mst.misc_name from  subject_mst sub
	// 	 LEFT JOIN miscell_mst mst on mst.misc_id=sub.subj_cate
	// 	 where subj_status = 1 $condition order by subj_id DESC");
	
 	// echo $this->db->last_query();
 	$data['studnsumm'] = $studnsumm;
 	$this->load->library('parser');
 	$myFile = "uploads/stusumexcel.xls";
 	$stringData = $this->parser->parse('Cas0001/stusumexcel',$data, true);
 	// $myFile = "uploads/stusumexcel.xls";  
 	// $this->load->library('parser'); 
 	$fh = fopen($myFile, 'w') or die("can't open file");  
		fwrite($fh, $stringData);  
		fclose($fh);  
		header("Content-Length: " . filesize($myFile));  
        header('Content-Type: application/vnd.ms-excel');  
        header('Content-Disposition: attachment; filename=stusumexcel.xls');  
        readfile($myFile); 
    }
