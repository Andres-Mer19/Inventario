<?php 

	class Entradas extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Entradas()
		{
			$data['page_tag'] = "Entradas";
			$data['page_title'] = "ENTRADAS <small> Inventario WEB</small>";
			$data['page_name'] = "entradas";
			$this->views->getView($this,"entradas",$data);
		}

		public function getEntradas()
		{
			$arrData = $this->model->selectEntradas();
			
			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}


				$arrData[$i]['options'] = '<div class="text-center">

				
				<button class="btn btn-primary btn-sm btnEditEnt" onClick="fntEditEnt('.$arrData[$i]['ident'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				
				<button class="btn btn-danger btn-sm btnDelEnt" onClick="fntDelEnt('.$arrData[$i]['ident'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>

				</div>';
			}
			
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function setEntrada(){
			
			//$intIdrol = intval($_POST['idRol']);
			$strNombre =  strClean($_POST['txtNombre']);
			$strFc = strClean($_POST['txtFc']);
			$strCantidad =  strClean($_POST['txtCantidad']);
			$strFll = strClean($_POST['txtFll']);
			$strRecibido = strClean($_POST['txtRecibido']);
			$intStatus = intval($_POST['listStatus']);
			$request_entrada = $this->model->insertEntrada($strNombre,$strFc,$strCantidad,$strFll,$strRecibido,$intStatus);

			if($request_entrada > 0)
			{
				$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				
			}else if($request_entrada == 'exist'){
				
				$arrResponse = array('status' => false, 'msg' => '¡Atención! El Rol ya existe.');
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
			
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		}

	}
 ?>