<?php
class HomeController
{

    public function home()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $role = $_SESSION['role'];
        }
        include(VIEW . "/home.php");
    }
}
