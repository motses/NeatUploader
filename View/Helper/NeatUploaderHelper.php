<?php 
class NeatUploaderHelper extends AppHelper{
	public $helpers = array("Html");

	public function init(){
		$toreturn = $this->Html->css("/neat_uploader/css/uploader/neat-little-uploader.css","plugin" => true);
		$toreturn.= $this->Html->script("neat_uploader/js/uploader/neat-little-uploader.js","plugin" => true);
		return $toreturn;
	}

	public function show($ref){
		return $this->requestAction(array("controller" => "Uploads","plugin" => "neat_uploader","action" => "uploader",$ref));
	}
}