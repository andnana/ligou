<?php
	class UserAction extends Common {
		function index() {
			$user=D("user");  //用多少次只连接一次数据库
		$this->assign("user",$user);
		$page = new Page($user->total(),5);
			
			$data = $user ->order("id desc") -> limit($page->limit)->select();

			$this -> assign("user",$data);
			$this -> assign("fpage",$page->fpage(0,3,4,5,6));
		$this->display();
		} 
		function userdetail(){
			
			$user=D("user");
			$data = $user->where($_GET['id'])->find();
			$this->assign("user",$data);
			$this->display();
		}
		function updatepass(){
			p($_POST['password']);
			$user=D("user");
			$_POST['password'] = md5($_POST['password']);
			//p($_POST);
			if($user->update($_POST)){
				$this->success("信息更新成功");
			}else{
				$this->error("信息更新失败");
			}
		}
		function add(){
			$this->display();
		}
		function usersave(){
			if(strlen($_POST['password']) > 20 || strlen($_POST['password']) < 3){
				
				$this -> error("密码必须在3-20个字符之间ss");
			}
			if($_POST['password'] != $_POST['password2']){
				$this->error("两次输入的密码不一致，请重新输入。");
			}
			$up = new FileUpload();
			$up -> set("mexSize",15000000);
			$up -> set("allowType", array("gif","jpg","png","jpeg"));
			$up -> set("israndname",true);
			$up -> set("thumb",array("width"=>65,"height"=>65));
			if($up->upload("picname")){
				$picname = $up -> getFileName();
			}else{
				$this -> error($up -> getErrorMsg());
			}
			
			$user = D("user");
			
			$_POST['password'] = md5($_POST['password']);
			$_POST['picname'] = $picname;
			
			if($user->insert($_POST,1,1)){
				$this->success("添加用户成功。");
			}else{
				$this->error($user->getMsg());
			}
		}
		function userupdate(){
			
		
			
				$user = D("user");
					if($_POST['base']==null){
						$_POST['base']="off";
					}
					if($_POST['service']==null){
						$_POST['service']="off";
					}
					if($_POST['news']==null){
						$_POST['news']= "off";
					}
					if($_POST['message']==null){
						$_POST['message']= "off";
					}
					if($_POST['super']==null){
						$_POST['super']= "off";
					}
				if($user->update()){
					$this->success("修改用户权限成功。");
				}else{
					$this->error("修改用户权限失败。");
				}
			
			
		}
		function changeauthority(){
			
			$user = D("user");
			$data = $user -> where($_GET['id']) -> find();
			$this -> assign("user",$data);
			$this->display();
		}
		function userdelete(){
			$user = D("user");
			if($user -> delete($_GET['id'])){
				
				$this -> success("删除用户成功。");
			}else{
				$this -> error("删除用户失败。");
			}
			
		}
	}
