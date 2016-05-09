<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('article_model');
	}
}
class Frontend extends MY_Controller {

}
class Backend extends MY_Controller {

}
/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */