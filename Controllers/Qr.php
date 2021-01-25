<?php 

	class Qr extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Qr()
		{
			$data['page_id'] = 1;
			$data['page_tag'] = "Qr";
			$data['page_title'] = "QR <small> Inventario WEB</small>";
			$data['page_name'] = "qr";
			$this->views->getView($this,"qr",$data);
		}

	}
 ?>