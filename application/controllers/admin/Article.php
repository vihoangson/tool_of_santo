<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends Backend {

	public function index()
	{
		$rs = $this->article_model->get_all();
		$this->twig->display("admin/homepage",compact('rs'));
	}

	public function create(){
		$params[] = [
			"article_title"=>time(),
			"article_content"=>time(),
			"article_tags"=>time(),
		];
		$this->article_model->insert($params);
	}

	public function input($id=null){
		$this->save($id);
		$rs=null;
		if($id){
			$rs = $this->article_model->get($id);
		}
		$this->twig->display("admin/input_article",compact('rs'));
	}

	private function save($id=null){
		if($this->input->post()){
			$article_title = $this->input->post('article_title');
			$article_content = $this->input->post('article_content');
			$article_tags = $this->input->post('article_tags');
			if(!$article_title){
				return false;
			}
			$params = [
				"article_title"=>$article_title,
				"article_content"=>$article_content,
				"article_tags"=>$article_tags,
			];
			if(!$id){
				$this->article_model->insert($params);
			}else{
				$this->article_model->where(["id"=>(int)$id]);
				$this->article_model->update($params);
			}
			redirect('/admin/article','refresh');
		}
	}

}

/* End of file Article.php */
/* Location: ./application/admin/Article.php */