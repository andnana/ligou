<?php
	class IndexAction extends Common {
		function index(){
			
			
			$title = "大连新霆企业顾问有限公司后台";
			
			
			$this->assign("title",$title);
			$this->display();
		}		
	}
