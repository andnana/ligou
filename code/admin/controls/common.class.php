<?php
	class Common extends Action {
		function init(){
			if(!(isset($_SESSION['is_login']) && $_SESSION['is_login'] ===1)){
				$this->redirect("login/index");
			}
		}	
		
		
	}
