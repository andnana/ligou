<?php
	class User {
		function index() {
			$data = D("user")->select();
			p($data);
			
			$this->assign("users",$data);
			$this->display();
			
			
		}
	}
