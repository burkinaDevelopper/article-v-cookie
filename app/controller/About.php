<?php

class About
{

    public function about()
    {
        if (isset($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $role = $_SESSION['role'];
        }
        include(VIEW . "/about.php");
    }
}