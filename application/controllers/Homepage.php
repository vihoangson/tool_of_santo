<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Frontend {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$rs = $this->article_model->order_by(["id"=>"DESC"])->get_all();
		$this->twig->display("homepage",compact('rs'));
	}

}
