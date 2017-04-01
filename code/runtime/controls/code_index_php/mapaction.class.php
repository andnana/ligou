<?php
	class MapAction extends Common {
		function index(){
			//echo "<b>欢迎使用《细说PHP》中的BroPHP框架1.0, 第一次访问时会自动生成项目结构：</b><br>";
			//echo '<pre>';
			//echo file_get_contents('C:/AppServ/www/xsphp/runtime/_xsphp_index.php');
			//echo '</pre>';
			
			$title = "大连新霆企业顾问有限公司";
			
			
			$this->assign("title",$title);
			
			$this->display();
		}		
	}