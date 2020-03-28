<?php
class PostController extends Controller{
    
    protected $modelName = 'ArticlesModel';
    protected $pageData = array("title" => "HomePage");

    public function addArticle()
    {
        if($_FILES['image'][error] === 4 && $_FILES['image']['size'] === 0){
            
            $this->pageData['articleMessage'] = 'Картинка обязательна';
            $this->View->render('indexView', $this->pageData);
            return false;
        }
        
        //Add post picture
        $typeOfImage = explode('.',$_FILES['image']['name'])[1];
        $newImageName = bin2hex(random_bytes(15)) . '_post_image.'. $typeOfImage;

        $imagesPath = $_SERVER['DOCUMENT_ROOT']. '/public/images';
        
        if(!file_exists($imagesPath. '/posts')){
            mkdir($imagesPath. '/posts');
        }

        move_uploaded_file($_FILES['image']['tmp_name'],$imagesPath. '/posts/'. $newImageName);

        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        
        $res = $this->model->insertArticle($title,$content,$newImageName);
        
        if($res){
            $this->pageData['articleMessage'] = 'Пост добавлен!';
        }
        $this->View->render('indexView',$this->pageData);
    }
}
?>