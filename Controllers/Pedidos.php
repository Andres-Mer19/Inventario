<?php 

	class Pedidos extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Pedidos()
		{
		 $data['page_tag'] = "Pedidos";
		 $data['page_title'] = "PEDIDOS <small> Inventario WEB</small>";
		 $data['page_name'] = "pedidos";
			$this->views->getView($this,"pedidos",$data);
		}

		public function getPedidos()
		{
			$arrData = $this->model->selectPedidos();

			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				$arrData[$i]['options'] = '<div class="text-center">

				
				<button class="btn btn-primary btn-sm btnEditPed" onClick="fntEditPed('.$arrData[$i]['idped'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				
				<button class="btn btn-danger btn-sm btnDelPed" onClick="fntDelPed('.$arrData[$i]['idped'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>

				</div>';
			}
			
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
			
		}

		public function setPedido(){
			
			//$intIdrol = intval($_POST['idRol']);
			$strNombre =  strClean($_POST['txtNombre']);
			$strFc = strClean($_POST['txtFc']);
			$strAspecto =  strClean($_POST['listAsp']);
			$strClas = strClean($_POST['listClas']);
			$strCantidad =  strClean($_POST['txtCantidad']);
			$intStatus = intval($_POST['listStatus']);
			$request_pedido = $this->model->insertPedido($strNombre,$strFc,$strAspecto,$strClas,$strCantidad,$intStatus);



			if($request_pedido > 0)
			{
				$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				
			}else if($request_pedido == 'exist'){
				
				$arrResponse = array('status' => false, 'msg' => '¡Atención! El Pedido ya existe.');
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}
			
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		}

	}
 ?>