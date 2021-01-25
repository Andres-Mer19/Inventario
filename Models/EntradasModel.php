<?php 

	class EntradasModel extends Mysql
	{
		public $intIdEnt;
		public $strNombre;
		public $strFc;
		public $strCantidad;
		public $strFll;
		public $strRecibido;
		public $intStatus;
		
		public function __construct()
		{
			parent::__construct();
		}

		public function selectEntradas()
		{
			//EXTRAE Materia Prima
			$sql = "SELECT * FROM entrada WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function insertEntrada(string $nombre, string $fechac, string $cantidad, string $fechall, string $recibido, int $status){

			$return = "";
			$this->strNombre = $nombre;
			$this->strFc = $fechac;
			$this->strCantidad = $cantidad;
			$this->strFll = $fechall;
			$this->strRecibido = $recibido;
			$this->intStatus = $status;

			$sql = "SELECT * FROM entrada WHERE nombre = '{$this->strNombre}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO entrada(nombre, fechaCosecha, cantidad, fechaLlegada, recibido, status) VALUES(?,?,?,?,?,?)";
	        	$arrData = array($this->strNombre, $this->strFc, $this->strCantidad, $this->strFll, $this->strRecibido, $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}
	}
 ?>