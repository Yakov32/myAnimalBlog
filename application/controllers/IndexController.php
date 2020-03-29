<?php
class IndexController extends Controller{
		
	protected $pageData = array("title" => "HomePage");

	public function index()
	{
		$model = new ArticlesModel;
		$articles = $model->selectSomeArticles(6);

		$this->pageData['articles'] = $articles;

		$this->View->render('IndexView',$this->pageData);
	}
} 
 ?>