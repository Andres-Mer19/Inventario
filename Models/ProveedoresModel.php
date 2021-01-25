<?php 

	class proveedoresModel extends Mysql
	{
		public $intIdProv;
		public $strNombre;
		public $strApellido;
		public $strEmail;
		public $strTelefono;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}	

		public function selectProveedores()
		{
			//EXTRAE PROVEEDORES
			$sql = "SELECT * FROM proveedor WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectProveedor(int $idprov)
		{
			//BUSCAR PROVEEDORES
			$this->intIdProv = $idprov;
			$sql = "SELECT * FROM proveedor WHERE idprov = $this->intIdProv";
			$request = $this->select($sql);
			return $request;
		}

		public function insertProveedor(string $nombre, string $apellido, string $email, string $telefono,int $status){

			$return = "";
			$this->strNombre = $nombre;
			$this->strApellido = $apellido;
			$this->strEmail = $email;
			$this->strTelefono = $telefono;
			$this->intStatus = $status;

			$sql = "SELECT * FROM proveedor WHERE nombrer = '{$this->strNombre}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO proveedor(nombrer,apellido,emailprov,telefono,status) VALUES(?,?,?,?,?)";
	        	$arrData = array($this->strNombre, $this->strApellido, $this->strEmail, $this->strTelefono, $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}

		public function deleteProveedor(int $idprov)
		{
			$this->intIdprov = $idprov;
			$sql = "SELECT * FROM entrada";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE proveedor SET status = ? WHERE idprov = $this->intIdprov ";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}else{
				$request = 'exist';
			}
			return $request;
		}
	}
 ?>