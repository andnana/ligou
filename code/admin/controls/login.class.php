<?php
	class Login extends Action{
		function index(){
			debug(0);
			$this->display();
		}
		function login(){
			//p(md5($_POST['password']));
			$user = D('user') -> where (array('username'=>$_POST['username'],'password'=>md5($_POST['password'])
			))->find();
			if($user){
				$_SESSION['user'] = $user;
				$_SESSION['is_login'] = 1;
				$this->redirect("index/index");
			}else{
				$this->error("登录失败，请重新登录。",3,"index");
			}
			
		}
		function logout(){
			$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setCookie(session_name(),'',time()-3600,'/');
			}
			session_destroy();
			$this->success("退出成功。",1,"index");
		}
	}