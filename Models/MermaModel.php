<?php 

	class MermaModel extends Mysql
	{

		public $strNombre;
		public $strFc;
		public $strCantidad;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectMerma()
		{
			//EXTRAE Exportacion
			$sql = "SELECT * FROM merma WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function insertMerma(string $nombre, string $fechac, string $cantidad, int $status){

			$return = "";
			$this->strNombre = $nombre;
			$this->strFc = $fechac;
			$this->strCantidad = $cantidad;
			$this->intStatus = $status;

			$sql = "SELECT * FROM merma WHERE nombre = '{$this->strNombre}' ";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$query_insert  = "INSERT INTO merma(nombre,fechaCosecha,cantidad,status) VALUES(?,?,?,?)";
	        	$arrData = array($this->strNombre, $this->strFc, $this->strCantidad, $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}
	}
 ?>