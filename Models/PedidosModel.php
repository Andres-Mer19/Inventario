<?php 

	class PedidosModel extends Mysql
	{
		
		public $strNombre;
		public $strFc;
		public $strAspecto;
		public $strClas;
		public $strCantidad;
		public $intStatus;

		public function __construct()
		{
			parent::__construct();
		}

		public function selectPedidos()
		{
			//EXTRAE pedido
			$sql = "SELECT * FROM pedido WHERE status != 0";
			$request = $this->select_all($sql);
			return $request;
		}

		public function insertPedido(string $nombre, string $fechac, string $aspecto, string $clasificacion, string $cantidad, int $status){

			$return = "";
			$this->strNombre = $nombre;
			$this->strFc = $fechac;
			$this->strAspecto = $aspecto;
			$this->strClas = $clasificacion;
			$this->strCantidad = $cantidad;
			$this->intStatus = $status;

			$sql = "SELECT * FROM pedido WHERE nombre = '{$this->strNombre}' ";
			$request = $this->select_all($sql);


			if(empty($request))
			{
				$query_insert  = "INSERT INTO pedido(nombre,fechaCosecha,estado,clasificacion,cantidad,status) VALUES(?,?,?,?,?,?)";
	        	$arrData = array($this->strNombre, $this->strFc, $this->strAspecto, $this->strClas, $this->strCantidad,  $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}/*else if($request){
				$query_insert  = "INSERT INTO pedido(nombre,fechaCosecha,estado,clasificacion,cantidad,status) VALUES(?,?,?,?,?,?)";
	        	$arrData = array($this->strNombre, $this->strFc, $this->strAspecto, $this->strClas, $this->strCantidad,  $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;

			}*/
			else{
				$return = "exist";
			}
			return $return;
		}
	}
 ?>