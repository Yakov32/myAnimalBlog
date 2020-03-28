<?php
class IndexController extends Controller{
		
	protected $pageData = array("title" => "HomePage");

	public function index()
	{
		$model = new ArticlesModel;
		$articles = $model->selectAllArticles();

		$this->pageData['articles'] = $articles;

		$this->View->render('IndexView',$this->pageData);
	}
} 
 ?>