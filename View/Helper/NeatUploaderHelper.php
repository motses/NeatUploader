<?php 
class NeatUploaderHelper extends AppHelper{
	public $helpers = array("Html");

	public function init(){
		$toreturn = "<link href=\"/neat_uploader/css/neat-little-uploader.css\" rel=\"stylesheet\">";
		// $toreturn = $this->Html->css("/neat_uploader/css/neat-little-uploader.css",array("plugin" => true));
		$toreturn.= $this->Html->script("/neat_uploader/js/neat-little-uploader.js",array("plugin" => true));
		return $toreturn;
	}

	public function show($ref){
		return $this->requestAction(array("controller" => "Uploads","plugin" => "neat_uploader","action" => "uploader",$ref));
	}
}