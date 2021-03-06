<?php
	namespace Controllers;
	use MS\MSController;
	use MS\Acl;
	class PaylasimEkle extends MSController{
		function __construct(){
			parent::__construct();
			$this->acl = new Acl(array(
				array(
					"actions" => array("actionIndex"),
					"expression" => $this->model("LogInOut")->IsLogin() and $this->Kontrol(),
					"redirect" => "Main"
				)
			));
		}
		function actionIndex(){
			$this->controller("Header");
			$data =array_merge( $this->model("Paylasim")->PaylasimEkle(),$this->model("LogInOut")->GetLoginedUser());
			$this->view("PaylasimEkle",$data);
		}
		function Kontrol(){
			$Uye = $this->model("LogInOut")->GetLoginedUser();
			$Uye = $Uye["UyeBilgileri"][0];
			$Tip = $Uye["Tip"];
			if($Tip == 3){
				return true;
			}
			return false;
		}
	}
?>