<?php 
	class Proveedores extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function Proveedores()
		{
			$data['page_tag'] = "Proveedores";
			$data['page_title'] = "PROVEEDORES <small> Inventario WEB</small>";
			$data['page_name'] = "proveedores";
			$this->views->getView($this,"proveedores",$data);
		}

		public function getProveedores()
		{
			$arrData = $this->model->selectProveedores();
			
			for ($i=0; $i < count($arrData); $i++) {

				if($arrData[$i]['status'] == 1)
				{
					$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
				}else{
					$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
				}

				
				$arrData[$i]['options'] = '<div class="text-center">

				
				<button class="btn btn-primary btn-sm btnEditProv" onClick="fntEditProv('.$arrData[$i]['idprov'].')" title="Editar"><i class="fas fa-pencil-alt"></i></button>
				
				<button class="btn btn-danger btn-sm btnDelProv" onClick="fntDelProv('.$arrData[$i]['idprov'].')" title="Eliminar"><i class="far fa-trash-alt"></i></button>

				</div>';
			}
			echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function getProveedor(int $idproveedor)
        {
            $intIdprov = intval(strClean($idproveedor));
            if($intIdprov > 0)
            {
                $arrData = $this->model->selectProveedor($intIdprov);
                if(empty($arrData))
                {
                    $arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
                }else{
                    $arrResponse = array('status' => true, 'data' => $arrData);
                }
                echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            }
            die();
        }

		public function setProveedor(){
			
			//$intIdprov = intval($_POST['idprov']);
			$strNombre =  strClean($_POST['txtNombre']);
			$strApellido = strClean($_POST['txtApellido']);
			$strEmail =  strClean($_POST['txtEmail']);
			$strTelefono = strClean($_POST['txtTelefono']);
			$intStatus = intval($_POST['listStatus']);
			$request_proveedor = $this->model->insertProveedor($strNombre,$strApellido,$strEmail,$strTelefono,$intStatus);

			if($request_proveedor > 0)
			{
				$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
				
			}else if($request_proveedor == 'exist'){
				
				$arrResponse = array('status' => false, 'msg' => '¡Atención! El proveedor ya existe.');
			}else{
				$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
			}

			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			die();
		}

		public function delProveedor()
        {
            if($_POST){
                $intIdprov = intval($_POST['idrol']);
                $requestDelete = $this->model->deleteProveedor($intIdprov);
                if($requestDelete == 'ok')
                {
                    $arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Proveedor');
                }else if($requestDelete == 'exist'){
                    $arrResponse = array('status' => false, 'msg' => 'No es posible eliminar un Proveedor');
                }else{
                    $arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Proveedor.');
                }
                echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
            }
            die();
        }

	}
 ?>