<?php
	class Index {
		function index(){
			$footer = D("footer");
			$data = $footer -> limit(1) -> select();
			$this -> assign("footer",$data);
			$title = "大连新霆企业顾问有限公司";
			$this->assign("title",$title);
			$pagepic = D("pagepic")->limit(1)->select();
			$this->assign("pagepic",$pagepic);
			$welcome = D("welcome")->limit(1)->select();
			$this->assign("welcome",$welcome);
			$service = D("service")->limit(1)->select();
			$this->assign("service",$service);
			$servicepage01 = D("servicepage")->limit(5)->select();
			$count = count($servicepage01);
			for($i = 0; $i<$count;$i++){
				$servicepage[$i]['id'] = $servicepage01[$i]['id']; 
				$servicepage[$i]['title'] = $servicepage01[$i]['title']; 
				$servicepage[$i]['introduct'] = $servicepage01[$i]['introduct'];
				$servicepage[$i]['uedittext'] = html_entity_decode($servicepage01[$i]['uedittext']); 
				
			}
			$this->assign("servicepage",$servicepage);
			$news = D("news")->order("id desc")->limit(3)->select();
			$this->assign("news",$news);
			$this->display();
		}
			function code(){
				//ini_set('display_errors','off');
				echo new Vcode();        
			}
	}