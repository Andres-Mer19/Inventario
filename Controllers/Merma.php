<?php 

	class Merma extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Merma()
		{
			$data['page_tag'] = "Merma";
			$data['page_title'] = "MERMA <small> Inventario WEB</small>";
			$data['page_name'] = "merma";
			$this->views->getView($this,"merma",$data);
		}

		public function getMerma()
		{
			$arrData = $this->model->selectMerma();
			
			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">

				
				<button class="btn btn-primary btn-sm btnEditMer" onClick="fntEditMer('.$arrData[$i]['idmer'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				
				<button class="btn btn-danger btn-sm btnDelMer" onClick="fntDelMer('.$arrData[$i]['idmer'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>

				</div>';
			}
			
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
	
		}

		public function setMerma(){
			
			//$intIdrol = intval($_POST['idRol']);
			$strNombre =  strClean($_POST['txtNombre']);
			$strFc = strClean($_POST['txtFc']);
			$strCantidad =  strClean($_POST['txtCantidad']);
			$intStatus = intval($_POST['listStatus']);
			$request_merma = $this->model->insertMerma($strNombre,$strFc,$strCantidad,$intStatus);

			if($request_merma > 0)
			{
				$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				
			}else if($request_merma == 'exist'){
				
				$arrResponse = array('status' => false, 'msg' => '¡Atención! El Rol ya existe.');
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
			
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		}

	}
 ?>