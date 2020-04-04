<?php
class ArticlesModel extends Model{
    
    public function selectArticle($article_id)
    {
        $sql = "SELECT * FROM articles WHERE id = :article_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['article_id' => $article_id]);
        
        $post = $stmt->fetch(PDO::FETCH_ASSOC);
        return $post;
    }
    
    public function selectAllArticles()
    {
        $sql = "SELECT * FROM articles";
        $answer = $this->db->query($sql);  
        $res = $answer->fetchall(PDO::FETCH_ASSOC);
        
        return $res;
    }
    public function selectSomeArticles($count)
    {
        $sql = "SELECT * FROM articles LIMIT 0, $count";
        $query = $this->db->prepare($sql);
        $query->execute(['count_art' => "$count"]);
        $res = $query->fetchall(PDO::FETCH_ASSOC);
        
        return $res;
    }

    public function insertArticle($title,$content,$image)
    {
        $sql = "INSERT INTO articles VALUES
            (NULL,:title,:content,:image)";
        
        $stmt = $this->db->prepare($sql);
        $res = $stmt->execute(['title'    => $title,
                               'content' => $content,
                               'image'    => $image]);
        if($res){
            return true;
        }                            
    }

    public function updateArticle(){}

    public function deleteArticle(){}
}