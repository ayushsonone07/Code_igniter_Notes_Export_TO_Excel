public function ipdpat_excelData(){
	 		$condition="";
		 
			if(isset($_REQUEST['uhid_exp']) && $_REQUEST['uhid_exp']!=""){
			  $condition.=" and ipop_uhid = '".$_REQUEST['uhid_exp']."'";
			}
			if(isset($_REQUEST['regno_exp']) && $_REQUEST['regno_exp']!=""){
			  $condition.=" and ipop_reg = '".$_REQUEST['regno_exp']."'";
			}
			if(isset($_REQUEST['name_exp']) && $_REQUEST['name_exp']!=""){
			  $condition.=" and pati_name like '%".$_REQUEST['name_exp']."%'";
			}
			if(isset($_REQUEST['phone_exp']) && $_REQUEST['phone_exp']!=""){
			  $condition.=" and ipop_mob like '".$_REQUEST['phone_exp']."'";
			}
			if(isset($_REQUEST['schm_exp']) && $_REQUEST['schm_exp']!=""){
			  $condition.=" and ipop_scheme = '".$_REQUEST['schm_exp']."'";
			}
			if(isset($_REQUEST['city_exp']) && $_REQUEST['city_exp']!=""){
			  $condition.=" and pati_district = '".$_REQUEST['city_exp']."'";
			}
			if(isset($_REQUEST['consul_exp']) && $_REQUEST['consul_exp']!=""){
			  $condition.=" and ipop_drid = '".$_REQUEST['consul_exp']."'";
			}
			// CID
			if(isset($_REQUEST['diagno_exp']) && $_REQUEST['diagno_exp']!=""){
			  $condition.=" and ipop_drid = '".$_REQUEST['diagno_exp']."'";
			}
			if(isset($_REQUEST['gender_exp']) && $_REQUEST['gender_exp']!=""){
			  $condition.=" and pati_gender like '".$_REQUEST['gender_exp']."'";
			}
			if(isset($_REQUEST['patbill_exp']) && $_REQUEST['patbill_exp']!=""){
			  $condition.=" and gen_creamt like '".$_REQUEST['patbill_exp']."'";
			}
				// surgery
			// if(isset($_REQUEST['srgname_exp']) && $_REQUEST['srgname_exp']!=""){
			//   $condition.=" and all_testid = '".$_REQUEST['srgname_exp']."'";
			// }
			if(isset($_REQUEST['disfrom_exp']) && $_REQUEST['disfrom_exp']!="" &&
			
			isset($_REQUEST['distill_exp']) && $_REQUEST['distill_exp']!=""){
            $condition.=" and date_format(ipop_disdt,'%Y-%m-%d') between '".date('Y-m-d',strtotime($_REQUEST['disfrom_exp']))."' and '".date('Y-m-d',strtotime($_REQUEST['distill_exp']))."'";
	          $limit = '';
	        }
			if(isset($_REQUEST['admitfromdt_exp']) && $_REQUEST['admitfromdt_exp']!="" &&
			isset($_REQUEST['admittoodt_exp']) && $_REQUEST['admittoodt_exp']!=""){
            $condition.=" and date_format(ipop_entrydt,'%Y-%m-%d') between '".date('Y-m-d',strtotime($_REQUEST['admitfromdt_exp']))."' and '".date('Y-m-d',strtotime($_REQUEST['admittoodt_exp']))."'";
	          $limit = '';
	        }
			$data['patidetails']  = $this->Common_model->get_data_by_query("SELECT i.*,bg.gen_creamt,p.pati_name,p.pati_gender,p.pati_district,ni.diag_diagnos FROM `ipdopd_mst` i
										LEFT JOIN patient p ON i.ipop_uhid=p.pati_id
										LEFT JOIN nurs_icddiagn ni ON i.ipop_reg=ni.diag_ipdid
										LEFT JOIN bill_generate bg ON bg.gen_uhid = i.ipop_uhid
							            Where 0=0 $condition");
										// LEFT JOIN common_testall ct ON ct.all_uhid = i.ipop_uhid
							   //         LEFT JOIN nurs_icdcode ic ON ni.diag_icdid=ic.icd_id`
			// echo $this->db->last_query();
			// die;
	    	$myFile = "uploads/ipdpatexcel.xls";  
			$this->load->library('parser'); 
			// $data['condition'] = $condition;  
			$stringData = $this->parser->parse('Casu004/ipdpat_cvc',$data, true);
			$fh = fopen($myFile, 'w') or die("can't open file");  
			fwrite($fh, $stringData);  
			fclose($fh);
			header("Content-Length: " . filesize($myFile));  
			header('Content-Type: application/vnd.ms-excel');  
			header('Content-Disposition: attachment; filename=ipdpatexcel.xls');  
			readfile($myFile);
			//$this->ipdpat_excel();  
		   	}
