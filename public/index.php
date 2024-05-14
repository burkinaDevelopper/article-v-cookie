<?php
session_start();

include(MODEL . '/ArticleModel.php');
include(MODEL . '/UserModel.php');
include(CONTROL . '/HomeController.php');
include(CONTROL . '/ArticleController.php');
include(CONTROL . '/FavoriteController.php');
include(CONTROL . '/About.php');
include(CONTROL . '/UserController.php');


$home = new HomeController();
$articles = new ArticleController();
$favorite = new FavoriteController();
$about = new About();
$userController = new UserController();
try {
    if (empty($_GET["page"])) {
        $home->home();
    } else {
        $url = explode("/", filter_var($_GET["page"]), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case 'accueil':

                $home->home();
                break;
            case 'articles':
                if (empty($url[1])) {
                    $articles->showAllArticles();
                } else {
                    $articles->article_detail($url[1]);
                }
                break;
            case 'favorite':
                $id = $_POST['id_art'];
                $favorite->addFavorite($id);
                break;
            case 'favorites':
                $favorite->getFavoriteArticles();
                break;
            case 'delete_favorite':
                $id = $_POST['article_id'];
                $favorite->deleteFavorite($id);
                break;
            case 'about':
                $about->about();
                break;
            case 'login':
                $userController->index();
                break;
            case 'validation_login':
                $password = $_POST['password'];
                $username = $_POST['username'];

                if (isset($_POST['username']) && isset($_POST['password'])) {
                    $userController->connextion_login($username, $password);
                }
                break;
            case 'profile':
                if (isset($_SESSION['user'])) {
                    $userController->profile();
                } else {
                    header("Location:" . URL . "/login");
                }
                break;
            case 'logout':
                if (isset($_SESSION['user'])) {
                    $userController->logout();
                } else {
                    header("Location:" . URL . "/accueil");
                }
        }
    }
} catch (Exception $th) {
    throw new Exception("cette page n'existe pas");
}
