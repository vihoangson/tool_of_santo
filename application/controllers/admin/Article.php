<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends Backend {

	public function index()
	{
		$rs = $this->article_model->get_all();
		$this->twig->display("admin/homepage",compact('rs'));
	}

	/**
	 * [create description]
	 * @return [type] [description]
	 */
	public function create(){
		$params[] = [
			"article_title"=>time(),
			"article_content"=>time(),
			"article_tags"=>time(),
		];
		$this->article_model->insert($params);
	}

	/**
	 * [input description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function input($id=null){
		if($this->save($id)){
			redirect('/admin/article','refresh');
		}

		$rs=null;
		if($id){
			$rs = $this->article_model->get($id);
		}
		$this->twig->display("admin/input_article",compact('rs'));
	}

	public function delete(){
		// TODO: Xử lý xóa article
	}

	/**
	 * [save_draf description]
	 * @return [type] [description]
	 */
	private function save_draf(){
		// TODO: Xửa lý lưu file nháp
		if($this->input->post()){
			$article_title   = $this->input->post('article_title');
			$article_content = $this->input->post('article_content');
			$article_tags    = $this->input->post('article_tags');
			if(!$article_title){
				return false;
			}
			$params = [
				"article_title"   =>$article_title,
				"article_content" =>$article_content,
				"article_tags"    =>$article_tags,
			];
			if(!$id){
				return $this->article_model->insert($params);
			}else{
				$this->article_model->where(["id"=>(int)$id]);
				return $this->article_model->update($params);
			}
		}
	}

	/**
	 * [save description]
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	private function save($id=null){
		if($this->input->post()){
			$article_title   = $this->input->post('article_title');
			$article_content = $this->input->post('article_content');
			$article_tags    = $this->input->post('article_tags');
			if(!$article_title){
				return false;
			}
			$params = [
				"article_title"   =>$article_title,
				"article_content" =>$article_content,
				"article_tags"    =>$article_tags,
			];
			if(!$id){
				return $this->article_model->insert($params);
			}else{
				$this->article_model->where(["id"=>(int)$id]);
				return $this->article_model->update($params);
			}
		}
	}

}

/* End of file Article.php */
/* Location: ./application/admin/Article.php */