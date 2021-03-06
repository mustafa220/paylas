<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class BildirimOkundu extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array("actionIndex"),
					"expression" => $this->model("LogInOut")->IsLogin(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->model("BildirimOku")->Oku();
		}
	}
?>