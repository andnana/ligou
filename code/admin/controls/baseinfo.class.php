<?php
	class Baseinfo {
		function index(){
			
			
				$title = "大连新霆企业顾问有限公司后台";
			
			
			$this->assign("title",$title);
			$this->display();
		}
		function service(){
					
					
						$title = "大连新霆企业顾问有限公司后台";
					
					
					$this->assign("title",$title);
					$this->display();
				}
		function contact(){
					
					
						$title = "大连新霆企业顾问有限公司后台";
					
					
					$this->assign("title",$title);
					$this->display();
				}
		function about(){
					
					
						$title = "大连新霆企业顾问有限公司后台";
					
					
					$this->assign("title",$title);
					$this->display();
				}
		function message(){
					
					
						$title = "大连新霆企业顾问有限公司后台";
					
					
					$this->assign("title",$title);
					
					$usermessage = D("usermessage");
			$page = new Page($usermessage->total(),5);
			
			$data = $usermessage ->order("id desc") -> limit($page->limit)->select();
			$this -> assign("usermessage",$data);
			$this -> assign("fpage",$page->fpage(0,3,4,5,6));
					
					$this->display();
				}
		function messagedelete(){
			
			$message = D("usermessage");
			if($message->delete($_GET['id'])){
				
				$this->success("删除信息成功");
			}else{
				$this->error("删除信息失败");
			}
		}
		function messagedetail(){
			
			$messagedetail = D("usermessage");
			$data = $messagedetail->find($_GET['id']);
			$this -> assign("messagedetail",$data);
			$this->display();
			
		}
		function welcome(){
			
			
				$title = "大连新霆企业顾问有限公司后台";
			
			
			$this->assign("title",$title);
			$this->display();
		}
		function pagepic(){
					
					
						$title = "大连新霆企业顾问有限公司后台";
					
					
					$this->assign("title",$title);
					$this->display();
				}
		function pagepicsave(){
			$up = new FileUpload();
			$up -> set("mexSize",15000000);
			$up -> set("allowType", array("gif","jpg","png","jpeg"));
			$up -> set("israndname",true);
			$up -> set("thumb",array("width"=>970,"height"=>308));
			if($up->upload("pic")){
				$pic = $up -> getFileName();
			}else{
				$this -> error($up -> getErrorMsg(), 3, "index");
			}
			$pagepic = D("pagepic");
			$pagepic->delete(array("id >"=>0));
			$_POST['pic'] = $pic;
			if($pagepic->insert($_POST)){
				
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		}
		function welcomesave(){
			
			$welcome = D("welcome");
			$welcome->delete(array("id >"=>0));
			if($welcome->insert($_GET)){
				
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		}
		function servicesave(){
			$up = new FileUpload();
			$up -> set("mexSize",15000000);
			$up -> set("allowType", array("gif","jpg","png"));
			$up -> set("israndname",true);
			$up -> set("thumb",array("width"=>150,"height"=>150));
			if($up->upload("pic")){
				$picname = $up -> getFileName();
			}else{
				$this -> error($up -> getErrorMsg(), 3, "index");
			}
			$service = D("service");
			$service->delete(array("id >"=>0));
			$data01 = $_POST;
			$data['title'] = $data01['title'];
			$data['title2'] = $data01['title2'];
			$data['content'] = $data01['content'];
			$data['pic'] = $picname;
			if($service->insert($data)){
				
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		}
		function contactsave(){
			
			$contact = D("contact");
			$contact->delete(array("id >"=>0));
			if($contact->insert($_GET)){
				
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		}
		function nowcontact(){
			$nowcontact = D("nowcontact");
		
			$page = new Page($nowcontact->total(),5);
			
			$data = $nowcontact ->order("id desc") -> limit($page->limit)->select();
			$this -> assign("nowcontact",$data);
			$this -> assign("fpage",$page->fpage(0,3,4,5,6));
			
			$this->display();
		}
		function nowcontactdetail(){
			$nowcontact = D("nowcontact");
			$data = $nowcontact->find($_GET['id']);
			$this -> assign("nowcontactdetail",$data);
			$this->display();
		}
		function nowcontactdelete(){
			$nowcontact = D("nowcontact");
			if($nowcontact->delete($_GET['id'])){
				
				$this->success("删除信息成功");
			}else{
				$this->error("删除信息失败");
			}
		}
		function footer(){
			
			$this->display();
		}
		function footersave(){
			
			$footer = D("footer");
			$footer->delete(array("id >"=>0));
			if($footer -> insert($_POST,1,1)){
				$this -> success("添加信息成功。");
			}else{
				$this -> error($footer->getMsg());
			}
		}
	}
