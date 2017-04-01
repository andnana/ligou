<?php
	class ContactAction extends Common {
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
			$contact = D("contact")->limit(1)->select();
			$this->assign("contact",$contact);
			$this->display();
		}
		function usermessagesave(){
			if($_SESSION['check_checks'] != $_POST['check']){
				$this->error("验证码输入有误。请重新输入。");
			}
			$usermessage = D("usermessage");
			$time = date("Y-m-d H:i:s", time());
		
			$_POST['mtime'] = $time;
			if($usermessage -> insert($_POST,1,1)){
				
				$this->success("信息添加成功");
			}else{
				$this->error($usermessage->getMsg());
			}
		
		}
		function nowcontactsave(){
			//p($_SESSION['check_checks']);
			if($_SESSION['check_checks'] != $_POST['check']){
				$this->error("验证码输入有误。请重新输入。");
			}
			$nowcontact = D("nowcontact");
			$time = date("Y-m-d H:i:s",time());
			$_POST['mtime'] = $time;
			if($nowcontact -> insert($_POST,1,1)){
				$this->success("信息添加成功");
			}else{
				$this->error($nowcontact->getMsg());
			}
			
		}
		
	}