<?php
	class News {
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
			$news = D("news");
			$page = new Page($news->total(),5);
			
			$data = $news ->order("id desc") -> limit($page->limit)->select();
			$this -> assign("news",$data);
			$this -> assign("fpage",$page->fpage(0,3,4,5,6,7));
			//p($data);
			$this->display();
		}
		function newsdetail(){
			$title = "大连新霆企业顾问有限公司";
			$this->assign("title",$title);
			$footer = D("footer");
			$data = $footer -> limit(1) -> select();
			$this -> assign("footer",$data);
			$welcome = D("welcome")->limit(1)->select();
			$this->assign("welcome",$welcome);
			$pagepic = D("pagepic")->limit(1)->select();
			$this->assign("pagepic",$pagepic);
			$newsdetail = D("news")->find($_GET['id']);
			$newsdetail['uedittext'] = html_entity_decode($newsdetail['uedittext']);
			$this->assign("newsdetail",$newsdetail);
			$this->display();
		}
	}