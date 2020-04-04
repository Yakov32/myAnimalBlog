<?php
class PostController extends Controller{

    protected $pageData = array("title" => "Article");

    public function addArticle()
    {
        $model = new ArticlesModel;

        if($_FILES['image'][error] === 4 && $_FILES['image']['size'] === 0){
            
            $this->pageData['articleMessage'] = 'Картинка обязательна';
            $this->View->render('indexView', $this->pageData);
            return false;
        }
        
        uploadImage($_FILES['image']);

        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);
        //Adding a  post in table.
        $res = $model->insertArticle($title,$content,$newImageName);
        
        if($res){
            $this->pageData['articleMessage'] = 'Пост добавлен!';
        }
        
        $this->View->render('indexView',$this->pageData);
    }


    public function uploadImage(array $image)
    {
        $typeOfImage = explode('.',$image['name'])[1];
        $newImageName = bin2hex(random_bytes(15)) . '_post_image.'. $typeOfImage;

        $imagesPath = $_SERVER['DOCUMENT_ROOT']. '/public/images';
        
        if(!file_exists($imagesPath. '/posts')){
            mkdir($imagesPath. '/posts');
        }

        if(move_uploaded_file($_FILES['image']['tmp_name'],$imagesPath. '/posts/'. $newImageName)){
            return $newImageName;
        }
        

    }

    public function getOnePost()
    {  
        $post_id = $_GET['post_id'];

        $model = new ArticlesModel;
        $post = $model->selectArticle($post_id);
        
        $this->pageData['post'] = $post;
        $this->View->render('FullArticlePage',$this->pageData);
        

    }
}