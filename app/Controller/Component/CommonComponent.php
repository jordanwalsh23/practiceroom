<?php
App::uses('Component', 'Controller');
class CommonComponent extends Component {

	public $components = array('Session');
	
	public function initialize(Controller $controller) {         
	}
	
	function customize_error_msg($errors = array(), $main_msg = 'We found error while processing your entries') {        
		$return_msg = "<h4>" . $main_msg . "</h4><ul>";
		
		foreach($errors as $key => $value):
			$return_msg .= "<li>{$value}</li>";
		endforeach;
		
		$return_msg .= "</ul>";
		$this->Session->setFlash($return_msg, 'flash_failure');
	}
}
