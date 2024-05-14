<?php


class FavoriteController
{
    private $pressModel;

    public function __construct()
    {
        // $this->pressModel = new PressModel();
    }

    public function addFavorite($id_art)
    {

        $cookie_name = "articles";
        $cookie_value = strval($id_art) . "a";
        if (!isset($_COOKIE[$cookie_name])) {
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        } else {
            $cookies = explode("a", $_COOKIE[$cookie_name]);
            $data_id = [];

            foreach ($cookies as $cookie) {
                if (!empty($cookie)) {
                    array_push($data_id, $cookie);
                }
            }
            if (in_array($id_art,  $data_id)) {
                echo "<script>alert('deja ajouter')</script>";
                header('Location: favorites');
            } else {
                array_push($data_id, $id_art);
                $arry = implode("a", $data_id);
                $cookie_value = $arry . "a";
                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            }
        }
        header('Location:favorites');
    }

    public function getFavoriteArticles()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $role = $_SESSION['role'];
        }
        $cookie_name = "articles";
        if (isset($_COOKIE[$cookie_name]) && !empty($_COOKIE[$cookie_name])) {
            $cookies = explode("a", $_COOKIE[$cookie_name]);
            $data_id = [];
            foreach ($cookies as $cookie) {
                if (!empty($cookie)) {
                    array_push($data_id, $cookie);
                }
            }
            $artilce = new ArticleModel();
            if (isset($data_id) && !empty($data_id)) {
                $result = $artilce->displayFavorite($data_id);
            }
        }

        include(VIEW . "/favoPage.php");
    }
    public function deleteFavorite($id)
    {
        $cookie_name = "articles";
        $data_id = [];
        $cookies = explode("a", $_COOKIE[$cookie_name]);
        foreach ($cookies as $cookie) {
            if ($cookie != $id) {
                array_push($data_id, $cookie);
            }
        }
        $arry = implode("a", $data_id);
        $cookie_value = $arry . "a";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header('Location:favorites ');
    }
}
