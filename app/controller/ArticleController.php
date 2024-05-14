<?php


class ArticleController
{
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = new ArticleModel();
    }

    public function showAllArticles()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $role = $_SESSION['role'];
        }
        $data = $this->articleModel->getAllArticle();

        $isAdmin = false; // Suppose que l'utilisateur n'est pas un administrateur pour le moment
        $totalArticles = $data[0];
        $result = $data[1];
        require VIEW . '/articles.php';
    }
    public function article_detail($id_art)
    {
        $row = $this->articleModel->readArticle($id_art);
        include(VIEW . "/article_details.php");
    }
}
