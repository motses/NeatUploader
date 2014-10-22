<?php
class UploadsController extends NeatUploaderAppController {
    public $uses = array('NeatUploader.Upload');

    public function uploader($ref) {
    	$this->layout = false;
    	$this->set("ref",$ref);
    	$this->render("uploader");	
    }

    public function upload(){
    	$filename = (isset($_SERVER['HTTP_X_FILENAME']) ? $_SERVER['HTTP_X_FILENAME'] : false);
		$ext = pathinfo($filename, PATHINFO_EXTENSION);
		$file = file_get_contents('php://input');
		$new_filename = uniqid() . '.' . $ext;
		if(file_put_contents(WWW_ROOT . 'files/uploads/' . $new_filename, $file))
		{
		  return new CakeResponse(array("body" => json_encode(array('success' => 1, 'error' => 0, 'original_filename' => $filename, 'new_filename' => $new_filename)),"type" => "json"));
		}
		else
		{
		  return new CakeResponse(array("body" => json_encode(array('success' => 0, 'error' => 'error writing file')),"type" => "json"));
		}
    }

    public function admin_uploader($ref){
    	$this->layout = false;
    	$this->set("ref",$ref):
    	$this->render("uploader");
    }
}