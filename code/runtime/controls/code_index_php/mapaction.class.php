<?php
	class MapAction extends Common {
		function index(){
			//echo "<b>��ӭʹ�á�ϸ˵PHP���е�BroPHP���1.0, ��һ�η���ʱ���Զ�������Ŀ�ṹ��</b><br>";
			//echo '<pre>';
			//echo file_get_contents('C:/AppServ/www/xsphp/runtime/_xsphp_index.php');
			//echo '</pre>';
			
			$title = "����������ҵ�������޹�˾";
			
			
			$this->assign("title",$title);
			
			$this->display();
		}		
	}