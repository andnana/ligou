<?php
	class News {
		function index(){
			
			
			$title = "大连新霆企业顾问有限公司后台";
			
			
			$this->assign("title",$title);
			$news = D("news");
			$page = new Page($news->total(),5);
			
			$data = $news ->order("id desc") -> limit($page->limit)->select();
			$this -> assign("news",$data);
			$this -> assign("fpage",$page->fpage(0,3,4,5,6));
			$this->display();
		}
		function add(){
			$title = "大连新霆企业顾问有限公司后台";
			
			
			$this->assign("title",$title);
			$this->display();
		}
		function newssave(){
			$up = new FileUpload();
			$up -> set("mexSize",15000000);
			$up -> set("allowType", array("gif","jpg","png","jpeg"));
			$up -> set("israndname",true);
			$up -> set("thumb",array("width"=>56,"height"=>46,"prefix"=>"small_"));
			if($up->upload("picname")){
				$picnamesmall = $up -> getFileName();
			}else{
				$this -> error($up -> getErrorMsg());
			}
		//	$img = new Image("./public/uploads");
		//	$picnamesmall = $img -> thumb($picnamebig,56,46,"big_");
			
			$news = D("news");
			$_POST['picnamesmall'] = $picnamesmall;
		
		//	$data['title'] = $data01['title'];
		//	$data['title2'] = $data01['title2'];
		//	$data['content'] = $data01['content'];
		//	$data['picnamesmall'] = $picnamesmall;
		//	$data['picnamebig'] = $picnamebig;
		
			if($news->insert($_POST)){
				
				$this->success("添加成功");
			}else{
				$this->error("添加失败");
			}
		  
		
		}
		function newsdetail(){
			$newsdetail = D("news");
			$data = $newsdetail->find($_GET['id']);
			
		
			$data['uedittext'] = html_entity_decode($data['uedittext']);
		
			$this -> assign("newsdetail",$data);
		
			$this -> display();
		}
		function newsdelete(){
			
			$news = D("news");
			if($news->delete($_GET['id'])){
				
				$this->success("删除信息成功");
			}else{
				$this->error("删除信息失败");
			}
		}
	
	}