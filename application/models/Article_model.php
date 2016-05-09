<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article_model extends MY_Model {
	public $table = 'article'; // Set the name of the table for this model.
	public $primary_key = 'id'; // Set the primary key
	public function __construct(){
		$this->soft_deletes = FALSE;
		$this->timestamps = TRUE;
		$this->timestamps_format = 'Y-m-d H:i:s';
		$this->return_as = 'object';
		//$this->has_many['product_images'] = ['foreign_model'=>'Product_images_model','foreign_table'=>'product_images','foreign_key'=>'product_id','local_key'=>'id'];
		parent::__construct();
	}
}

/* End of file Article_model.php */
/* Location: ./application/models/Article_model.php */