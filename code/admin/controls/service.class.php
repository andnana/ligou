<?php
	class Service {
		function index(){
			
			
			$title = "大连新霆企业顾问有限公司后台";
			
			
			$this->assign("title",$title);
			$servicepage = D("servicepage");
			$page = new Page($servicepage->total(),5);
			
			$data = $servicepage ->order("id desc") -> limit($page->limit)->select();

			$this -> assign("servicepage",$data);
			$this -> assign("fpage",$page->fpage(0,3,4,5,6));
			$this->display();
		}
		function add(){
			
			$title = "大连新霆企业顾问有限公司后台";
			
			
			$this->assign("title",$title);
			$this->display();
		}
		function servicesave(){
			$up = new FileUpload();
			$up -> set("mexSize",15000000);
			$up -> set("allowType", array("gif","jpg","png","jpeg"));
			$up -> set("israndname",true);
			$up -> set("thumb",array("width"=>65,"height"=>65));
			if($up->upload("picname")){
				$picname = $up -> getFileName();
			}else{
				$this -> error($up -> getErrorMsg(), 3, "index");
			}
			$servicepage = D("servicepage");
		  
			$data01 = $_POST;
			$data['title'] = $data01['title'];
			$data['introduct'] = $data01['introduct'];
			$data['uedittext'] = $data01['uedittext'];
			$data['picname'] = $picname;
			if($servicepage->insert($data,1,0)){
				
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		  
		
		}
		function servicedetail(){
			$servicepage = D("servicepage");
			$data = $servicepage->find($_GET['id']);
			$data['uedittext'] = html_entity_decode($data['uedittext']);
			$this -> assign("servicedetail",$data);
			$this->display();
			
		}
		function servicedelete(){
			$servicepage = D("servicepage");
			if($servicepage->delete($_GET['id'])){
				
				$this->success("删除信息成功");
			}else{
				$this->error("删除信息失败");
			}
		}
	
	}