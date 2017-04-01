<?php
	class ServicesAction extends Common {
		function index(){
	//echo "<b>欢迎使用《细说PHP》中的BroPHP框架1.0, 第一次访问时会自动生成项目结构：</b><br>";
			//echo '<pre>';
			//echo file_get_contents('C:/AppServ/www/xsphp/runtime/_xsphp_index.php');
			//echo '</pre>';
			$footer = D("footer");
			$data = $footer -> limit(1) -> select();
			$this -> assign("footer",$data);
			$title = "大连新霆企业顾问有限公司";
			$this->assign("title",$title);
			$welcome = D("welcome")->limit(1)->select();
			$this->assign("welcome",$welcome);
		$pagepic = D("pagepic")->limit(1)->select();
			$this->assign("pagepic",$pagepic);
			$service = D("service")->limit(1)->select();
			$this->assign("service",$service);
			$servicepage01 = D("servicepage")->select();
			
			$count = count($servicepage01);
			//p($count);
			//for($i = 0; $i<$count;$i++){
			//	p($i);
			//	$servicepage[$i]['id'] = $servicepage01[$i]['id']; 
			//	$servicepage[$i]['title'] = $servicepage01[$i]['title']; 
			//	$servicepage[$i]['picname'] = $servicepage01[$i]['picname'];
			//	$servicepage[$i]['introduct'] = $servicepage01[$i]['introduct'];
			//	$servicepage[$i]['uedittext'] = html_entity_decode($servicepage01[$i]['uedittext']); 
			//	
		//	}
			//p($servicepage);
			$this->assign("servicepage",$servicepage01);
			$this->display();
		}
		function servicepagedetail(){
				$title = "大连新霆企业顾问有限公司";
			$this->assign("title",$title);
			$pagepic = D("pagepic")->limit(1)->select();
			$this->assign("pagepic",$pagepic);
			$service = D("service")->limit(1)->select();
			$this->assign("service",$service);
			$footer = D("footer");
			$data = $footer -> limit(1) -> select();
			$this -> assign("footer",$data);
			$welcome = D("welcome")->limit(1)->select();
			$this->assign("welcome",$welcome);
			//p($_GET['id']);
			$id = $_GET['id'];
			$servicepagedetail01 = D("servicepage")->where(array("id"=>$id))->select();
			
		//p($servicepagedetail01);
		//p($servicepagedetail01[0]['uedittext']);
				$servicepagedetail['id'] = $servicepagedetail01[0]['id']; 
				$servicepagedetail['title'] = $servicepagedetail01[0]['title']; 
				$servicepagedetail['introduct'] = $servicepagedetail01[0]['introduct'];
				$servicepagedetail['uedittext'] = html_entity_decode($servicepagedetail01[0]['uedittext']); 
				
			
			//p($servicepagedetail);
			$this->assign("servicepagedetail",$servicepagedetail);
			$this->display();
		}
	}